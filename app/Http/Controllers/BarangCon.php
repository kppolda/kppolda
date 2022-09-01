<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangCon extends Controller
{
    public function tambah_barang(Request $request)
    {
        $data = $request->all();
        $data['jml_barang'] = $request->kondisi_rb+$request->kondisi_rr+$request->kondisi_bb;
        Barang::create($data);
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
        $barang = Barang::findorfail($id);
        $barang->nama_barang=$request->nama_barang;
        $barang->jenis_barang=$request->jenis_barang;
        $barang->id_polres=$request->id_polres;
        $barang->sumber=$request->sumber;
        $a=$request->kondisi_bb;
        $barang->kondisi_bb=$a;
        $b=$request->kondisi_rr;
        $barang->kondisi_rr=$b;
        $c=$request->kondisi_rb;
        $barang->kondisi_rb=$c;
        $barang->jml_barang=$a+$b+$c;
        $barang->keterangan=$request->keterangan;
        $barang->save();
        return redirect()->back();

        // Barang::whereId($id)->update($request->all());

        // return redirect()->back();
    }
    public function tambah_rad(Request $request)
    {
        $data = $request->all();
        $data['jml_barang'] = $request->kondisi_rb+$request->kondisi_rr+$request->kondisi_bb;
        Barang::create($data);

        return redirect()->back();
    }
    public function tambah_dat(Request $request)
    {
        $data = $request->all();
        $data['jml_barang'] = $request->kondisi_rb+$request->kondisi_rr+$request->kondisi_bb;
        Barang::create($data);
        return redirect()->back();
    }
}
