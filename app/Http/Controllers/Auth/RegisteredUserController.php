<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        // Auth::login($user);

        session(['tuid' => $user->id]);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('register');
    }

    
    public function store_additional_1(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date|before:today',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan', // TODO: Check this later
        ]);
        
        // Mengambil data pengguna yang akan diperbarui
        $userId = session('tuid');
        $user = User::find($userId);
        
        // Memperbarui data pengguna berdasarkan data yang diterima dari formulir
        $user->tempat_lahir = $validatedData['tempat_lahir'];
        $user->tanggal_lahir = $validatedData['tanggal_lahir'];
        $user->pekerjaan = $validatedData['pekerjaan'];
        $user->alamat = $validatedData['alamat'];
        $user->jenis_kelamin = $validatedData['jenis_kelamin'];

        // Menyimpan perubahan data pengguna
        $user->save();

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->route('register');
    }

    public function store_additional_2(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'cabang' => 'required|string|max:255',
            'daerah' => 'required|string|max:255',
            'wilayah' => 'required|string|max:255',
        ]);
        
        // Mengambil data pengguna yang akan diperbarui
        $userId = session('tuid');
        $user = User::find($userId);
        
        // Memperbarui data pengguna berdasarkan data yang diterima dari formulir
        $user->cabang = $validatedData['cabang'];
        $user->daerah = $validatedData['daerah'];
        $user->wilayah = $validatedData['wilayah'];

        // Menyimpan perubahan data pengguna
        $user->save();


        // Redirect atau tampilkan respons sesuai kebutuhan
        // return redirect(RouteServiceProvider::HOME);

        return redirect()->route('register');
    }

    public function store_additional_3(Request $request) : RedirectResponse
    {

        $userId = session('tuid');
        $user = User::find($userId);

        // Menghapus sessino ID pengguna yang sedang mendaftar
        $request->session()->forget('tuid');

        if ($user->isAdmin()) {
            return redirect(RouteServiceProvider::ADMIN);
        } else {
            return redirect(RouteServiceProvider::HOME);
        }
    }


}
