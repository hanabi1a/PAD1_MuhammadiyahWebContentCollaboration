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
        return view('user.form_edit_user', ['user' => $user]);
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

    return redirect()->route('gotoProfile')->with('success', 'Versi baru telah berhasil diunggah.');
}







}
