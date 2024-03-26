<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    public function index()
    {
        return view('home.homepage1');
    }
}
