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
