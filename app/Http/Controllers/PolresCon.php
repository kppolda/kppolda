<?php

namespace App\Http\Controllers;

use App\Models\Polres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Arr;
// use Illuminate\Support\Facades\Validator;

class PolresCon extends Controller
{
    public function register(Request $request)
    {
        // $repone = [];
        // return view('test', compact('repone'));

        // return response()->json(['test' => 'isinya'], 201);

        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            // '_token' => 'string'
        ]);

        // $fields = ([
        //     'name' => 'fafafafa',
        //     'email' => 'afafafafa@gmail.com',
        //     'password' => 'fafafafa'
        // ]);

        $user = Polres::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            // '_token' => $fields['_token']
        ]);

        $token = $user->createToken('remember_token')->plainTextToken;

        $respone = [
            'user' => $user,
            'token' => $token
        ];

        // var_dump($respone);
        // var_dump($fields);
        // var_dump($user);
        // return view('test', compact('respone'));
        return response()->json($respone, 201);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //check email
        $user = Polres::where('email', $fields['email'])->first();

        //check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'email atau password salah'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $respone = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json($respone, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out'
        ], 200);
    }
}
