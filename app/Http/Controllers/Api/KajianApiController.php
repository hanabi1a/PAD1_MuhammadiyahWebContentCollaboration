<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kajian;

class KajianApiController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil nilai query parameters
        $perPage = $request->input('per_page', 10); // Jumlah item per halaman (default: 10)
        $category = $request->input('category'); // Filter berdasarkan kategori

        // Membuat query builder untuk kajian
        $query = Kajian::query();

        // Filter berdasarkan kategori jika ada
        if ($category) {
            $query->where('category', $category);
        }

        // Mengambil data kajian dengan opsi paginasi
        $dataKajian = $query->paginate($perPage);

        return response()->json(['status' => 200, 'message' => 'success', 'data' => $dataKajian]);
    }

    public function search(Request $request)
    {
        // Mengambil nilai query parameter pencarian
        $search = $request->input('search');

        // Validasi apakah ada kata kunci pencarian
        if (!$search) {
            return response()->json(['status' => 400, 'message' => 'Bad request - search parameter is required'], 400);
        }

        // Melakukan pencarian berdasarkan kata kunci pencarian
        $results = Kajian::where('judul_kajian', 'like', '%' . $search . '%')
            ->orWhere('pemateri', 'like', '%' . $search . '%')
            ->orWhere('lokasi_kajian', 'like', '%' . $search . '%')
            ->get();

        return response()->json(['status' => 200, 'message' => 'success', 'data' => $results]);

        //versi copilot
        // $query = $request->get('query');
        //     $kajian = Kajian::where('judul_kajian', 'like', "%{$query}%")->get();

        //     if ($kajian->isEmpty()) {
        //         return response()->json(['status' => 404, 'message' => 'Kajian not found'], 404);
        //     }

        //     return response()->json($kajian);
    }

    public function show($id)
    {
        $kajian = Kajian::find($id);
        if (!$kajian) {
            return response()->json(['status' => 404, 'message' => 'Kajian not found'], 404);
        }
        return response()->json(['status' => 200, 'message' => 'success', 'data' => $kajian]);
    }

    public function downloadKajian($id)
    {
        $kajian = Kajian::find($id);
        if (!$kajian || !$kajian->file_kajian) {
            return response()->json(['status' => 404, 'message' => 'Kajian or file not found'], 404);
        }
        return response()->download(storage_path($kajian->file_kajian));
    }

    public function store(Request $request)
    {
        // Ambil pengguna yang sedang login
        $user = $request->user();

        // Validasi data request
        $validatedData = $request->validate([
            'judul_kajian' => 'required',
            'pemateri' => 'required',
            'lokasi_kajian' => 'required',
            'tanggal_postingan'  => 'required|date',
            'deskripsi_kajian' => 'required',
        ]);

        // Buat instance baru dari Kajian dan isi dengan data request
        $kajian = new Kajian;
        $kajian->judul_kajian = $validatedData['judul_kajian'];
        $kajian->pemateri = $validatedData['pemateri'];
        $kajian->lokasi_kajian = $validatedData['lokasi_kajian'];
        $kajian->tanggal_postingan = $validatedData['tanggal_postingan'];
        $kajian->deskripsi_kajian = $validatedData['deskripsi_kajian'];
        $kajian->id_user = $user->id; // Sertakan id_user dari pengguna yang sedang login

        // Simpan kajian ke dalam database
        $kajian->save();

        // Kirim response
        return response()->json(['status' => 200, 'message' => 'Kajian successfully created', 'data' => $kajian]);
    }

}
