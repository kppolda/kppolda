<?php

namespace App\Http\Controllers;

use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\RegisterRequest;

class PersonilCon extends Controller
{
    public function register(Request $request)
    {
        Personil::create($request->all());

        // auth()->login($data);

        return redirect('/data-personil');
    }
    public function destroy($id)
    {
        DB::table('personils')->where('id', $id)->delete();
        return redirect('/data-personil');
    }
    public function edit(Request $request,$id)
    {
        Personil::whereId($id)->update($request->all());

        return redirect()->back();
    }
    public function register_id(Request $request)
    {
        Personil::create($request->all());

        // auth()->login($data);

        return redirect('/data-personil/id');
    }
    public function destroy_id($id)
    {
        DB::table('personils')->where('id', $id)->delete();
        return redirect('/data-personil/id');
    }
    public function edit_id(Request $request,$id)
    {
        Personil::whereId($id)->update($request->all());

        return redirect()->back();
    }
}
