<?php

namespace App\Http\Controllers;

use App\Models\Polres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegisterRequest;

class PolresCon extends Controller
{

    public function index()
    {
        $users = DB::table('polres')->get();

        return view('index', ['users' => $users]);
    }

    public function register(RegisterRequest $request)
    {
        $user = Polres::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
    public function destroy($id)
    {
        DB::table('polres')->where('id', $id)->delete();
        $users = DB::table('polres')->get();
        return view('index', ['users' => $users]);
    }
    // public function register(Request $request)
    // {
    //     // $repone = [];
    //     // return view('test', compact('repone'));

    //     // return response()->json(['test' => 'isinya'], 201);

    //     $fields = $request->validate([
    //         'nama_polres' => 'required|string',
    //         'username' => 'required|string',
    //         'email' => 'required|string|unique:users,email',
    //         'password' => 'required|string|confirmed',
    //         // '_token' => 'string'
    //     ]);

    //     // $fields = ([
    //     //     'name' => 'fafafafa',
    //     //     'email' => 'afafafafa@gmail.com',
    //     //     'password' => 'fafafafa'
    //     // ]);

    //     $polres = Polres::create([
    //         'nama_polres' => $fields['nama_polres'],
    //         'username' => $fields['username'],
    //         'email' => $fields['email'],
    //         'password' => bcrypt($fields['password']),
    //         // '_token' => $fields['_token']
    //     ]);

    //     // $token = $user->createToken('remember_token')->plainTextToken;

    //     $respone = [
    //         'polres' => $polres,
    //         // 'token' => $token
    //     ];

    //     // var_dump($respone);
    //     // var_dump($fields);
    //     // var_dump($user);
    //     // return view('test', compact('respone'));
    //     return response()->json($respone, 201);
    // }

    // public function login(Request $request)
    // {
    //     $fields = $request->validate([
    //         'email' => 'required|string',
    //         'password' => 'required|string'
    //     ]);

    //     //check email
    //     $polres = Polres::where('email', $fields['email'])->first();

    //     //check password
    //     if (!$polres || !Hash::check($fields['password'], $polres->password)) {
    //         return response([
    //             'message' => 'email atau password salah'
    //         ], 401);
    //     }

    //     // $token = $user->createToken('myapptoken')->plainTextToken;

    //     $respone = [
    //         'polres' => $polres,
    //         // 'token' => $token
    //     ];

    //     return response()->json($respone, 201);
    // }

    // public function logout(Request $request)
    // {
    //     // auth()->user()->tokens()->delete();

    //     return response()->json([
    //         'message' => 'Logged out'
    //     ], 200);
    // }
}
