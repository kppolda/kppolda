<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {
      return view('home');
    }

    public function homedup() {
      return view('home_dup');
    }

    public function data_polsek() {
      return view('data-polsek');
    }

    public function data_personil() {
      return view('data-personil');
    }

    public function data_barang() {
      return view('data-barang');
    }

    public function data_internet() {
      return view('data-internet');
    }

    public function data_giat() {
      return view('data-giat');
    }
}
