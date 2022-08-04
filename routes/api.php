<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PersonilCon;
use App\Http\Controllers\PolresCon;
use App\Http\Controllers\BarangCon;
use App\Http\Controllers\DataGiatCon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('polres', [PolresCon::class, 'register'])->name('polres.regis');
Route::post('personil', [PersonilCon::class, 'register'])->name('personil.regis');
Route::post('barang', [BarangCon::class, 'tambah_barang'])->name('barang.regis');
Route::delete('barang/{id}', [BarangCon::class, 'destroy_barang'])->name('barang.delete');
Route::put('barang/{id}', [BarangCon::class, 'edit_barang'])->name('barang.edit');
Route::post('rad', [BarangCon::class, 'tambah_rad'])->name('rad.regis');
Route::post('dat', [BarangCon::class, 'tambah_dat'])->name('dat.regis');
Route::post('giat', [DataGiatCon::class, 'save'])->name('giat.tambah');
Route::post('login', [PolresCon::class, 'login'])->name('polres.login');
Route::put('polres/{id}', [PolresCon::class, 'edit'])->name('polres.edit');
Route::delete('polres/{id}', [PolresCon::class, 'destroy'])->name('polres.delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
