<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
        ]);

        $token = auth()->login($user);

        return $this->respondWithToken(auth()->user(),$token);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken(auth()->user(),$token);
    }

    public function me(Request $request)
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out','status' => true]);
    }

    protected function respondWithToken($user,$token)
    {
        return response()->json([
            'token' => $token,
            'token_type'   => 'bearer',
            'user' => $user,
            'expires_in'   => auth()->factory()->getTTL() * 180
        ]);
    }
}
