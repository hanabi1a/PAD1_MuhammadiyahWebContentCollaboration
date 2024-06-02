<?php

namespace App\Http\Controllers;

use App\Models\HistoryDownload;
use App\Models\Kajian;
use App\Models\VersionHistory;
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
        if (Auth::user()->isAdmin()) {
            return view('admin.form_create_admin');
        } else {
            return view('kajian.write.form_create_user');
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
            'val_dokumen' => 'required|mimes:pdf,doc,docx|max:20480',
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

        $pathDokumen = null;
        if ($request->hasFile('val_dokumen')) {
            $filenameWithExt = $request->file('val_dokumen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_dokumen')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $pathDokumen = $request->file('val_dokumen')->storeAs('documents', $fileNameToStore, 'public');
        }

        Log::info('Creating new Kajian with data: ', [
            'judul_kajian' => $request->val_judul,
            'slug' => Str::slug($request->val_judul), // Temp Slugs
            'pemateri' => $request->val_pemateri,
            'lokasi_kajian' => $request->val_tempat,
            'tanggal_postingan' => $request->val_tanggal,
            'deskripsi_kajian' => $request->val_deskripsi,
            'foto_kajian' => $pathFoto,
            'file_kajian' => $pathDokumen,
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
            'file_kajian' => $pathDokumen,
            'id_user' => Auth::user()->id,
        ]);

        $kajian->slug = Str::slug($kajian->judul_kajian).'-'.$kajian->id;
        $kajian->save();

        Log::info('Kajian created');

        Log::info('Redirecting to: '.(Auth::user()->role == 'admin' ? 'data_kajian' : 'kajian.show'));
        if (Auth::user()->role == 'admin') {
            return redirect()->route('data_kajian') // TODO: Untested
                ->withSuccess('Terima kasih! Data berhasil disimpan');
        }

        return redirect()->route('kajian.show', $kajian)
            ->withSuccess('Terima kasih! Data berhasil disimpan');

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

        if ($client != null &&  $client->isAdmin()) {
          
            return view(
                'kajian.admin_view.detail_kajian', 
                ['userkajian' => $kajian, 
                'uploaderUsername' => $uploaderUsername,
                'shareAbleUrl' => $shareAbleUrl
                ]);

        } elseif ($client != null &&  $client->isRegistered()) {

            return view(
                'kajian.read.detail_kajian_asli_user', 
                ['userkajian' => $kajian, 
                'uploaderUsername' => $uploaderUsername,
                'shareAbleUrl' => $shareAbleUrl]);

        }
        return view('kajian.read.detail_kajian_asli_user', 
        ['userkajian' => $kajian, 
        'uploaderUsername' => $uploaderUsername,
        'shareAbleUrl' => $shareAbleUrl]);


    }

    /**
     * TODO: Ini masih pergi ke dasbor admin (ketika registered user yang melakukan)
     */
    public function create_new_version(Kajian $kajian)
    {

        // $userkajian = Kajian::find($id); // Contoh pengambilan data dari model Kajian
        Log::info('Creating new version for kajian with ID: '.$kajian->id);

        return view('kajian.write.form_edit_user_nv', ['kajian' => $kajian]);

    }

    public function edit($id)
    {

        $kajian = Kajian::find($id); // Contoh pengambilan data dari model Kajian

        return view('kajian.write.form_create_user_nv', ['kajian' => $kajian]);

    }

    public function update(Request $request, $id)
    {
        $kajian = Kajian::find($id);

        // Validasi form (harap diaktifkan kembali setelah debugging selesai)
        $request->validate([
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_ed_foto' => 'image|nullable',
            'val_ed_dokumen' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('val_ed_foto')) {
            // Proses update foto jika ada perubahan
            $fotoKajian = $request->file('val_ed_foto');
            $fileName = pathinfo($fotoKajian->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $fotoKajian->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $pathFoto = $fotoKajian->storeAs('photos', $fileNameToStore, 'public');

            // Hapus foto lama jika ada
            if ($kajian->foto_kajian) {
                Storage::delete('storage/photos/'.basename($kajian->foto_kajian)); // TODO: Untested
            }

            $kajian->foto_kajian = $pathFoto;
        }

        if ($request->hasFile('val_ed_dokumen')) {
            // Proses update dokumen jika ada perubahan
            $dokumen = $request->file('val_ed_dokumen');
            $filename = $dokumen->getClientOriginalName();
            $fileNameToStore = time().'.'.$filename;
            $pathDokumen = $dokumen->storeAs('documents', $fileNameToStore, 'public');

            // Hapus dokumen lama jika ada
            if ($kajian->file_kajian) {
                Storage::delete('storage/documents/'.basename($kajian->file_kajian)); // TODO: Untested
            }

            $kajian->file_kajian = $pathDokumen;
        }

        // Update informasi kajian
        $kajian->judul_kajian = $request->val_judul;
        $kajian->pemateri = $request->val_pemateri;
        $kajian->lokasi_kajian = $request->val_tempat;
        $kajian->tanggal_postingan = $request->val_tanggal;
        $kajian->deskripsi_kajian = $request->val_deskripsi;

        $kajian->save();

        return redirect()->route('data_kajian')->withSuccess('Data berhasil diperbarui');
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
}
