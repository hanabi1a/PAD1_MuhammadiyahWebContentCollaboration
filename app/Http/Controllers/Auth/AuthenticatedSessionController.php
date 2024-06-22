<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\historylogin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Panggil API eksternal untuk autentikasi
        $response = Http::post(env('EXTERNAL_API_URL'), [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            // Jika login berhasil, dapatkan data user dari respons API
            $data = $response->json();

            // Buat atau update user di database lokal Laravel
            $user = \App\Models\User::updateOrCreate(
                ['email' => $request->email],
                ['name' => $data['name']] // Tambahkan atribut lain sesuai kebutuhan
            );

            // Loginkan user ke dalam aplikasi Laravel
            Auth::login($user);

            // Buat token Sanctum
            $token = $user->createToken('auth_token')->plainTextToken;

            // Regenerasi sesi
            $request->session()->regenerate();

            // Tambahkan ke history_login
            historylogin::create([
                'user_id' => $user->id,
                'timestamp' => now(),
                'user_agent' => $request->userAgent(),
            ]);

            // Redirect berdasarkan peran user
            if ($user->isAdmin()) {
                return redirect()->intended(RouteServiceProvider::ADMIN);
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }

        throw ValidationException::withMessages([
            'email' => [__('auth.failed')],
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/beranda');
    }
}
