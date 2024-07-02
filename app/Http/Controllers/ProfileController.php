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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function show_kajian_in_profile_muhammadiyah(): View
    {
        $kajian = Kajian::orderBy('created_at', 'desc')->paginate(9);
        $user = Auth::user();
        return view('profile.profile_akun_muhammadiyah', compact('kajian', 'user'));
    }

    public function show_kajian_in_profile_user(): View
    {
        $user = Auth::user();

        // Fetch original uploads
        $originalKajian = Kajian::whereDoesntHave('versionHistory')->where('id_user', $user->id)->paginate(9);

        // Fetch collaborative uploads
        $collaborativeKajian = Kajian::whereHas('versionHistory')->where('id_user', $user->id)->paginate(9);

        $kajianCount = $user->kajians()->count();

        return view('profile.profile_akun_pengguna', compact('originalKajian', 'collaborativeKajian', 'user', 'kajianCount'));
    }


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
        $userId = auth()->id();
        $user = User::find($userId);

        return view('profile.profile_information', ['user' => $user]);
    }

    public function edit_profile()
    {

        $userId = auth()->id();
        $user = User::find($userId);

        return view('profile.form_edit_profile_user', ['user' => $user]);
    }

    public function store_edit_profile(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'string|max:255',
            'tanggal_lahir' => 'date|before_or_equal:today',
            'pekerjaan' => 'string|max:255|regex:/^[a-zA-Z\s]*$/',
            'alamat' => 'string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'status' => 'string|max:255',
            'nomor_keanggotaan' => 'string|max:255',
            'cabang' => 'string|max:255',
            'daerah' => 'string|max:255',
            'wilayah' => 'string|max:255',
            'foto_kta' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();

        // Mengambil data pengguna yang akan diperbarui
        $user = User::find($userId);

        // Memperbarui data pengguna berdasarkan data yang diterima dari formulir
        $user->username = $validatedData['username'];
        $user->nama = $validatedData['nama'];
        $user->tempat_lahir = $validatedData['tempat_lahir'];
        $user->tanggal_lahir = $validatedData['tanggal_lahir'];
        $user->pekerjaan = $validatedData['pekerjaan'];
        $user->alamat = $validatedData['alamat'];
        $user->jenis_kelamin = $validatedData['jenis_kelamin'];
        $user->role = $validatedData['status'];
        $user->nomor_keanggotaan = $validatedData['nomor_keanggotaan'];
        $user->cabang = $validatedData['cabang'];
        $user->daerah = $validatedData['daerah'];
        $user->wilayah = $validatedData['wilayah'];



        $path_foto_kta = null;

        // Mengelola unggahan foto jika ada
        if ($request->hasFile('foto_kta')) {
            $filenameWithExt = $request->file('foto_kta')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_kta')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().$userId.'.'.$extension;
            $path_foto_kta = $request->file('foto_kta')->storeAs('/kta', $fileNameToStore, 'public');

            // Menghapus foto lama jika ada
            if ($user->foto_kta) {
                Storage::delete($user->foto_kta);
            }

            $user->foto_kta = $path_foto_kta;
        }

        $user->save();

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->route('profile.show.information')->with('success', 'Profil berhasil diperbarui!'); // Contoh respons berhasil
    }


    public function show_profile_information() {
        $userId = auth()->id();
        $user = User::find($userId);
        return view('profile.profile_information', ['user' => $user]);
    }

    public function upload_profile_picture(Request $request)
    {
        $validatedData = $request->validate([
            'foto_profile' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();

        // Mengambil data pengguna yang akan diperbarui
        $user = User::find($userId);

        // Mengelola unggahan foto jika ada
        if ($request->hasFile('foto_profile')) {
            $filenameWithExt = $request->file('foto_profile')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_profile')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().$userId.'.'.$extension;
            $path = $request->file('foto_profile')->storeAs('/profile', $fileNameToStore, 'public');

            // Menghapus foto lama jika ada
            if ($user->foto_profile) {
                Storage::delete($user->foto_profile);
            }

            $user->foto_profile = $path;
        }

        // Menyimpan perubahan data pengguna
        $user->save();

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Foto profil berhasil diperbarui!'); // Contoh respons berhasil
    }

    public function delete_profile_picture() {
        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();

        // Mengambil data pengguna yang akan diperbarui
        $user = User::find($userId);

        // Menghapus foto lama jika ada
        if ($user->foto_profile) {
            Storage::delete($user->foto_profile);
            $user->foto_profile = null;
            $user->save();
        }

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Foto profil berhasil dihapus!'); // Contoh respons berhasil
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Kajian::where('judul_kajian', 'like', "%$query%")
                        ->orWhere('pemateri', 'like', "%$query%")
                        ->get();

        return response()->json($results);
    }

}
