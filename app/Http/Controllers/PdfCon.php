<?php

namespace App\Http\Controllers;


use App\Models\Polres;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfCon extends Controller
{
    /**
     * generate PDF file from blade view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $person = DB::table('personils')
        ->where('polres', '=', $id)
        ->get();
        $kasitik = DB::table('personils')
        ->where('polres', '=', $id)
        ->where('jabatan_personil', '=', 'Kasitik')
        ->get();
        $polres = DB::table('polres')
        ->where('username', '=', $id)
        ->get();
        $site = DB::table('barangs')
        ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'site')
        ->get();
        $alkom = DB::table('barangs')
        ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'alkom')
        ->get();
        $giat = DB::table('datagiats')
        ->where('id_polres', '=', $id)
        ->get();
        $datas = DB::table('barangs')
        ->where('id_polres', '=', $id)
        ->where('jenis_barang', '!=', 'site')
        ->where('jenis_barang', '!=', 'alkom')
        ->where('jenis_barang', '!=', 'indihome')
        ->where('jenis_barang', '!=', 'telepon')
        ->where('jenis_barang', '!=', 'intranet')
        ->where('jenis_barang', '!=', 'wifiid')
        ->where('jenis_barang', '!=', 'astinet')
        ->get();
        $indi = DB::table('barangs')
        ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'indihome')
        ->get();
        $telp = DB::table('barangs')
        ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'telepon')
        ->get();
        $intra = DB::table('barangs')
        ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'intranet')
        ->get();
        $wifi = DB::table('barangs')
        ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'wifiid')
        ->get();
        $asti = DB::table('barangs')
        ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'astinet')
        ->get();
        $pdf = PDF::loadview('/layout/pdf', ['indi' => $indi, 'telp' => $telp, 'intranet' => $intra, 'wifi' => $wifi, 'asti' => $asti, 'barang'=>$datas,
        'giat'=>$giat,'site' => $site, 'alkom' => $alkom, 'personil'=>$person, 'polres'=>$polres, 'kasitik'=>$kasitik]);

        return $pdf->stream();
    }

    public function index2()
    {
        $person = DB::table('personils')
        // ->where('polres', '=', $id)
        ->get();
        $kasitik = DB::table('personils')
        // ->where('polres', '=', $id)
        ->where('jabatan_personil', '=', 'Kasi TIK')
        ->get();
        $polres = DB::table('polres')
        // ->where('username', '=', $id)
        ->get();
        $site = DB::table('barangs')
        // ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'site')
        ->get();
        $alkom = DB::table('barangs')
        // ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'alkom')
        ->get();
        $giat = DB::table('datagiats')->get();
        $datas = DB::table('barangs')
        // ->where('id_polres', '=', $id)
        ->where('jenis_barang', '!=', 'site')
        ->where('jenis_barang', '!=', 'alkom')
        ->where('jenis_barang', '!=', 'indihome')
        ->where('jenis_barang', '!=', 'telepon')
        ->where('jenis_barang', '!=', 'intranet')
        ->where('jenis_barang', '!=', 'wifiid')
        ->where('jenis_barang', '!=', 'astinet')
        ->get();
        $indi = DB::table('barangs')
        // ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'indihome')
        ->get();
        $telp = DB::table('barangs')
        // ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'telepon')
        ->get();
        $intra = DB::table('barangs')
        // ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'intranet')
        ->get();
        $wifi = DB::table('barangs')
        // ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'wifiid')
        ->get();
        $asti = DB::table('barangs')
        // ->where('id_polres', '=', $id)
        ->where('jenis_barang', '=', 'astinet')
        ->get();
        return view('/layout/pdf', ['indi' => $indi, 'telp' => $telp, 'intranet' => $intra, 'wifi' => $wifi, 'asti' => $asti, 'barang'=>$datas,
        'giat'=>$giat,'site' => $site, 'alkom' => $alkom, 'personil'=>$person, 'polres'=>$polres, 'kasitik'=>$kasitik]);
    }

    public function htmlPdf()
    {
        // selecting PDF view
        $pdf = PDF::loadView('/layout/pdf');

        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}
