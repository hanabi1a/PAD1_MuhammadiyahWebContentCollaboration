<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincon extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    

    public function data_user(){
        return view('admin.data_user');
    }

    public function historylogin(){
        return view('admin.history_login');
    }


}
