<?php

namespace App\Http\Controllers;

use App\Models\historylogin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\HistoryDownload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Kajian;

class admincon extends Controller
{
    public function dashboard(){

        $totalKajian = Kajian::count();
        $totalUser = User::count();

        return view('admin.dashboard', 
        [
            'totalKajian' => $totalKajian,
            'totalUser' => $totalUser,
        ]);
    }

    

    public function data_user(){

        $userdata = User::all(); // Contoh pengambilan data dari model Kajian
    
        return view('admin.data_user', ['userdata' => $userdata]);

        // return view('admin.data_user');
    }

    public function historylogin(){
        return view('admin.history_login');
    }


    public function deleteUser($id)
    {
        $userdata = User::find($id);

        if (!$userdata) {
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
            $user = Auth::user(); // Mendapatkan pengguna yang terautentikasi
        
            $uploadHistory = []; // Menyiapkan variabel untuk riwayat upload
        
            if ($user) {
                $uploadHistory = $user->kajians; // Mengambil riwayat upload pengguna
            }
        
            return view('admin.history_upload', ['uploadHistory' => $uploadHistory]);
        }
        

    public function showDetailUser($id)
    {
        $user = User::find($id);
    
        return view('admin.detail_akun_user', ['user' => $user]);
    }

    public function showUploadHistory()
    {
        
    }
    



}
