<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Api\ResponseBuilder;
use App\Http\Controllers\Controller;

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

    public function __construct() {
        $this->middleware('auth:sanctum');
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $kajianList = Kajian::paginate(6); 
        $kategoriKajian = TopikKajian::all();
        $selectedCategories = collect();
        $recommendedKajian = collect();
        $userId = Auth::id();
        $isAdmin = false;
    
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                $isAdmin = true;
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
    
        return ResponseBuilder::response(200, "Berhasil mengambil data Kajian", [
            'isAdmin' => $isAdmin,
            'kajianList' => $kajianList,
            'kategoriKajian' => $kategoriKajian,
            'selectedCategories' => $selectedCategories,
            'recommendedKajian' => $recommendedKajian,
        ]);
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
        return ResponseBuilder::response(200, "Berhasil mengambil data Kajian", $kajians);

    }

    public function create()
    {
        Log::info('Create method called');
        $kajian = null;
        $kategori_kajian = TopikKajian::all();
        $selected_kategori = []; 
    
        $isAdmin = Auth::user()->isAdmin() ?? false;
        
        return ResponseBuilder::response(200, "Berhasil mengambil data Kategori Kajian", [
            'kajian' => $kajian,
            'kategori_kajian' => $kategori_kajian,
            'selected_kategori' => $selected_kategori,
            'isAdmin' => $isAdmin,
        ]);
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
    
        try {
            $validatedData = $request->validate([
                'val_judul' => 'required',
                'val_pemateri' => 'required',
                'val_tempat' => 'required',
                'val_tanggal' => 'required',
                'val_deskripsi' => 'required',
                'val_foto_kajian' => 'image|nullable|max:26000',
                'kategori' => 'required', 
            ]);
    
            $pathFoto = null;
            if ($request->hasFile('val_foto_kajian')) {
                $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $pathFoto = $request->file('val_foto_kajian')->storeAs('kajian', $fileNameToStore, 'public');
            }
    
            $kajian = Kajian::create([
                'judul_kajian' => $request->val_judul,
                'slug' => Str::slug($request->val_judul), // Generate initial slug
                'pemateri' => $request->val_pemateri,
                'lokasi_kajian' => $request->val_tempat,
                'tanggal_postingan' => $request->val_tanggal,
                'deskripsi_kajian' => $request->val_deskripsi,
                'foto_kajian' => $pathFoto,
                'id_user' => Auth::user()->id,
            ]);
    
            // Update slug with ID to ensure uniqueness
            $kajian->slug = Str::slug($kajian->judul_kajian).'-'.$kajian->id;
            $kajian->save();
    
            // Attach topics/categories to the Kajian
            $kajian->topikKajians()->attach($request->kategori);
    
            // Handle versioning if applicable
            if ($request->filled('is_new_version') && $request->is_new_version) {
                $versionHistory = VersionHistory::create([
                    'old_kajian_id' => $request->old_kajian_id,
                    'kajian_id' => $kajian->id,
                    'user_id' => Auth::user()->id,
                ]);
            }
    
            return ResponseBuilder::response(200, "Berhasil membuat Kajian", $kajian);
        } catch (\Exception $e) {
            Log::error('Error creating Kajian: '.$e->getMessage());
            return ResponseBuilder::response(500, "Gagal membuat Kajian", null);
        }
    }

    public function destroy($id)
    {
        $kajian = Kajian::find($id);

        if (! $kajian) {
            return ResponseBuilder::response(404, "Kajian tidak ditemukan", null);
        }

        $kajian->delete();
        return ResponseBuilder::response(200, "Berhasil menghapus Kajian", null);
    }


    public function show(Kajian $kajian)
    {
        try {
            Log::info('Showing kajian with ID: ' . $kajian->id);
            $uploaderUsername = $kajian->user->username ?? 'Unknown';
    
            $shareAbleUrl = route('kajian.show', $kajian->slug);
    
            $client = Auth::user();
            $isAdmin = $client && $client->isAdmin();
    
            $versionHistory = $kajian->current_versions;
            $diffMessage = null;
            if ($versionHistory) {
                $commitMessageFilePath = public_path('storage/' . $versionHistory->commit_message);
                $prefix = env('FILE_DOWNLOAD_PATH', null);
                if ($prefix) {
                    $commitMessageFilePath = $prefix . $versionHistory->commit_message;
                }
    
                $commitMessageContent = is_file($commitMessageFilePath) ? file_get_contents($commitMessageFilePath) : null;
                $diffMessage = html_entity_decode($commitMessageContent);
            } else {
                Log::info('No version history found for kajian with ID: ' . $kajian->id);
            }
    
            return ResponseBuilder::response(200, "Berhasil menampilkan Kajian", [
                'kajian' => $kajian,
                'uploader' => $uploaderUsername,
                'shareAbleUrl' => $shareAbleUrl,
                'isAdmin' => $isAdmin,
                'diffMessage' => $diffMessage,
            ]);
        } catch (\Exception $e) {
            Log::error('Error showing Kajian: ' . $e->getMessage());
            return ResponseBuilder::response(500, "Gagal menampilkan Kajian", null);
        }
    }

    public function update(Request $request, Kajian $kajian)
    {
        Log::info('Update method called');
        Log::info('Request data: ', $request->all());
    
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_foto_kajian' => 'image|nullable|max:26000',
        ]);
        
        if ($validator->fails()) {
            return ResponseBuilder::response(400, "Data tidak valid", null);
        }
    
        Log::info('Request data validated');
    
        $pathFoto = $kajian->foto_kajian; // Default to existing photo if not updated
        if ($request->hasFile('val_foto_kajian')) {
            $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $pathFoto = $request->file('val_foto_kajian')->storeAs('kajian', $fileNameToStore, 'public');
        }
    
        $kajian->judul_kajian = $request->val_judul;
        $kajian->slug = Str::slug($request->val_judul).'-'.$kajian->id;
        $kajian->pemateri = $request->val_pemateri;
        $kajian->lokasi_kajian = $request->val_tempat;
        $kajian->tanggal_postingan = $request->val_tanggal;
        $kajian->deskripsi_kajian = $request->val_deskripsi;
        $kajian->foto_kajian = $pathFoto;
        $kajian->save();
    
        Log::info('Kajian updated');
    
        return ResponseBuilder::response(200, "Berhasil mengupdate Kajian", $kajian);
    }

}
