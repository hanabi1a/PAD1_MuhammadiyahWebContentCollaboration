<?php

namespace App\Http\Controllers\UserManagement\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryDownload;
use App\Models\historylogin;
use App\Models\Kajian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalKajian = Kajian::count();
        $totalUser = User::count();

        return view('admin.dashboard.dashboard',
            compact('totalKajian', 'totalUser'));
    }

    public function show_data_user()
    {
        $userdata = User::all();

        return view('admin.data_user.data_user', compact('userdata'));
    }

    public function show_history_login()
    {
        $historis = historylogin::with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.history_login.history_login', compact('historis'));
    }

    public function show_history_upload()
    {
        // Mengambil semua kajian dari semua pengguna
        $uploadHistory = Kajian::orderBy('created_at', 'desc')->get();

        return view('admin.history_upload.history_upload', compact('uploadHistory'));
    }

    public function show_history_download()
    {
        $historyDownloads = HistoryDownload::with(['user', 'kajian'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.history_download.history_download', compact('historyDownloads'));
    }

    public function show_detail_user(string $id)
    {
        $user = User::find($id);

        return view('admin.data_user.detail_akun_user', compact('user'));
    }

    public function edit_user(string $id)
    {
        $user = User::find($id);
        $view = Auth::user()->isAdmin() ? 
            'admin.data_user.form_edit_akun_user' : 'manajemen_akun.form_edit_akun_user';

        return view($view, compact('user'));
    }

    public function update_user(Request $request, string $id)
    {
        $user = User::find($id);

        if (! $user) {
            Log::info('User not found', ['id' => $id]);

            return redirect()->route('admin.show_data_user')->withError('User tidak ditemukan');
        }

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

            if ($user->foto_kta) {
                // Hapus foto KTA lama jika perlu dan ada
                Storage::delete($user->foto_kta);
            }

            $data['foto_kta'] = $path;
        }

        Log::info('Updating user', ['id' => $id, 'data' => $data]);

        $user->update($data);

        return redirect()->route('admin.show_data_user')->withSuccess('User updated successfully');
    }

    public function delete_user(string $id)
    {
        $user = User::find($id);

        if (! $user) {
            return redirect()->route('admin.show_data_user')->withError('User tidak ditemukan');
        }

        $user->delete();

        return redirect()->route('admin.show_data_user')->withSuccess('User berhasil dihapus');
    }

    public function verify_user(Request $request, string $id)
    {
        $user = User::find($id);

        if (! $user) {
            return redirect()->route('admin.show_data_user')->withError('User tidak ditemukan');
        }

        $requested_role = $request->input('action');
        if ($requested_role == 'accept') {
            $user->role = 'registered';
        } else {
            $user->role = 'user';
        }

        $user->save();

        return redirect()->route('admin.show_data_user')->withSuccess('User berhasil diverifikasi');
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
