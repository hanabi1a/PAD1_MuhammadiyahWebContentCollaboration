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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class loginregis extends Controller
{
    public  function __construct()
    {
        $this->middleware('web')->except(['logout', 'homepage']);
    }

    public function register()
    {
        return view('user.sign_up');
    }
    public function Store(Request $request)
    {
        // dd($request->all()); 

        $rule = [
            'pekerjaan' => 'required',
            'username' => 'required|username|unique:users,username',
            'password' => 'required|min:4',
            'foto_kta' => 'image|nullable|max:1999',
            'alamat' => 'required',
            'nomor_keanggotaan' => 'required',
            'daerah' => 'required',
            'cabang' => 'required',
            'tempat_lahir' => 'required',
            'wilayah' => 'required',
            'tanggal_lahir' => 'required',
        ];
        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $path = null;

        if ($request->hasFile('photo')) {
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        }

    User::create([
            'username' => $request->username,
            'pekerjaan' => $request->pekerjaan,
            'password' => Hash::make($request->password),
            'foto_kta' => $path,
            'alamat' => $request->alamat,
            'nomor_keanggotaan' => $request->nomor_keanggotaan,
            'cabang' => $request->cabang,
            'tempat_lahir' => $request->tempat_lahir,
            'wilayah' => $request->wilayah,
            'daerah' => $request->daerah,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('homepage');
        }

        
        return back()->withErrors(['username' => 'The provided credentials do not match our records'])->onlyInput('username');
    }


   public function login()
   {
         return view('user.sign_in');
   } 

   public function authenticate(Request $request)
   {
    // dd($request->all()); 
            $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);
    
            // dd(Auth::attempt($credentials)); 
         if(Auth::attempt($credentials)){
              $request->session()->regenerate();
              return redirect()->route('homepage');
         }
         return back()->withErrors([
              'username' => 'The provided credentials do not match our records',
         ])->onlyInput('username');
   }

    public function homepage()
    {   
        if (Auth::check()) {
            $user = Auth::user(); 
            return view('user.homepage', compact('user'));
        }
        return redirect()->route('login')
        ->withErrors(['You are not allowed to access',])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
        ->withSuccess("You have logged out");
    }
    
}
