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

        $datas = DB::table('barangs')->get();

        return view('admin/data-barang', ['datas' => $datas]);
    }
    public function tambah_rad(Request $request)
    {
        Barang::create($request->all());

        $site = DB::table('barangs')
            ->where('jenis_barang', '=', 'site')
            ->get();
        $alkom = DB::table('barangs')
            ->where('jenis_barang', '=', 'alkom')
            ->get();
        return view('admin/data-jarkomrad', ['site' => $site, 'alkom' => $alkom]);
    }
    public function tambah_dat(Request $request)
    {
        Barang::create($request->all());

        $indi = DB::table('barangs')
            ->where('jenis_barang', '=', 'indihome')
            ->get();
        $telp = DB::table('barangs')
            ->where('jenis_barang', '=', 'telepon')
            ->get();
        $intra = DB::table('barangs')
            ->where('jenis_barang', '=', 'intranet')
            ->get();
        $wifi = DB::table('barangs')
            ->where('jenis_barang', '=', 'wifiid')
            ->get();
        $asti = DB::table('barangs')
            ->where('jenis_barang', '=', 'astinet')
            ->get();
        return view('admin/data-jarkomdat', ['indi' => $indi, 'telp' => $telp, 'intranet' => $intra, 'wifi' => $wifi, 'asti' => $asti]);
    }
}
