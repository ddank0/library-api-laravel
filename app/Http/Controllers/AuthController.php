<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $data = $request->validate([
            'name'      => ['required', 'string'],
            'email'     => ['required', 'email', 'unique:users'],
            'password'  => ['required', 'string', 'min:6'],
            ]
        );

        $user   = User::create($data);
        $token  = $user->createToken('authToken')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }

    public function login(Request $request)
    {
        $data = $request->validate([
                'email'     => ['required', 'email', 'exists:users'],
                'password'  => ['required', 'string', 'min:6'],
            ]
        );

        $user   = User::where('email', $data['email'])->first();

        if(!$user || !Hash::check($data['password'], $user->password)) {
            return response()->json([
                "mensage" => "Bad creeds",
            ], 401);
        }

        $token  = $user->createToken('authToken')->plainTextToken;

        return [
            'token' => $token
        ];
    }
}
