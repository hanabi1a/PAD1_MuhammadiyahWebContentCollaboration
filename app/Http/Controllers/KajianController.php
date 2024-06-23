<?php

namespace App\Http\Controllers;

use App\Models\HistoryDownload;
use App\Models\Kajian;
use App\Models\TopikKajian;
use App\Models\VersionHistory;
use FineDiff\Diff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; 
use App\Models\PersonalizeTopikKajian;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Dompdf\Dompdf;

class KajianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['index', 'show' ,'show_kajian', 'downloadKajian', 'showNewVersionDetail']);
    }

    public function index()
    {
        $kajianList = Kajian::paginate(6); 
        $kategoriKajian = TopikKajian::all();
        $selectedCategories = collect();
        $recommendedKajian = collect();
        $userId = Auth::id();

        $view = "kajian.main.kajian";
        
        if (Auth::check()) {

            if (Auth::user()->isAdmin()) {
                $view = "kajian.admin_view.data_kajian";
            } else {
            
                $selectedCategories = PersonalizeTopikKajian::where('user_id', $userId)
                    ->join('topik_kajian', 'personalize_topik_kajian.topik_kajian_id', '=', 'topik_kajian.id')
                    ->select('topik_kajian.*')
                    ->get();
            
                $selectedCategoryIds = $selectedCategories->pluck('id')->toArray();
    
                $recommendedKajian = Kajian::whereHas('topikKajians', function ($query) use ($selectedCategoryIds) {
                    $query->whereIn('topik_kajian.id', $selectedCategoryIds);
                })->paginate(6);
            }   
        }
        
        return view($view, compact('kajianList','kategoriKajian', 'selectedCategories', 'recommendedKajian' ));
    }

    public function updateRecommendations(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'action' => 'required|in:add,remove',
        ]);

        $categoryName = $request->input('category');
        $action = $request->input('action');
        $userId = Auth::id();

        $category = TopikKajian::where('nama', $categoryName)->first();

        if ($category) {
            if ($action == 'remove') {
                PersonalizeTopikKajian::where('user_id', $userId)
                    ->where('topik_kajian_id', $category->id)
                    ->delete();
            } elseif ($action == 'add') {
                PersonalizeTopikKajian::firstOrCreate([
                    'user_id' => $userId,
                    'topik_kajian_id' => $category->id,
                ]);
            }
        }

        $selectedCategories = PersonalizeTopikKajian::where('user_id', $userId)
            ->join('topik_kajian', 'personalize_topik_kajian.topik_kajian_id', '=', 'topik_kajian.id')
            ->select('topik_kajian.*')
            ->get();
        
        $selectedCategoryIds = $selectedCategories->pluck('id')->toArray();

        $recommendedKajian = Kajian::whereHas('topikKajians', function ($query) use ($selectedCategoryIds) {
            $query->whereIn('topik_kajian.id', $selectedCategoryIds);
        })->get();

        return response()->json(['recommendedKajian' => $recommendedKajian]);
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
        $selected_kategori = []; 
    
        $view = Auth::user()->isAdmin() ? "kajian.write.form_create_admin" : "kajian.write.form_create_user";
        
        return view($view, compact('kajian', 'kategori_kajian', 'selected_kategori'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $kajians = Kajian::where('judul_kajian', 'LIKE', "%{$query}%")
                        ->orWhere('pemateri', 'LIKE', "%{$query}%")
                        ->orWhere('deskripsi_kajian', 'LIKE', "%{$query}%")
                        ->get();

        return response()->json($kajians);
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
            'kategori' => 'required', 
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

        // Save the relationship to relasi_topik_kajian
        $kajian->topikKajians()->attach($request->kategori);

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
                return redirect()->route('admin.kajian.new_version.konten', [$oldKajian, $versionHistory, $kajian]);
            }

            return redirect()->route('kajian.new_version.konten', [$oldKajian, $versionHistory, $kajian]);
        }

        Log::info('Redirecting to: '.(Auth::user()->role == 'admin' ? 'data_kajian' : 'kajian.show'));
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.kajian.konten', $kajian);
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

            return redirect()->route('admin.kajian.index')->withSuccess('Kajian berhasil dihapus');
        }

        return redirect()->route('profile.show')->withSuccess('Kajian berhasil dihapus');
    }

    public function show(Kajian $kajian)
    {
        Log::info('Showing kajian with ID: '.$kajian->id);
        $uploaderUsername =  $kajian->user->username ?? null;

        $shareAbleUrl = route('kajian.show', $kajian->slug);

        $client = Auth::user();
        $versionHistory = $kajian->current_versions;
        $diffMessage = null;
        if ($versionHistory) {
            $commitMessageFilePath = public_path('storage/'.$versionHistory->commit_message);

            $prefix = env('FILE_DOWNLOAD_PATH', null);
            if ($prefix) {
                $commitMessageFilePath = $prefix.$versionHistory->commit_message ;
            } 
            
            $commitMessageContent = is_file($commitMessageFilePath) ? file_get_contents($commitMessageFilePath) : null;

            $diffMessage = html_entity_decode($commitMessageContent);
        } else {
            Log::info('No version history found for kajian with ID: '.$kajian->id);
        }

        $view = $client && $client->isAdmin() ? 'kajian.admin_view.detail_kajian' : 'kajian.read.detail_kajian_asli_user';

        return view($view, [
            'userkajian' => $kajian,
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
            return redirect()->route('admin.kajian.konten', $kajian);
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

        // Prepare to download the file

        $pathDokumen = $kajian->file_kajian;
        $fileKajianPath = public_path('storage/'.$pathDokumen);


        // Logika untuk mengarahkan pengguna ke file kajian yang akan diunduh
        $prefix = env('FILE_DOWNLOAD_PATH', null);
        if ($prefix) {
            $fileKajianPath = $prefix.$pathDokumen ;
        }

        $konten = is_file($fileKajianPath) ? file_get_contents($fileKajianPath) : '';
        $fullHtmlKonten = $this->wrap_with_html($konten);


        $dompdf = new Dompdf();
        $dompdf->loadHtml($fullHtmlKonten);

        $dompdf->render();

        $output = $dompdf->output();

        // Stream the PDF to the browser for preview
        return response()->streamDownload(function () use ($output) {
            echo $output;
        }, $kajian->judul_kajian . ".pdf", ['Content-Type' => 'application/pdf']);
    }

    private function wrap_with_html($content)
    {
        return '<html>
                    <head>
                        <style>
                            table { width: 100%; border-collapse: collapse; }
                            th, td { border: 1px solid black; padding: 8px; }
                        </style>
                    </head>
                    <body>'.$content.'</body>
                </html>';
    }

    public function show_editor_new_version(Kajian $oldKajian, VersionHistory $version, Kajian $kajian)
    {

        Log::info('Kajian: ', $kajian->toArray());
        Log::info('Old Kajian: ', $oldKajian->toArray());

        $oldFilePath = public_path('storage/'.$oldKajian->file_kajian);

        $prefix = env('FILE_DOWNLOAD_PATH', null);
        if ($prefix) {
            $oldFilePath = $prefix.$oldKajian->file_kajian ;
        }

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
        
        $pathDokumen = null;
        if ($request->hasFile('val_dokumen')) {
            $extension = $request->file('val_dokumen')->getClientOriginalExtension();
            $fileNameToStore = $kajian->judul_kajian . '_' . $kajian->id . '.' . $extension;
            $pathDokumen = $request->file('val_dokumen')->storeAs('documents', $fileNameToStore, 'public');
        } elseif($request->has('val_konten')) {
            // save the val_konten to txt
            $konten = $request->val_konten;
            $fileNameToStore = $kajian->judul_kajian . '_' . $kajian->id . '.txt';
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
        
        
        $pathDokumen = null;
        if ($request->hasFile('val_dokumen')) {
            $extension = $request->file('val_dokumen')->getClientOriginalExtension();
            $fileNameToStore = $kajian->judul_kajian . '_' . $kajian->id . '.' . $extension;
            $pathDokumen = $request->file('val_dokumen')->storeAs('documents', $fileNameToStore, 'public');
        } elseif($request->has('val_konten')) {
            // save the val_konten to txt
            $konten = $request->val_konten;
            $fileNameToStore = $kajian->judul_kajian . '_' . $kajian->id . '.txt';
            $pathDokumen = 'documents/'.$fileNameToStore;
            Storage::disk('public')->put($pathDokumen, $konten);
        }

        $kajian->file_kajian = $pathDokumen;
        $kajian->save();

        // Compare the old file with the new file
        if ($version) {
            $oldFilePath = public_path('storage/'.$oldKajian->file_kajian);
            $newFilePath = public_path('storage/'.$pathDokumen);

            $prefix = env('FILE_DOWNLOAD_PATH', null);
            if ($prefix) {
                $oldFilePath = $prefix.$oldKajian->file_kajian ;
                $newFilePath = $prefix.$pathDokumen;
            } 

            $oldFileContent = is_file($oldFilePath) ? file_get_contents($oldFilePath) : '';
            $newFileContent = is_file($newFilePath) ? file_get_contents($newFilePath) : '';

            $diff = new Diff();
            $contentDifferent = $diff->render($oldFileContent, $newFileContent);

            // Save the content Different to txt
            $fileNameToStore = $kajian->judul_kajian . '_' . $kajian->id . '_diff.txt';
            $pathDiff = 'documents/'.$fileNameToStore;
            Storage::disk('public')->put($pathDiff, $contentDifferent);

            $version->commit_message = $pathDiff;
            $version->save();
        }

       

        return redirect()->route('kajian.show', $kajian)
            ->withSuccess('Terima kasih! Data berhasil disimpan');
    }
}
