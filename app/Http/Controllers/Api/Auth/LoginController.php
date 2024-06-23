<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\historylogin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            historylogin::create([
                'user_id' => $user->id,
                'timestamp' => now(),
                'user_agent' => $request->userAgent(),
            ]);

            return (new UserResource($user))->additional([
                'token' => $user->createToken('myAppToken')->plainTextToken,
            ]);
        }

        return response()->json([
            'message' => 'Your credential does not match.',
        ], 401);
    }
}
