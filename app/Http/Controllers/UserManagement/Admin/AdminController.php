<?php

namespace App\Http\Controllers\UserManagement\Admin;

use App\Http\Controllers\Controller;
use App\Models\historylogin;
use App\Models\kajian;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalKajian = kajian::count();
        $totalUser = User::count();

        return view('admin.dashboard', 
        [
            'totalKajian' => $totalKajian,
            'totalUser' => $totalUser,
        ]);
    }

    public function show_data_user()
    {
        $userdata = User::all(); 
        return view('admin.data_user', ['userdata' => $userdata]);
    }

    public function show_history_login()
    {
        $historis = historylogin::with('user')->get();
    
        return view('admin.history_login', ['historis' => $historis]);
    }

    public function show_history_upload()
    {
        // Mengambil semua kajian dari semua pengguna
        $allUploadHistory = Kajian::all();

        return view('admin.history_upload', ['uploadHistory' => $allUploadHistory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
