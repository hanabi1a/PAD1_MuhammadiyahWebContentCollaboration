<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('user.sign_in');
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
            // Periksa jika pengguna adalah admin
            $user = Auth::user();
            if ($user->Username === 'admint') {
                // Jika pengguna adalah admin, arahkan ke view admin.dashboard
                return redirect('/adminhome');
            }
            
            // Jika bukan admin, arahkan ke halaman beranda
            return redirect('/beranda');
        }
    
        // Jika login gagal, arahkan kembali ke halaman login
        return redirect('/login')->with('loginError', 'Login gagal. Silakan coba lagi.');
    }

   


    public function showRegistrationForm()
    {
        return view('user.sign_up');
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

public function beranda()
    {
        // Pastikan hanya pengguna yang sudah login yang dapat mengakses halaman beranda
        if (auth()->check()) {
            // Tampilkan halaman beranda
            return view('user.homepage'); // Gantilah 'beranda' dengan nama tampilan yang sesuai
        } else {
            // Jika pengguna belum login, arahkan kembali ke halaman login
            return redirect('/login'); // Gantilah '/login' dengan rute login yang sesuai
        }
    }
public function adminhome()
    {
        // Pastikan hanya pengguna yang sudah login yang dapat mengakses halaman beranda
        if (auth()->check()) {
            // Tampilkan halaman beranda
            return view('admin.dashboard'); // Gantilah 'beranda' dengan nama tampilan yang sesuai
        } else {
            // Jika pengguna belum login, arahkan kembali ke halaman login
            return redirect('/login'); // Gantilah '/login' dengan rute login yang sesuai
        }
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


     if(Auth::attempt($credentials)){
          $request->session()->regenerate();
          return redirect()->route('homepage');
     }
     return back()->withErrors([
          'username' => 'The provided credentials do not match our records',
     ])->onlyInput('username');
}





}