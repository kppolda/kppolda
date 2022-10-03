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
        $data = $request->validate([
            'nama_polres' => 'required',
            'username' => 'required',
            'dspp' => 'integer',
            'anggaran' => 'integer',
            'pass' => [
                'required',
                'string',
                'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
        ]);

        $data['password'] = $request->pass;

        Polres::create($data);

        return redirect('/data-polres')->with('success', "Account successfully registered.");
    }
    public function edit(Request $request,$id)
    {
        // Polres::whereId($id)->update($request->all());
        $data = $request->validate([
            'nama_polres' => 'required',
            'username' => 'required',
            'dspp' => 'integer',
            'anggaran' => 'integer',
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
        ]);
        $user = Polres::findorfail($id);
        $user->password=$data['password'];
        $user->nama_polres=$data['nama_polres'];
        $user->username=$data['username'];
        $user->pass=$data['password'];
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

        toastr()->error('Username atau Password salah!');
        return redirect("login");
    }

    public function logout(Request $request)
    {
        // auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out'
        ], 200);
    }
}
