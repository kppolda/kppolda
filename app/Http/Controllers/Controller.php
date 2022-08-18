<?php

namespace App\Http\Controllers;

use App\Models\Polres;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function home()
  {
    return view('admin/home');
  }

  public function homedup()
  {
    return view('home_dup');
  }

  public function data_polres()
  {
    return view('admin/data-polres');
  }

  public function data_personil()
  {
    $datas = DB::table('personils')->get();

    return view('admin/data-personil', ['datas' => $datas]);
  }

  public function data_jarkomrad()
  {
    $site = DB::table('barangs')
      ->where('jenis_barang', '=', 'site')
      ->get();
    $alkom = DB::table('barangs')
      ->where('jenis_barang', '=', 'alkom')
      ->get();
    return view('admin/data-jarkomrad', ['site' => $site, 'alkom' => $alkom]);
  }

  public function data_jarkomdat()
  {
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

  public function data_barang()
  {
    $datas = DB::table('barangs')
      ->where('jenis_barang', '!=', 'site')
      ->where('jenis_barang', '!=', 'alkom')
      ->where('jenis_barang', '!=', 'indihome')
      ->where('jenis_barang', '!=', 'telepon')
      ->where('jenis_barang', '!=', 'intranet')
      ->where('jenis_barang', '!=', 'wifiid')
      ->where('jenis_barang', '!=', 'astinet')
      ->get();
    return view('admin/data-barang', ['datas' => $datas]);
  }

  public function data_giat()
  {
    $giat = DB::table('datagiats')->get();

    return view('admin/data-giat', ['giat' => $giat]);
  }

  public function laporan($id)
  {
    $person = DB::table('personils')
    ->where('polres', '=', $id)
    ->get();
    $site = DB::table('barangs')
    ->where('id_polres', '=', $id)
    ->where('jenis_barang', '=', 'site')
    ->get();
    $alkom = DB::table('barangs')
    ->where('id_polres', '=', $id)
    ->where('jenis_barang', '=', 'alkom')
    ->get();
    $giat = DB::table('datagiats')->get();
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
    return view('admin/full-table', ['indi' => $indi, 'telp' => $telp, 'intranet' => $intra, 'wifi' => $wifi, 'asti' => $asti, 'barang'=>$datas,
     'giat'=>$giat,'site' => $site, 'alkom' => $alkom, 'personil'=>$person]);
    // return view('admin/full-table');
  }

  public function data_polsek_id()
  {
    return view('auth/data-polsek');
  }

  public function data_personil_id()
  {
    $datas = DB::table('personils')->get();
    $count = 1;

    return view('auth/data-personil', ['datas' => $datas, 'count'=> $count]);
  }

  public function data_jarkomrad_id()
  {
    $site = DB::table('barangs')
      ->where('jenis_barang', '=', 'site')
      ->get();
    $alkom = DB::table('barangs')
      ->where('jenis_barang', '=', 'alkom')
      ->get();
    return view('auth/data-jarkomrad', ['site' => $site, 'alkom' => $alkom]);
  }

  public function data_jarkomdat_id()
  {
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
    return view('auth/data-jarkomdat', ['indi' => $indi, 'telp' => $telp, 'intranet' => $intra, 'wifi' => $wifi, 'asti' => $asti]);
  }

  public function data_barang_id()
  {
    $datas = DB::table('barangs')
      ->where('jenis_barang', '!=', 'site')
      ->where('jenis_barang', '!=', 'alkom')
      ->where('jenis_barang', '!=', 'indihome')
      ->where('jenis_barang', '!=', 'telepon')
      ->where('jenis_barang', '!=', 'intranet')
      ->where('jenis_barang', '!=', 'wifiid')
      ->where('jenis_barang', '!=', 'astinet')
      ->get();
    return view('auth/data-barang', ['datas' => $datas]);
  }

  public function data_giat_id()
  {
    $giat = DB::table('datagiats')->get();

    return view('auth/data-giat', ['giat' => $giat]);
  }
  public function indexPolres()
  {
    $users = DB::table('polres')
    ->where('id', '!=', '1')
    ->get();

    return view('admin/data-polres', ['users' => $users]);
  }

  // public function registerPolres(Request $request)
  // {
  //   $user = Polres::create($request->validated());

  //   auth()->login($user);

  //   return redirect('admin/data-polres')->with('success', "Account successfully registered.");
  // }
  // public function destroyPolres($id)
  // {
  //   DB::table('polres')->where('id', $id)->delete();
  //   $users = DB::table('polres')->get();
  //   return view('admin/data-polres', ['users' => $users]);
  // }
}
