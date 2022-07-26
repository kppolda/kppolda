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
    $datas = DB::table('personil')->get();

    return view('/data-personil', ['users' => $datas]);
  }

  public function data_jarkomrad()
  {
    return view('admin/data-jarkomrad');
  }

  public function data_jarkomdat()
  {
    return view('admin/data-jarkomdat');
  }

  public function data_barang()
  {
    return view('admin/data-barang');
  }

  public function data_giat()
  {
    return view('admin/data-giat');
  }

  public function laporan()
  {
    return view('admin/full-table');
  }

  public function data_polsek_id()
  {
    return view('auth/data-polsek');
  }

  public function data_personil_id()
  {
    return view('auth/data-personil');
  }

  public function data_jarkomrad_id()
  {
    return view('auth/data-jarkomrad');
  }

  public function data_jarkomdat_id()
  {
    return view('auth/data-jarkomdat');
  }

  public function data_barang_id()
  {
    return view('auth/data-barang');
  }

  public function data_giat_id()
  {
    return view('auth/data-giat');
  }
  public function indexPolres()
  {
    $users = DB::table('polres')->get();

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
