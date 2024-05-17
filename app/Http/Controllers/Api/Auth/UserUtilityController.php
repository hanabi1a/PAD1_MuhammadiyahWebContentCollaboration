<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserUtilityController extends Controller
{
    public function updateUsername(Request $request, $id)
    {
        $userId = auth()->user()->id;
        $user = User::find($id);

        if (!$user) {
            return response()->json(['status' => 404, 'message' => 'User not found'], 404);
        }
        if ($user->id != $userId) {
            return response()->json(['status' => 403, 'message' => 'Nda bolee ngedit username orang lain'], 403);
        }

        // Validasi data yang dikirim
        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:255']
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

        if (!$user) {
            return response()->json(['status' => 404, 'message' => 'User not found'], 404);
        }
        if ($user->id != $userId) {
            return response()->json(['status' => 403, 'message' => 'Nda bolee ngedit password orang lain'], 403);
        }

        // Validasi data yang dikirim
        $validatedData = $request->validate([
            'password' => ['required', 'string', 'max:255']
        ]);

        // Update username user
        $user->password = $validatedData['password'];

        $user->save();

        return response()->json(['status' => 200, 'message' => 'password successfully updated', 'data' => $user]);
    }
}
