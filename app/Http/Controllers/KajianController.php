<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\KategoriKajianController;
use App\Models\HistoryDownload;
use App\Models\Kajian;
use App\Models\TopikKajian;
use App\Models\VersionHistory;
use FineDiff\Diff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KajianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['index', 'show' ,'show_kajian', 'downloadKajian', 'showNewVersionDetail']);
    }

    public function index()
    {
        $kajian = Kajian::paginate(6);
        $kajianList = Kajian::all();

        if (Auth::check()) {
            Log::info('User is authenticated and is ' . Auth::user()->role . " = " . Auth::user()->isAdmin());
            if (Auth::user()->isAdmin()) {
                return view('kajian.admin_view.data_kajian', compact('kajian', 'kajianList'));
            } else {
                return view('kajian.main.kajian', compact('kajian', 'kajianList'));
            }
        } else {  
            return view('kajian.main.kajian', compact('kajian', 'kajianList'));
        }
    }

    public function show_kajian()
    {

        $kajians = Kajian::orderBy('created_at', 'desc')->paginate(6); 
        return view('kajian.main.kajian', compact('kajians'));

    }

    public function create()
    {
        Log::info('Create method called');
        $kajian = null;
        $kategori_kajian = TopikKajian::all();
        if (Auth::user()->isAdmin()) {
            return view('admin.form_create_admin'); // TODO: Not working
        } else {
            return view('kajian.write.form_create_user', compact('kajian', 'kategori_kajian'));
        }

    }

    /**
     * Store a newly created resource in storage.
     * Store as pada pathFoto dan pathDokumen akan menyimpan file ke dalam direktori public/storage/
     * pathFoto disimpan pada direktori public/storage/kajian/
     * pathDokumen disimpan pada direktori public/storage/documents/
     *
     * Note: Hal tersebut jika sudah diberikan storage:link (WAJIB)
     */
    public function store(Request $request)
    {
        Log::info('Store method called');
        Log::info('Request data: ', $request->all());

        $request->validate([
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_foto_kajian' => 'image|nullable|max:26000',
        ]);

        Log::info('Request data validated');

        $pathFoto = null;
        if ($request->hasFile('val_foto_kajian')) {
            $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $pathFoto = $request->file('val_foto_kajian')->storeAs('kajian', $fileNameToStore, 'public');
        }

        Log::info('Creating new Kajian with data: ', [
            'judul_kajian' => $request->val_judul,
            'slug' => Str::slug($request->val_judul), // Temp Slugs
            'pemateri' => $request->val_pemateri,
            'lokasi_kajian' => $request->val_tempat,
            'tanggal_postingan' => $request->val_tanggal,
            'deskripsi_kajian' => $request->val_deskripsi,
            'foto_kajian' => $pathFoto,
            'id_user' => Auth::user()->id,
        ]);

        $kajian = Kajian::create([
            'judul_kajian' => $request->val_judul,
            'slug' => Str::slug($request->val_judul), // Temp Slugs
            'pemateri' => $request->val_pemateri,
            'lokasi_kajian' => $request->val_tempat,
            'tanggal_postingan' => $request->val_tanggal,
            'deskripsi_kajian' => $request->val_deskripsi,
            'foto_kajian' => $pathFoto,
            'id_user' => Auth::user()->id,
        ]);

        $kajian->slug = Str::slug($kajian->judul_kajian).'-'.$kajian->id;
        $kajian->save();

        Log::info('Kajian created');

        $is_new_version = $request->is_new_version;
        $old_kajian_id = $request->old_kajian_id;
        if ($is_new_version != null && $is_new_version) {
            $versionHistory = VersionHistory::create([
                'old_kajian_id' => $old_kajian_id,
                'kajian_id' => $kajian->id,
                'user_id' => Auth::user()->id,
            ]);

            $oldKajian = Kajian::find($old_kajian_id);

            if (Auth::user()->role == 'admin') {
                return redirect()->route('data_kajian') // TODO: Untested
                    ->withSuccess('Terima kasih! Data berhasil disimpan');
            }
    
            return redirect()->route('kajian.new_version.konten', [$oldKajian, $versionHistory, $kajian]);
        }


        Log::info('Redirecting to: '.(Auth::user()->role == 'admin' ? 'data_kajian' : 'kajian.show'));
        if (Auth::user()->role == 'admin') {
            return redirect()->route('data_kajian') // TODO: Untested
                ->withSuccess('Terima kasih! Data berhasil disimpan');
        }

        return redirect()->route('kajian.konten', $kajian);

    }

    public function show_edit_konten(Kajian $kajian)
    {
        return view('kajian.write.form_edit_user', ['kajian' => $kajian]);
    }

    public function destroy($id)
    {
        $kajian = Kajian::find($id);

        if (! $kajian) {
            return redirect()->route('dashboard')->withError('Kajian tidak ditemukan');
        }

        $kajian->delete();
        if (Auth::user()->isAdmin()) {

            return redirect()->route('data_kajian')->withSuccess('Kajian berhasil dihapus');
        }

        return redirect()->route('profile.show')->withSuccess('Kajian berhasil dihapus');
    }

    public function show(Kajian $kajian)
    {
        // $kajian = Kajian::find($id);
        Log::info('Showing kajian with ID: '.$kajian->id);
        $uploaderUsername = null;
        if ($kajian && $kajian->user) {
            $uploaderUsername = $kajian->user->username;
        }

        $shareAbleUrl = route('kajian.show', $kajian->slug);

        $client = Auth::user();
        $versionHistory = $kajian->current_versions;
        $diffMessage = null;
        if ($versionHistory) {
            $commitMessageFilePath = public_path('storage/'.$versionHistory->commit_message);

            $commitMessageContent = is_file($commitMessageFilePath) ? file_get_contents($commitMessageFilePath) : null;

            $diffMessage = html_entity_decode($commitMessageContent);
        }

        if ($client != null &&  $client->isAdmin()) {
          
            return view(
                'kajian.admin_view.detail_kajian', 
                ['userkajian' => $kajian, 
                'uploaderUsername' => $uploaderUsername,
                'shareAbleUrl' => $shareAbleUrl,
                'diffMessage' => $diffMessage
                ]);

        } elseif ($client != null &&  $client->isRegistered()) {

            return view(
                'kajian.read.detail_kajian_asli_user', 
                ['userkajian' => $kajian, 
                'uploaderUsername' => $uploaderUsername,
                'shareAbleUrl' => $shareAbleUrl,
                'diffMessage' => $diffMessage
                ]);

        }
        return view('kajian.read.detail_kajian_asli_user', 
        ['userkajian' => $kajian, 
        'uploaderUsername' => $uploaderUsername,
        'shareAbleUrl' => $shareAbleUrl,
        'diffMessage' => $diffMessage
        ]);


    }

    /**
     * TODO: Ini masih pergi ke dasbor admin (ketika registered user yang melakukan)
     */
    public function create_new_version(Kajian $kajian)
    {

        Log::info('Creating new version for kajian with ID: '.$kajian->id);

        $kategori_kajian = TopikKajian::all();

        $new_version = true;
        $view = (Auth::user()->isAdmin()) ? 
            'kajian.write.form_create_admin' : 'kajian.write.form_create_user';

        return view($view, compact('kajian', 'kategori_kajian' , 'new_version'));

    }

    public function edit(Kajian $kajian)
    {
        $kategori_kajian = TopikKajian::all();
        return view('kajian.write.form_create_user', compact('kajian', 'kategori_kajian'));
    }

    public function update(Request $request, Kajian $kajian)
    {
        Log::info('Store method called');
        Log::info('Request data: ', $request->all());

        $request->validate([
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_foto_kajian' => 'image|nullable|max:26000',
        ]);

        Log::info('Request data validated');

        $pathFoto = null;
        if ($request->hasFile('val_foto_kajian')) {
            $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $pathFoto = $request->file('val_foto_kajian')->storeAs('kajian', $fileNameToStore, 'public');

            $kajian->foto_kajian = $pathFoto;
        }

        Log::info('Creating new Kajian with data: ', [
            'judul_kajian' => $request->val_judul,
            'slug' => Str::slug($request->val_judul), // Temp Slugs
            'pemateri' => $request->val_pemateri,
            'lokasi_kajian' => $request->val_tempat,
            'tanggal_postingan' => $request->val_tanggal,
            'deskripsi_kajian' => $request->val_deskripsi,
            'foto_kajian' => $pathFoto,
            'id_user' => Auth::user()->id,
        ]);

        
        $kajian->judul_kajian = $request->val_judul;
        $kajian->slug = Str::slug($request->val_judul); // Temp Slugs
        $kajian->pemateri = $request->val_pemateri;
        $kajian->lokasi_kajian = $request->val_tempat;
        $kajian->tanggal_postingan = $request->val_tanggal;
        $kajian->deskripsi_kajian = $request->val_deskripsi;
        

        $kajian->slug = Str::slug($kajian->judul_kajian).'-'.$kajian->id;
        $kajian->save();

        Log::info('Kajian created');

        Log::info('Redirecting to: '.(Auth::user()->role == 'admin' ? 'data_kajian' : 'kajian.show'));
        if (Auth::user()->role == 'admin') {
            return redirect()->route('data_kajian') // TODO: Untested
                ->withSuccess('Terima kasih! Data berhasil disimpan');
        }

        return redirect()->route('kajian.konten', $kajian);
    }

    // Contoh bagian controller untuk menangani unduhan
    public function downloadKajian($id)
    {
        Log::info('Download kajian with ID: '.$id);
        $kajian = Kajian::findOrFail($id);

        // Logika untuk menyimpan riwayat unduhan ke dalam tabel HistoryDownload
        $user = Auth::user(); // Mengambil pengguna yang terautentikasi
 
        $historyDownload = HistoryDownload::create([
            'user_id' => is_null($user) ? 0 : $user->id,
            'kajian_id' => $kajian->id,
            'downloaded_at' => now(),
        ]);

        // Logika untuk mengarahkan pengguna ke file kajian yang akan diunduh
        $prefix = env('FILE_DOWNLOAD_PATH', null);
        if ($prefix) {
            return response()->download($prefix.$kajian->file_kajian);
        } else {
            return response()->download(public_path('storage/'.$kajian->file_kajian));
        }
    }

    public function showNewVersionDetail($id)
    {
        $kajianNV = versionHistory::findOrFail($id); // Ganti dengan model dan method yang sesuai dengan struktur aplikasi kamu

        // Lakukan logika untuk menampilkan detail versi baru, misalnya:
        return view('user.detail_kajian_versi_baru_user', ['kajianNV' => $kajianNV]);
    }

    public function show_editor_new_version(Kajian $oldKajian, VersionHistory $version, Kajian $kajian)
    {

        Log::info('Kajian: ', $kajian->toArray());
        Log::info('Old Kajian: ', $oldKajian->toArray());

        $oldFilePath = public_path('storage/'.$oldKajian->file_kajian);

        $oldFileContent = is_file($oldFilePath) ? file_get_contents($oldFilePath) : '';
    
        // Check the old file content
        Log::info('Old File Content: ', [$oldKajian, $oldFilePath , $oldFileContent]);

        return view('kajian.write.form_editor', compact('oldFileContent', 'oldKajian', 'version', 'kajian'));
    }

    public function showEditor(Kajian $kajian)
    {
        return view('kajian.write.form_editor', compact('kajian'));
    }

    public function update_konten(Request $request, Kajian $kajian) 
    {
        $request->validate([
            'val_dokumen' => 'mimes:pdf,doc,docx|max:20480',
        ]);

        Log::info('Request data: ', $request->all());
        Log::info('Kajian Data: ', $kajian->toArray());
    
        $slug = $kajian->slug;
        
        $pathDokumen = null;
        if ($request->hasFile('val_dokumen')) {
            $extension = $request->file('val_dokumen')->getClientOriginalExtension();
            $fileNameToStore = $kajian->title . '_' . $kajian->id . '.' . $extension;
            $pathDokumen = $request->file('val_dokumen')->storeAs('documents', $fileNameToStore, 'public');
        } elseif($request->has('val_konten')) {
            // save the val_konten to txt
            $konten = $request->val_konten;
            $fileNameToStore = $kajian->title . '_' . $kajian->id . '.blade.php';
            $pathDokumen = 'documents/'.$fileNameToStore;
            Storage::disk('public')->put($pathDokumen, $konten);
        }

        $kajian->file_kajian = $pathDokumen;
        $kajian->save();

        return redirect()->route('kajian.show', $kajian)
            ->withSuccess('Terima kasih! Data berhasil disimpan');
    }


    public function update_konten_new_version(Request $request, Kajian $oldKajian, VersionHistory $version, Kajian $kajian)
    {
        $request->validate([
            'val_dokumen' => 'mimes:pdf,doc,docx|max:20480',
        ]);

        Log::info('Request data: ', $request->all());
        Log::info('Kajian Data: ', $kajian->toArray());
    
        $slug = $kajian->slug;
        
        
        $pathDokumen = null;
        if ($request->hasFile('val_dokumen')) {
            $extension = $request->file('val_dokumen')->getClientOriginalExtension();
            $fileNameToStore = $kajian->title . '_' . $kajian->id . '.' . $extension;
            $pathDokumen = $request->file('val_dokumen')->storeAs('documents', $fileNameToStore, 'public');
        } elseif($request->has('val_konten')) {
            // save the val_konten to txt
            $konten = $request->val_konten;
            $fileNameToStore = $kajian->title . '_' . $kajian->id . '.blade.php';
            $pathDokumen = 'documents/'.$fileNameToStore;
            Storage::disk('public')->put($pathDokumen, $konten);
        }

        if ($version) {
            $oldFilePath = public_path('storage/'.$oldKajian->file_kajian);
            $newFilePath = public_path('storage/'.$pathDokumen);

            $oldFileContent = is_file($oldFilePath) ? file_get_contents($oldFilePath) : '';
            $newFileContent = is_file($newFilePath) ? file_get_contents($newFilePath) : '';

            $diff = new Diff();
            $contentDifferent = $diff->render($oldFileContent, $newFileContent);

            // Save the content Different to txt
            $fileNameToStore = $kajian->title . '_' . $kajian->id . '_diff.txt';
            $pathDokumen = 'documents/'.$fileNameToStore;
            Storage::disk('public')->put($pathDokumen, $contentDifferent);

            $version->commit_message = $pathDokumen;
            $version->save();
        }

        $kajian->file_kajian = $pathDokumen;
        $kajian->save();

        return redirect()->route('kajian.show', $kajian)
            ->withSuccess('Terima kasih! Data berhasil disimpan');
    }
}
