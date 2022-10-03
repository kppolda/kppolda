<?php

namespace App\Http\Controllers;

use App\Models\Pendahuluan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendahuluanCon extends Controller
{
    public function tambah_pen(Request $request)
    {
        Pendahuluan::create($request->all());
        return redirect()->back();
    }
    public function destroy_pen($id)
    {
        DB::table('pendahuluans')->where('id', $id)->delete();
        DB::table('pendahuluans')->get();
        return redirect()->back();
    }
    public function edit_pen(Request $request,$id)
    {
        Pendahuluan::whereId($id)->update($request->all());

        return redirect()->back();
    }
}
