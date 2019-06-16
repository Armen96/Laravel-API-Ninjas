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
        $user->createCompany($request->company);

        return $this->respondWithToken(auth()->user(),$token);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized','token' => $token, 'cred' => $credentials ], 403);
        }

        return $this->respondWithToken(auth()->user(),$token);
    }

    public function me(Request $request)
    {
        return response()->json(auth()->user());
    }

    public function logout(Request $request)
    {
        if(auth()){
            auth()->logout();
        }

        return response()->json(['message' => 'Successfully logged out','status' => true]);
    }

    protected function respondWithToken($user,$token)
    {
        $relationalUser = User::with('company')->find($user);

        return response()->json([
            'token' => $token,
            'token_type'   => 'bearer',
            'user' => $relationalUser,
            'relationalUser' => $relationalUser,
            'expires_in'   => auth()->factory()->getTTL() * 250
        ]);
    }

    public function contactUs(Request $request)
    {
        return response()->json(['data' => $request->all()]);
    }

//    public function uploadFile(Request $request)
//    {
//        $path = $request->file('file')->store('avatars','public');
//        $avatar = new Image();
//        $avatar->user_id = auth()->id();
//        $avatar->image = $path;
//        $avatar->save();
//
//        return response()->json(['data' => $path]);
//    }
}
