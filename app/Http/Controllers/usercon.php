<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kajian;
use App\Models\User;
use App\Models\versionHistory;

class usercon extends Controller
{

    public function vw_kajian()
    {
        $latestKajians = Kajian::orderBy('created_at', 'desc')->take(5)->get(); // Ambil 5 kajian terbaru
        return view('user.kajian2', compact('latestKajians'));
    }

    public function nlkajian()
    {
        $latestKajians = Kajian::orderBy('created_at', 'desc')->take(5)->get(); // Ambil 5 kajian terbaru
        return view('user.kajian', compact('latestKajians'));
    }

    public function vw_about()
    {
        return view('user.about');
    }

    public function showLatestKajians()
    {
        
    }

    public function gotoProfile()
    {
        $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
        $user = User::find($userId); // Mengambil data pengguna
        $dataKajian = Kajian::where('id_user', $userId)->get(); // Mengambil data Kajian berdasarkan user_id
        
        return view('user.profile_user_2', ['user' => $user, 'dataKajian' => $dataKajian]);
    }

    public function gotodetailacc(){
        $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
        $user = User::find($userId); // Mengambil data pengguna
        return view('user.detail_akun_user_non_public', ['user' => $user]);
        // return view('user.detail_akun_user_public');
    }



    public function gotoAccount()
    {
        return view('user.account');
    }

    public function createUser()
    {
        return view('user.form_create_user');
    }

    public function editProfile()
    {
        $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
        $user = User::find($userId); // Mengambil data pengguna
        return view('user.form_edit_profile_user', ['user' => $user]);
    }

    public function editdetailacc(){
        $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
        $user = User::find($userId); // Mengambil data pengguna
        return view('user.form_edit_akun_user_2', ['user' => $user]);
    }


    public function storeupdatedetailuser(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'foto_kta' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Contoh validasi untuk gambar
        ]);

        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();
        
        // Mengambil data pengguna yang akan diperbarui
        $user = User::find($userId);
        
        // Memperbarui data pengguna berdasarkan data yang diterima dari formulir
        $user->nama = $validatedData['username'];
        $user->tempat_lahir = $validatedData['nama'];

        // Mengelola unggahan foto jika ada
        if ($request->hasFile('foto_kta')) {
            $image = $request->file('foto_kta');
            $fileNameToStore = time() . '_' . $image->getClientOriginalName(); // Atur nama unik untuk file
            $fppath = $image->storeAs('photos', $fileNameToStore); // Menyimpan file ke dalam storage/app/photos
            $user->foto_kta = $fileNameToStore; // Simpan nama file ke dalam model pengguna
        }

        // Menyimpan perubahan data pengguna
        $user->save();

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->route('gotodetailacc')->with('success', 'Profil berhasil diperbarui!'); // Contoh respons berhasil
    }
    public function storeupdateuser(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'cabang' => 'required|string',
            'daerah' => 'required|string',
            'wilayah' => 'required|string',
            'foto_kta' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Contoh validasi untuk gambar
        ]);

        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();
        
        // Mengambil data pengguna yang akan diperbarui
        $user = User::find($userId);
        
        // Memperbarui data pengguna berdasarkan data yang diterima dari formulir
        $user->nama = $validatedData['username'];
        $user->tempat_lahir = $validatedData['tempat_lahir'];
        $user->tanggal_lahir = $validatedData['tanggal_lahir'];
        $user->alamat = $validatedData['alamat'];
        $user->cabang = $validatedData['cabang'];
        $user->daerah = $validatedData['daerah'];
        $user->wilayah = $validatedData['wilayah'];
        
        // Mengelola unggahan foto jika ada
        if ($request->hasFile('foto_kta')) {
            $image = $request->file('foto_kta');
            $fileNameToStore = time() . '_' . $image->getClientOriginalName(); // Atur nama unik untuk file
            $fppath = $image->storeAs('photos', $fileNameToStore); // Menyimpan file ke dalam storage/app/photos
            $user->foto_kta = $fileNameToStore; // Simpan nama file ke dalam model pengguna
        }

        // Menyimpan perubahan data pengguna
        $user->save();

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->route('gotoProfile')->with('success', 'Profil berhasil diperbarui!'); // Contoh respons berhasil
    }



    public function storekajianuser(Request $request)
    {
        $request->validate([
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_foto_kajian' => 'image|nullable|max:1999',
            'val_dokumen' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        $userId = auth()->id(); 

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
            'id_user' => $userId,
        ]);

        $request->session()->regenerate();
        return redirect()->route('gotoProfile')
            ->withSuccess("Terima kasih! Data berhasil disimpan");
    }

    public function deleteKajianUser($id)
    {
        $Kajian = Kajian::find($id);

        if (!$Kajian) {
            return redirect()->route('gotoProfile')->withError('Kajian not found');
        }

        // Delete the kajian
        $Kajian->delete();

        return redirect()->route('gotoProfile')->withSuccess('Kajian deleted successfully');
    }

    public function userkajian($id)
{
    $userkajian = Kajian::find($id);

    // Periksa apakah relasi user ada dan tidak kosong
    $uploaderUsername = ($userkajian->user) ? $userkajian->user->username : null;

    return view('user.detail_kajian_ori_user', ['userkajian' => $userkajian, 'uploaderUsername' => $uploaderUsername]);
}

    public function nluserkajian($id)
    {
        $userkajian = Kajian::find($id);

        // Periksa apakah relasi user ada dan tidak kosong

        return view('user.detail_kajian_ori_nluser', ['userkajian' => $userkajian]);
    }
    
    public function upnv($id)
    {

        $userkajian = Kajian::find($id); // Contoh pengambilan data dari model Kajian

        return view('user.form_upload_user', ['kajian' => $userkajian]);

    }

    public function storeNewVersion(Request $request, $kajianid)
{
    $validatedData = $request->validate([
        'val_dokumen' => 'required|file|mimes:pdf,docx|max:2048',
        'val_commit_massage' => 'required|string|max:255',
    ]);

    $kajian = Kajian::find($kajianid);

    if (!$kajian) {
        return redirect()->route('errorPage')->with('error', 'Kajian tidak ditemukan.');
    }

    $file = $request->file('val_dokumen'); // Ganti 'file' menjadi 'val_dokumen'
    $filePath = $file->store('storage/kajiannv/');
    // dd($validatedData);
    // dd($filePath);
    
    

    $versionHistory = new versionHistory();
    $versionHistory->kajian_id = $kajianid;
    $versionHistory->user_id = auth()->id();
    $versionHistory->file_path = $filePath;
    $versionHistory->commit_msg = $validatedData['val_commit_massage'];
    // Copy data lain dari kajian yang tidak berubah ke versi baru
    // $versionHistory->judul_kajian = $kajian->judul_kajian;
    // $versionHistory->pemateri = $kajian->pemateri;
    // $versionHistory->lokasi_kajian = $kajian->lokasi_kajian;
    // $versionHistory->tanggal_postingan = $kajian->tanggal_postingan;
    // $versionHistory->deskripsi_kajian = $kajian->deskripsi_kajian;
    // $versionHistory->foto_kajian = $kajian->foto_kajian;
    // ...
    
    $versionHistory->save();

    $idid_kajian = $versionHistory->kajian_id;

    return redirect()->route('upnvdetail', ['id' => $idid_kajian])->with('success', 'Versi baru telah berhasil diunggah.');

}


    // Dalam fungsi detail_upload_nv
    public function detail_upload_nv($id)
    {
        $kajian = Kajian::with('versionHistory')->find($id);

        return view('user.detail_kajian_upload_user', ['kajian' => $kajian]);
    }








}
