<?php

namespace App\Http\Controllers;

use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\RegisterRequest;

class PolresCon extends Controller
{

    public function index()
    {
        $datas = DB::table('personil')->get();

        return view('/data-personil', ['users' => $datas]);
    }

    public function register(Request $request)
    {
        $data = Personil::create($request->all());

        auth()->login($data);

        return redirect('/data-personil')->with('success', "Account successfully registered.");
    }
    public function destroy($id)
    {
        DB::table('personil')->where('id', $id)->delete();
        $datas = DB::table('personil')->get();
        return redirect('/data-personil');
    }
}
