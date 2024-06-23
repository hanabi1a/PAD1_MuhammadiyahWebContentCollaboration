<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ResponseBuilder;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserUtilityController extends Controller
{
    public function updateUsername(Request $request, $id)
    {
        $userId = auth()->user()->id;
        $user = User::find($id);

        if (! $user) {
            return response()->json(['status' => 404, 'message' => 'User not found'], 404);
        }
        if ($user->id != $userId) {
            return response()->json(['status' => 403, 'message' => 'Nda bolee ngedit username orang lain'], 403);
        }

        // Validasi data yang dikirim
        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:255'],
        ]);

        // Update username user
        $user->username = $validatedData['username'];

        $user->save();

        return response()->json(['status' => 200, 'message' => 'Username successfully updated', 'data' => $user]);
    }

    public function updatePassword(Request $request, $id)
    {
        $userId = auth()->user()->id;
        $user = User::find($id);

        if (! $user) {
            return response()->json(['status' => 404, 'message' => 'User not found'], 404);
        }
        if ($user->id != $userId) {
            return response()->json(['status' => 403, 'message' => 'Nda bolee ngedit password orang lain'], 403);
        }

        // Validasi data yang dikirim
        $validatedData = $request->validate([
            'password' => ['required', 'string', 'max:255'],
        ]);

        // Update username user
        $user->password = $validatedData['password'];

        $user->save();

        return response()->json(['status' => 200, 'message' => 'password successfully updated', 'data' => $user]);
    }

    public function show_detail_profile() 
    {
        $userId = auth()->id();
        $user = User::find($userId);

        return ResponseBuilder::response(true, 'Profile retrieved successfully', $user);
    }

    public function store_edit_profile(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'string|max:255',
            'tanggal_lahir' => 'date',
            'pekerjaan' => 'string|max:255',
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

        // Menyimpan perubahan data pengguna
        $user->save();

        return ResponseBuilder::response(true, 'Profile updated successfully', $user);
    }
}
