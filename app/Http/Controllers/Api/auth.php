<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class auth extends Controller
{
    public function login(Request $request)
    {

        try {
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'gagal validasi data',
            ], 401);
        }
       

        $user = User::where('username', $request->username)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'username atau password tidak valid',
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        return response()->json([
            'message' => 'success login',
            'id' => $user->id,
            'username' => $user->username,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request)
    {
        // $user = $request->user();
        // $user->currentAccessToken()->delete();
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'You are Logout.'
        ], 200);
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'username' => 'required|unique:users,username',
                'password' => 'required|confirmed',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Email/Username sudah terpakai'
            ], 401);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'role' => '2',
            'password' => Hash::make($request->password),
        ]);

        // $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'Anda berhasil mendaftar',
            // 'token' => $token,
        ];

        return response($response, 201);
    }

}
