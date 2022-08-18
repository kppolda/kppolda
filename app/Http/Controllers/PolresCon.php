<?php

namespace App\Http\Controllers;

use App\Models\Polres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use App\Http\Requests\RegisterRequest;

class PolresCon extends Controller
{
    public function register(Request $request)
    {
        Polres::create($request->all());

        return redirect('/data-polres')->with('success', "Account successfully registered.");
    }
    public function edit(Request $request,$id)
    {
        // Polres::whereId($id)->update($request->all());
        $user = Polres::findorfail($id);
        $user->password=$request->password;
        $user->nama_polres=$request->nama_polres;
        $user->username=$request->username;
        $user->pass=$request->pass;
        $user->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        DB::table('polres')->where('id', $id)->delete();
        DB::table('polres')->get();
        return redirect('/data-polres');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function logout(Request $request)
    {
        // auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out'
        ], 200);
    }
}
