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
    $datas = DB::table('personils')->get();
    $users = DB::table('polres')
    ->where('id', '!=', '1')
    ->get();
    $invent = DB::table('barangs')->get();

    return view('admin/home', ['users' => $users, 'personil'=>$datas, 'invent'=>$invent]);
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
    $users = DB::table('polres')
    ->where('id', '!=', '1')
    ->get();
    $datas = DB::table('personils')->get();

    return view('admin/data-personil', ['datas' => $datas, 'polres' => $users]);
  }

  public function data_jarkomrad()
  {
      $users = DB::table('polres')
      ->where('id', '!=', '1')
      ->get();
      $site = DB::table('barangs')
      ->where('jenis_barang', '=', 'site')
      ->get();
    $alkom = DB::table('barangs')
      ->where('jenis_barang', '=', 'alkom')
      ->get();
      return view('admin/data-jarkomrad', ['site' => $site, 'alkom' => $alkom, 'polres' => $users]);
    }

    public function data_jarkomdat()
    {
        $users = DB::table('polres')
        ->where('id', '!=', '1')
        ->get();
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
        return view('admin/data-jarkomdat', ['indi' => $indi, 'telp' => $telp, 'intranet' => $intra, 'wifi' => $wifi, 'asti' => $asti, 'polres' => $users]);
    }

    public function data_barang()
    {
        $users = DB::table('polres')
        ->where('id', '!=', '1')
        ->get();
        $datas = DB::table('barangs')
        ->where('jenis_barang', '!=', 'site')
        ->where('jenis_barang', '!=', 'alkom')
        ->where('jenis_barang', '!=', 'indihome')
        ->where('jenis_barang', '!=', 'telepon')
        ->where('jenis_barang', '!=', 'intranet')
        ->where('jenis_barang', '!=', 'wifiid')
      ->where('jenis_barang', '!=', 'astinet')
      ->get();
    return view('admin/data-barang', ['datas' => $datas, 'polres' => $users]);
  }

  public function data_giat()
  {
    $users = DB::table('polres')
    ->where('id', '!=', '1')
    ->get();
    $giat = DB::table('datagiats')->get();

    return view('admin/data-giat', ['giat' => $giat, 'polres' => $users]);
  }

  public function laporan($id)
  {
    $users = DB::table('polres')
    ->where('username', '=', $id)
    ->get();
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
    return view('admin/full-table', ['indi' => $indi, 'telp' => $telp, 'intranet' => $intra, 'wifi' => $wifi, 'asti' => $asti, 'barang'=>$datas,
     'giat'=>$giat,'site' => $site, 'alkom' => $alkom, 'personil'=>$person, 'polres' => $users]);
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

  public function data_hambatan_id()
  {
    $hambatan = DB::table('hambatans')
      ->where('jenis', '=', 'hambatan')
      ->get();
    $count = 1;
    return view('auth/data-hambatan', ['hambatan' => $hambatan, 'count'=>$count]);
    }

  public function kesimpulan_saran_id()
  {
    $kesimpulan = DB::table('hambatans')
      ->where('jenis', '=', 'kesimpulan')
      ->get();
    $saran = DB::table('hambatans')
      ->where('jenis', '=', 'saran')
      ->get();
    $count = 1;
    $i = 1;
    return view('auth/kesimpulan-saran', ['kesimpulan' => $kesimpulan, 'saran'=>$saran, 'count'=>$count, 'i'=>$i]);
    }

  public function daftar_lapbul_id()
  {
    $lapbul = DB::table('lapbuls')->get();
    return view('auth/daftar-lapbul', ['lapbul'=>$lapbul]);
  }

}
