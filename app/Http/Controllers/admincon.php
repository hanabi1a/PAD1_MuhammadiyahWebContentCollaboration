<?php

namespace App\Http\Controllers;

use App\Models\historylogin;
use App\Models\User;
use Illuminate\Http\Request;

class admincon extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
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
        // $historis = historylogin::with('user')->get();
    
        // return view('admin.history_download', ['historis' => $historis]);
        return view('admin.history_download');
    }


    public function showHistoryUpload()
    {
        // $historis = historylogin::with('user')->get();
    
        // return view('admin.history_upload', ['historis' => $historis]);
        return view('admin.history_upload');
    }
    



}
