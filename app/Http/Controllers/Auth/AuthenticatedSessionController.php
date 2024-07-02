<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\historylogin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if(env('IS_SEPARATION', false)) {
            $client = new Client();
            $response = $client->request(
                'POST',
                env('DOMAIN_SEPARATION'). "/auth/login",
                [
                    'form_params' => [
                        'email' => $request->email,
                        'password' => $request->password,
                    ]
                ]
            );

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody()->getContents(), true);
                session(['token' => $data['token']]);

                $response = $client->request(
                    'GET',
                    env('DOMAIN_SEPARATION'). "/profile",
                    [
                        'headers' => [
                            "Authorization" => "Bearer " . session('token')
                        ]
                    ]
                );

                if ($response->getStatusCode() != 200) {
                    return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
                }

                $data = json_decode($response->getBody()->getContents(), true);
                $data = $data["data"];

                $user = User::find($data['id']);

                if ($user == null) {
                    $user = User::createOrFirst([
                        'id' => $data['id'],
                        'username' => $data['username'],
                        'password' => "",
                        'email' => $data['email'],
                        'nama' => $data['nama'],
                        'role' => $data['role'],
                        'foto_profile' => $data['foto_profile'],
                        'foto_kta' => $data['foto_kta'],
                        'alamat' => $data['alamat'],
                        'nomor_keanggotaan' => $data['nomor_keanggotaan'],
                        'cabang' => $data['cabang'],
                        'tempat_lahir' => $data['tempat_lahir'],
                        'wilayah' => $data['wilayah'],
                        'daerah' => $data['daerah'],
                        'tanggal_lahir' => $data['tanggal_lahir'],
                        'jenis_kelamin' => $data['jenis_kelamin'],
                    ]);
                }    

                Auth::login($user);

                historylogin::create([
                    'user_id' => $user->id,
                    'timestamp' => now(),
                    'user_agent' => $request->userAgent(),
                ]);

                if (Auth::user()->isAdmin()) {
                    return redirect()->intended(RouteServiceProvider::ADMIN);
                } else {
                    return redirect()->intended(RouteServiceProvider::HOME);
                }
            } else {
                return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
            }
            
        } else {
            $request->authenticate();

            $request->session()->regenerate();

            // Add to history_login
            $user = Auth::user();
            historylogin::create([
                'user_id' => $user->id,
                'timestamp' => now(),
                'user_agent' => $request->userAgent(),
            ]);

            if (Auth::user()->isAdmin()) {
                return redirect()->intended(RouteServiceProvider::ADMIN);
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }
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
