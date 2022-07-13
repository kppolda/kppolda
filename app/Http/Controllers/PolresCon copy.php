<?php

namespace App\Http\Controllers;

use App\Models\Polres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Arr;
// use Illuminate\Support\Facades\Validator;

class PolresCon extends Controller
{

    public function index()
    {
        $users = DB::table('polres')->get();

        return view('home', ['users' => $users]);
    }

    public function register(Request $request)
    {
        // insert data ke table pegawai
        DB::table('polres')->insert([
            'nama_polres' => $request->nama_polres,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // alihkan halaman ke halaman pegawai
        $users = DB::table('polres')->get();
        return $users;
        // return redirect('/');
    }
    public function destroy($id)
    {
        DB::table('polres')->where('id', $id)->delete();
        $users = DB::table('polres')->get();
        return view('home', ['users' => $users]);
    }
    public function login(Request $request)
    {
        $user = DB::table('users')
            ->where('email', $request->input('email'))
            ->first();
        if (Hash::check($user->password, Hash::make($request->input('password')))) {
            echo "Password current";
        } else {
            echo "Password Wrong";
        }
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
