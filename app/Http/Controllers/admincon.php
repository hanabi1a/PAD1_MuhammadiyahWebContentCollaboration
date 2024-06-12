<?php

namespace App\Http\Controllers;

use App\Models\HistoryDownload;
use App\Models\historylogin;
use App\Models\Kajian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class admincon extends Controller
{
    public function dashboard()
    {

        $totalKajian = Kajian::count();
        $totalUser = User::count();

        return view('admin.dashboard',
            [
                'totalKajian' => $totalKajian,
                'totalUser' => $totalUser,
            ]);
    }

    public function data_user()
    {

        $userdata = User::all(); // Contoh pengambilan data dari model Kajian

        return view('admin.data_user', ['userdata' => $userdata]);

        // return view('admin.data_user');
    }

    public function historylogin()
    {
        return view('admin.history_login');
    }

    public function deleteUser($id)
    {
        $userdata = User::find($id);

        if (! $userdata) {
            return redirect()->route('data_user')->withError('user not found');
        }

        // Delete the kajian
        $userdata->delete();

        return redirect()->route('data_user')->withSuccess('user deleted successfully');
    }

    public function showHistoryLogin()
    {
        $historis = historylogin::with('user')->get();

        return view('admin.history_login', ['historis' => $historis]);
    }

    public function showHistoryDownload()
    {
        // // Logika unduhan kajian

        // // Catat log download ke dalam history_downloads
        // $historyDownload = new HistoryDownload();
        // $historyDownload->user_id = auth()->id(); // ID pengguna yang sedang login
        // $historyDownload->kajian_id = $kajianId; // ID kajian yang diunduh
        // $historyDownload->downloaded_at = now(); // Waktu unduh
        // $historyDownload->save();

        // // Logika unduhan kajian lainnya dan pengalihan ke file unduhan

        // // Ambil data history downloads setelah pencatatan
        // $historyDownloads = HistoryDownload::with(['user', 'kajian'])->get();

        // return view('admin.history_download', ['historyDownloads' => $historyDownloads]);
        $historyDownloads = HistoryDownload::with(['user', 'kajian'])->get();

        return view('admin.history_download', ['historyDownloads' => $historyDownloads]);
    }

    public function showHistoryUpload()
    {
        // Mengambil semua kajian dari semua pengguna
        $allUploadHistory = Kajian::all();

        return view('admin.history_upload', ['uploadHistory' => $allUploadHistory]);
    }

    public function showDetailUser($id)
    {
        $user = User::find($id);

        return view('admin.detail_akun_user', ['user' => $user]);
    }

    public function EditUser($id)
    {
        $datauser = User::find($id);

        return view('admin.form_edit_akun_user', ['datauser' => $datauser]);

    }

    public function UpdateUser(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [

        //     'nama' => 'required',

        //     'foto_kta' => 'image|nullable|max:1999',
        //     'alamat' => 'required',
        //     'nomor_keanggotaan' => 'required',
        //     'daerah' => 'required',
        //     'cabang' => 'required',
        //     'tempat_lahir' => 'required',
        //     'wilayah' => 'required',
        //     'tanggal_lahir' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $user = User::findOrFail($id);

        // Handling uploaded files
        if ($request->hasFile('foto_kta')) {
            $path = $request->file('foto_kta')->store('/photos');
            Storage::delete($user->foto_kta); // Hapus foto KTA lama jika perlu
            $user->foto_kta = $path;
        }

        // Update user data
        $user->username = $request->username;
        $user->alamat = $request->alamat;
        $user->cabang = $request->cabang;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->wilayah = $request->wilayah;
        $user->daerah = $request->daerah;
        $user->tanggal_lahir = $request->tanggal_lahir;

        $user->save();

        return redirect()->route('data_user');
    }
}
