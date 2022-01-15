<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Method login
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials =  $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $user = User::whereEmail($request->email)->first();
            $token = $user->createToken('Laravel Password Grant Client')->accessToken;
            $response = ['token' => $token];
            return response($response, 200);
        } else {
            return response([
                'message' => 'User not found'
            ], 404);
        }
    }

    /**
     * Method profile
     *
     * @return void
     */
    public function profile()
    {
        return Auth::user();
    }
}
