<?php

namespace App\Http\Controllers;

use App\Models\Hambatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HambatanCon extends Controller
{
    public function tambah_hambatan(Request $request)
    {
        Hambatan::create($request->all());
        return redirect()->back();
    }
    public function destroy_hambatan($id)
    {
        DB::table('hambatans')->where('id', $id)->delete();
        DB::table('hambatans')->get();
        return redirect()->back();
    }
    public function edit_hambatan(Request $request,$id)
    {
        Hambatan::whereId($id)->update($request->all());

        return redirect()->back();
    }
}
