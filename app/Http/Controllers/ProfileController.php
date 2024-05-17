<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Kajian;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function show_profile()
    {
        $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
        $user = User::find($userId); // Mengambil data pengguna
        $dataKajian = Kajian::where('id_user', $userId)->get(); // Mengambil data Kajian berdasarkan user_id

        return view('profile.profile_user_2', ['user' => $user, 'dataKajian' => $dataKajian]);
    }

    public function edit_profile()
    {
        $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
        $user = User::find($userId); // Mengambil data pengguna

        return view('profile.form_edit_profile_user', ['user' => $user]);
    }

    public function store_edit_profile(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'foto_kta' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Contoh validasi untuk gambar
        ]);

        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();

        // Mengambil data pengguna yang akan diperbarui
        $user = User::find($userId);

        // Memperbarui data pengguna berdasarkan data yang diterima dari formulir
        $user->username = $validatedData['username'];
        $user->nama = $validatedData['nama'];
        $path = null;

        // Mengelola unggahan foto jika ada
        if ($request->hasFile('foto_kta')) {
            $filenameWithExt = $request->file('foto_kta')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_kta')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().$userId.'.'.$extension;
            $path = $request->file('foto_kta')->storeAs('/kta', $fileNameToStore);
        }

        // Menyimpan perubahan data pengguna
        $user->save();

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!'); // Contoh respons berhasil
    }

    // TODO:
    // public function show_detail_acc(){
    //     $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
    //     $user = User::find($userId); // Mengambil data pengguna
    //     return view('user.detail_akun_user_non_public', ['user' => $user]);
    //     // return view('user.detail_akun_user_public');
    // }

}
