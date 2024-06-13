<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kajian;

class HomeController extends Controller
{
    public function index()
    {
        $kajian = Kajian::paginate(6);  
        return view('home.homepage', compact('kajian'));
    }
}