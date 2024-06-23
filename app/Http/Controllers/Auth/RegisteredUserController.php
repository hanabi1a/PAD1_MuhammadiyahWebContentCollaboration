<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PersonalizeTopikKajian;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Defuse\Crypto\Key;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\TopikKajian;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($page = 0): View
    {
        $topik_kajian = TopikKajian::all();
        return view('auth.register', compact('page', 'topik_kajian'));
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

        $is_separation = env('IS_SEPARATION', false);
        if($is_separation) {
            $client = new Client();
            $response = $client->request(
                'POST',
                env('DOMAIN_SEPARATION') . "/auth/register",
                [
                    'form_params' => [
                        'name' => $request->name,
                        'username' => $request->username,
                        'email' => $request->email,
                        'password' => $request->password
                    ]
                ]
            );

            if ($response->getStatusCode() == 200) {
                $rawResponse = $response->getBody()->getContents();
                $responseData = json_decode($rawResponse, true);

                Log::info("response json : " . $rawResponse);

                $token = $responseData['data']['token'];

                $userId = $responseData['data']['id'];

                $user = User::create([
                    'id' => $userId,
                    'nama' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

                session(['token' => $token]);
                session(['tuid' => $user->id]);
                
            } else {
                throw new \Exception('Failed to get user profile');
            }
        } else {
            $user = User::create([
                'nama' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            event(new Registered($user));
    
            
            session(['tuid' => $user->id]);
            
        }

        return redirect()->route('register.show', ['page' => 1]);
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

        $is_separation = env('IS_SEPARATION', false);
        if($is_separation) {

            $mapData = [
                'tempat_lahir' => $validatedData['tempat_lahir'],
                'tanggal_lahir' => $validatedData['tanggal_lahir'],
                'pekerjaan' => $validatedData['pekerjaan'],
                'alamat' => $validatedData['alamat'],
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
            ];

            $client = new Client();
            $response = $client->request(
                'POST',
                env('DOMAIN_SEPARATION') . "/profile/basic-information",
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . session('token')
                    ],
                    'form_params' => $mapData
                ]
            );

            if ($response->getStatusCode() == 200) {
                $responseContent = $response->getBody()->getContents();
                $responseData = json_decode($responseContent, true);
                
                Log::info(
                    "form request :". 
                        "\n\ttempat_lahir => ". $validatedData["tempat_lahir"] .
                        "\n\ttanggal_lahir => " . $validatedData["tanggal_lahir"] .
                        "\n\tpekerjaan => " . $validatedData["pekerjaan"].
                        "\n\talamat => " . $validatedData["alamat"].
                        "\n\tjenis_kelamin => " . $validatedData["jenis_kelamin"] .
                    "\n\nresponse : " . $responseContent
                    );
                
                $data = $responseData['data'];

                $userId = session('tuid');
                $user = User::find($userId);

                $user->tempat_lahir = $data['tempat_lahir'];
                $user->tanggal_lahir = $data['tanggal_lahir'];
                $user->pekerjaan = $data['pekerjaan'];
                $user->alamat = $data['alamat'];
                $user->jenis_kelamin = $data['jenis_kelamin'];

                $user->save();
            } else {
                throw new \Exception('Failed to update user profile');
            }
        } else {
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
        }

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->route('register.show', ['page' => 2]);
    }

    public function store_additional_2(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_keanggotaan' => 'string|max:255',
            'cabang' => 'string|max:255',
            'daerah' => 'string|max:255',
            'wilayah' => 'string|max:255',
        ]);

        // Mengambil data pengguna yang akan diperbarui
        $userId = session('tuid');
        $user = User::find($userId);

        if (env('IS_SEPARATION', false)) {
            $client = new Client();
            $response = $client->request(
                'POST',
                env('DOMAIN_SEPARATION') . "/profile/detail-information",
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . session('token')
                    ],
                    'form_params' => $validatedData
                ]
            );

            if ($response->getStatusCode() == 200) {
                $responseData = json_decode($response->getBody()->getContents(), true);
                $data = $responseData['data'];

            } else {
                throw new \Exception('Failed to update user profile');
            }
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
            $path = $request->file('foto_profile')->storeAs('/profile', $fileNameToStore, 'public');

            // Menghapus foto lama jika ada
            if ($user->foto_profile) {
                Storage::delete($user->foto_profile);
            }

            $user->foto_profile = $path;
        }

        if ($request->hasFile('foto_kta')) {
            $filenameWithExt = $request->file('foto_kta')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_kta')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().$userId.'.'.$extension;
            $path = $request->file('foto_kta')->storeAs('/ktp', $fileNameToStore, 'public');

            // Menghapus foto lama jika ada
            if ($user->foto_kta) {
                Storage::delete($user->foto_kta);
            }

            $user->foto_kta = $path;
        }


        // Menyimpan perubahan data pengguna
        $user->save();

        return redirect()->route('register.show', ['page' => 3]);
    }

    public function store_additional_3(Request $request)
    {
        $userId = session('tuid');
        $user = User::find($userId);
    
        $categories = $request->categories;
    
        $categories = array_unique($categories);
    
        if ($categories) {
            foreach ($categories as $category) {
                PersonalizeTopikKajian::create([
                    'user_id' => $userId,
                    'topik_kajian_id' => $category
                ]);
            }
            $selectedCategories = PersonalizeTopikKajian::where('user_id', $userId)
                                ->join('topik_kajian', 'personalize_topik_kajian.topik_kajian_id', '=', 'topik_kajian.id')
                                ->select('topik_kajian.*')
                                ->get();
        }

        // Menghapus sessino ID pengguna yang sedang mendaftar
        $request->session()->forget('tuid');
    
        Auth::login($user);
        if ($user->isAdmin()) {
            return redirect(RouteServiceProvider::ADMIN);
        } else {
            return redirect(RouteServiceProvider::HOME);
        }
    }
    
    
        
}
