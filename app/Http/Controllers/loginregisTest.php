<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $this->validate($request, [
            'Username' => 'required',
            'Password' => 'required',
        ]);

        // Coba melakukan proses login
        if (Auth::attempt(['Username' => $request->input('Username'), 'password' => $request->input('Password')])) {
            // Jika login berhasil
            return redirect('/beranda');
        }

        // Jika login gagal, arahkan kembali ke halaman login
        return redirect('/login')->with('loginError', 'Login gagal. Silakan coba lagi.');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function store(Request $request)
{
    // Validasi input
    $this->validate($request, [
        'username' => 'required|unique:users,Username',
        'password' => 'required',
        'Foto_KTA' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi gambar
        // tambahkan validasi untuk bidang lain sesuai kebutuhan Anda
    ]);

    // Upload foto profil
    if ($request->hasFile('Foto_KTA')) {
        $photo = $request->file('Foto_KTA');
        $photoPath = $photo->store('photos', 'public'); // Simpan foto di direktori "storage/app/public/photos"
    } else {
        $photoPath = null;
    }

    // Simpan data pengguna ke dalam database
    $user = new User([
        'Username' => $request->input('username'),
        'Password' => Hash::make($request->input('password')),
        'Foto_KTA' => $photoPath,
        // tambahkan bidang lain sesuai kebutuhan Anda
    ]);

    $user->save();

    // Login pengguna setelah registrasi (opsional)
    Auth::login($user);

    // Redirect pengguna ke halaman beranda atau ke halaman login (sesuai kebutuhan)
    return redirect('/beranda');
}
}
