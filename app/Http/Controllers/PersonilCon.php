<?php

namespace App\Http\Controllers;

use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\RegisterRequest;

class PersonilCon extends Controller
{

    public function index()
    {
        $datas = DB::table('personils')->get();

        return view('admin/data-personil', ['datas' => $datas]);
    }

    public function register(Request $request)
    {
        $data = Personil::create($request->all());

        // auth()->login($data);

        return redirect('/data-personil', ['data' => $data])->with('success', "Account successfully registered.");
    }
    public function destroy($id)
    {
        DB::table('personils')->where('id', $id)->delete();
        $datas = DB::table('personils')->get();
        return redirect('/data-personil');
    }
}
