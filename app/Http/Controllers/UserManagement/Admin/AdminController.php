<?php

namespace App\Http\Controllers\UserManagement\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryDownload;
use App\Models\historylogin;
use App\Models\kajian;
use App\Models\User;
use Illuminate\Http\Request;
use Storage;

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

    public function show_history_download()
    {
        $historyDownload = HistoryDownload::with(['user', 'kajian'])->get();

        return view('admin.history_download', ['historyDownload' => $historyDownload]);
    }

    public function show_detail_user(string $id)
    {
        $user = User::find($id);
        return view('admin.detail_akun_user', ['user' => $user]);
    }

    public function edit_user(string $id)
    {
        $user = User::find($id);
        return view('admin.form_edit_akun_user', ['user' => $user]);
    }

    public function update_user(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $data = $request->only([
            'nama', 
            'tempat_lahir', 
            'tanggal_lahir',
            'alamat', 
            'cabang', 
            'daerah', 
            'wilayah', 
        ]);

        if ($request->hasFile('foto_kta')) {
            $path = $request->file('foto_kta')->store('/photos');
            Storage::delete($user->foto_kta); // Hapus foto KTA lama jika perlu
            $data['foto_kta'] = $path;
        }

        $user->update($data);

        return redirect()->route('admin.show_data_user')->withSuccess('User updated successfully');
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
