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
            $response = ['token' => $token,'user'=>$user];
            return response($response, 200);
        } else {
            return response([
                'message' => 'Invalid credentials.'
            ], 403);
        }
    }

    /**
     * Method register
     *
     * @param Request $request
     *
     * @return void
     */
    public function register(Request $request)
    {
        // check if account already exist
        $user = User::whereEmail($request->email)->first();
        if ($user) {
            return response([
                'status' => 'error',
                'message' => 'Account already exists.'
            ], 200);
        }

        // create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // login user
        Auth::login($user);

        // create token
        $token = $user->createToken('auth_token')->accessToken;

        // send response
        return response([
            'status' => 'success',
            'message' => 'account created',
            'token' => $token,
            'user' => $user
        ], 200);
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
