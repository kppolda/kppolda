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

        return redirect('data-inventaris/data-barang');
    }
    public function destroy_barang($id)
    {
        DB::table('barangs')->where('id', $id)->delete();
        DB::table('barangs')->get();
        return redirect('data-inventaris/data-barang');
    }
    public function edit_barang(Request $request,$id)
    {
        // $updateData = $request->validate([
        //     'nama_barang'=>'required',
        //     'jenis_barang'=>'required',
        //     'sumber'=>'required',
        //     'jml_barang'=>'required',
        //     'kondisi_bb'=>'required',
        //     'kondisi_rr'=>'required',
        //     'kondisi_rb'=>'required',
        //     'keterangan'=>'required',
        // ]);
        Barang::whereId($id)->update($request->all());

        return redirect('data-inventaris/data-barang');
    }
    public function tambah_rad(Request $request)
    {
        Barang::create($request->all());
        return redirect('data-inventaris/data-jarkomrad');
    }
    public function tambah_dat(Request $request)
    {
        Barang::create($request->all());
        return redirect('data-inventaris/data-jarkomdat');
    }
}
