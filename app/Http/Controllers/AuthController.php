<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Usuario invalido',
                'access_token' => '',
                'token_type' => ''
            ]);
        }
        $user = User::where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => 'Bienvenido',
            'access_token' => $token,
            'token_type' => 'bearer'
        ]);
    }

    public function infoUser(Request $request)
    {
        return $request->user();
    }
    public function logout(Request $request)
    {
        $user = $request->user();
        // Revoke all user tokens
        $user->tokens()->delete();
        return response()->json(['message' => 'Logout successful']);
    }
}
