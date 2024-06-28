<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ResponseBuilder;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\PersonalizeTopikKajian;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request): JsonResponse
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
            'nama' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('myAppToken');

        return ResponseBuilder::response(200, 'User successfully registered', [
            'id' => $user->id,
            'user' => new UserResource($user),
            'token' => $token->plainTextToken,
        ]);
    }

    public function store_additional_1(Request $request)
    {
        $validatedData = $request->validate([
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date|before:today',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        // Validate token
        $user = User::find($request->user()->id);

        if (! $user) {
            return ResponseBuilder::response(404, 'User not found');
        }

        // Memperbarui data pengguna berdasarkan data yang diterima dari formulir
        $user->tempat_lahir = $validatedData['tempat_lahir'];
        $user->tanggal_lahir = $validatedData['tanggal_lahir'];
        $user->pekerjaan = $validatedData['pekerjaan'];
        $user->alamat = $validatedData['alamat'];
        $user->jenis_kelamin = $validatedData['jenis_kelamin'];

        // Menyimpan perubahan data pengguna
        $user->save();

        // Redirect atau tampilkan respons sesuai kebutuhan
        return ResponseBuilder::response(200, 'User additional data successfully updated',[
            'tempat_lahir' => $user->tempat_lahir,
            'tanggal_lahir' => $user->tanggal_lahir,
            'pekerjaan' => $user->pekerjaan,
            'alamat' => $user->alamat,
            'jenis_kelamin' => $user->jenis_kelamin,
        ]);

    }

    public function store_additional_2(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_keanggotaan' => 'nullable|string|max:255',
            'cabang' => 'nullable|string|max:255',
            'daerah' => 'nullable|string|max:255',
            'wilayah' => 'nullable|string|max:255',
        ]);

        // Validate token
        $userId = $request->user()->id;
        $user = User::find($request->user()->id);

        if (! $user) {
            return ResponseBuilder::response(404, 'User not found');
        }

        // Memperbarui data pengguna berdasarkan data yang diterima dari formulir
        $user->nomor_keanggotaan = $validatedData['nomor_keanggotaan'];
        $user->cabang = $validatedData['cabang'];
        $user->daerah = $validatedData['daerah'];
        $user->wilayah = $validatedData['wilayah'];

        if ($request->hasFile('foto_profile')) {
            $filenameWithExt = $request->file('foto_profile')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_profile')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().$userId.'.'.$extension;
            $pathFotoProfile = $request->file('foto_profile')->storeAs('/profile', $fileNameToStore, 'public');

            // Menghapus foto lama jika ada
            if ($user->foto_profile) {
                Storage::delete($user->foto_profile);
            }

            $user->foto_profile = $pathFotoProfile;
        } else {
            $pathFotoProfile = null;
        }

        if ($request->hasFile('foto_kta')) {
            $filenameWithExt = $request->file('foto_kta')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_kta')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().$userId.'.'.$extension;
            $pathFotoKTA = $request->file('foto_kta')->storeAs('/ktp', $fileNameToStore, 'public');

            // Menghapus foto lama jika ada
            if ($user->foto_kta) {
                Storage::delete($user->foto_kta);
            }

            $user->foto_kta = $pathFotoKTA;
        } else {
            $pathFotoKTA = null;
        }

        // Menyimpan perubahan data pengguna
        $user->save();

        // Redirect atau tampilkan respons sesuai kebutuhan
        return ResponseBuilder::response(200, 'User additional data successfully updated',[
            'nomor_keanggotaan' => $user->nomor_keanggotaan,
            'cabang' => $user->cabang,
            'daerah' => $user->daerah,
            'wilayah' => $user->wilayah,
            'foto_profile' => $pathFotoProfile,
            'foto_kta' => $pathFotoKTA,
        ]);
    }
}
