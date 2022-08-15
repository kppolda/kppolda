<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangCon extends Controller
{
    public function tambah_barang(Request $request)
    {
        Barang::create($request->all());
        return redirect()->back();
    }
    public function destroy_barang($id)
    {
        DB::table('barangs')->where('id', $id)->delete();
        DB::table('barangs')->get();
        return redirect()->back();
    }
    public function edit_barang(Request $request,$id)
    {
        Barang::whereId($id)->update($request->all());

        return redirect()->back();
    }
    public function tambah_rad(Request $request)
    {
        Barang::create($request->all());
        return redirect()->back();
    }
    public function tambah_dat(Request $request)
    {
        Barang::create($request->all());
        return redirect()->back();
    }
}
