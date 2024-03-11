<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kajian;
use App\Models\HistoryDownload;
use App\Models\versionHistory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class KajianController extends Controller
{

    public function __construct() {
        $this->middleware('auth')
            ->except(['index', 'kajian', 'downloadKajian', 'showNewVersionDetail']);
    }

    public function index()
    {
        $dataKajian = Kajian::all(); 

        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                return view('admin.data_kajian', compact('dataKajian'));
            } else {
                return view('user.data_kajian', compact('dataKajian'));
            }
            
        } else {
            return view('user.data_kajian', compact('dataKajian'));
        }
    }


    public function create()
    {
        return view('admin.form_create_admin');
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_foto_kajian' => 'image|nullable|max:26000',
            'val_dokumen' => 'required|mimes:pdf,doc,docx|max:20480'
        ]);

        $pathFoto = null;
        if ($request->hasFile('val_foto_kajian')) {
            $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $pathFoto = $request->file('val_foto_kajian')->storeAs('storage/photos/', $fileNameToStore);
        }

        $pathDokumen = null;
        if ($request->hasFile('val_dokumen')) {
            $filenameWithExt = $request->file('val_dokumen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_dokumen')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $pathDokumen = $request->file('val_dokumen')->storeAs('storage/documents/', $fileNameToStore);
        }

        Kajian::create([
            'judul_kajian' => $request->val_judul,
            'pemateri' => $request->val_pemateri,
            'lokasi_kajian' => $request->val_tempat,
            'tanggal_postingan' => $request->val_tanggal,
            'deskripsi_kajian' => $request->val_deskripsi,
            'foto_kajian' => $pathFoto,
            'file_kajian' => $pathDokumen,
            'id_user' => Auth::user()->id,
        ]);

        $request->session()->regenerate();
        return redirect()->route('data_kajian')
            ->withSuccess("Terima kasih! Data berhasil disimpan");

    }

    
    public function destroy($id)
    {
        $kajian = Kajian::find($id);

        if (!$kajian) {
            return redirect()->route('dashboard')->withError('Kajian tidak ditemukan');
        }

        $kajian->delete();

        return redirect()->route('data_kajian')->withSuccess('Kajian berhasil dihapus');
    }


    public function show($id)
    {
        $kajian = Kajian::find($id);

        // Periksa apakah relasi user ada dan tidak kosong
        $uploaderUsername = ($kajian->user) ? $kajian->user->username : null;

        return view('admin.detail_kajian_ori', ['kajian' => $kajian, 'uploaderUsername' => $uploaderUsername]);
    }

    

    

    public function edit($id)
    {

        $kajian = Kajian::find($id); // Contoh pengambilan data dari model Kajian

        return view('admin.form_edit_admin_ori', ['kajian' => $kajian]);

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
        'val_ed_dokumen' => 'required|mimes:pdf,doc,docx|max:2048'
    ]);

    if ($request->hasFile('val_ed_foto')) {
        // Proses update foto jika ada perubahan
        $fotoKajian = $request->file('val_ed_foto');
        $fileName = pathinfo($fotoKajian->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $fotoKajian->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        $pathFoto = $fotoKajian->storeAs('storage/photos', $fileNameToStore);

        // Hapus foto lama jika ada
        if ($kajian->foto_kajian) {
            Storage::delete('storage/photos/' . basename($kajian->foto_kajian));
        }

        $kajian->foto_kajian = $pathFoto;
    }

    if ($request->hasFile('val_ed_dokumen')) {
        // Proses update dokumen jika ada perubahan
        $dokumen = $request->file('val_ed_dokumen');
        $fileName = pathinfo($dokumen->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $dokumen->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        $pathDokumen = $dokumen->storeAs('storage/documents', $fileNameToStore);

        // Hapus dokumen lama jika ada
        if ($kajian->file_kajian) {
            Storage::delete('storage/documents/' . basename($kajian->file_kajian));
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

    return redirect()->route('data_kajian')->withSuccess("Data berhasil diperbarui");
}


    // Contoh bagian controller untuk menangani unduhan
    public function downloadKajian($kajianId)
    {
        // Mendapatkan data kajian berdasarkan ID atau cara lainnya sesuai dengan aplikasi kamu
        $kajian = Kajian::findOrFail($kajianId);

        // Logika untuk menyimpan riwayat unduhan ke dalam tabel HistoryDownload
        $user = Auth::user(); // Mengambil pengguna yang terautentikasi
        $historyDownload = new HistoryDownload();
        $historyDownload->user_id = $user->id;
        $historyDownload->kajian_id = $kajian->id;
        $historyDownload->save();

        // Logika untuk mengarahkan pengguna ke file kajian yang akan diunduh
        return response()->download(storage_path("storage/".$kajian->file_kajian));
    }

    public function showNewVersionDetail($id)
{
    $kajianNV = versionHistory::findOrFail($id); // Ganti dengan model dan method yang sesuai dengan struktur aplikasi kamu

    // Lakukan logika untuk menampilkan detail versi baru, misalnya:
    return view('user.detail_kajian_nv_user', ['kajianNV' => $kajianNV]);
}


    



}