<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PersonilCon;
use App\Http\Controllers\PolresCon;
use App\Http\Controllers\BarangCon;
use App\Http\Controllers\DataGiatCon;
use App\Http\Controllers\StrukturCon;
use App\Http\Controllers\HambatanCon;
use App\Http\Controllers\PendahuluanCon;
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
Route::delete('personil/{id}', [PersonilCon::class, 'destroy'])->name('personil.delete');
Route::put('personil/{id}', [PersonilCon::class, 'edit'])->name('personil.edit');
Route::post('barang', [BarangCon::class, 'tambah_barang'])->name('barang.regis');
Route::delete('barang/{id}', [BarangCon::class, 'destroy_barang'])->name('barang.delete');
Route::put('barang/{id}', [BarangCon::class, 'edit_barang'])->name('barang.edit');
Route::post('rad', [BarangCon::class, 'tambah_rad'])->name('rad.regis');
Route::post('dat', [BarangCon::class, 'tambah_dat'])->name('dat.regis');
Route::post('giat', [DataGiatCon::class, 'save'])->name('giat.tambah');

Route::post('personil_id', [PersonilCon::class, 'register_id'])->name('personil.regisid');
Route::delete('personil_id/{id}', [PersonilCon::class, 'destroy_id'])->name('personil.deleteid');
Route::put('personil_id/{id}', [PersonilCon::class, 'edit_id'])->name('personil.editid');
Route::post('giat_id', [DataGiatCon::class, 'save_id'])->name('giat.tambahid');
Route::delete('giat/{id}', [DataGiatCon::class, 'destroy_giat'])->name('giat.delete');

Route::post('struktur_id', [StrukturCon::class, 'save_id'])->name('struktur.tambahid');
Route::delete('struktur/{id}', [StrukturCon::class, 'destroy_struktur'])->name('struktur.delete');

Route::post('login', [PolresCon::class, 'login'])->name('polres.login');
Route::put('polres/{id}', [PolresCon::class, 'edit'])->name('polres.edit');
Route::delete('polres/{id}', [PolresCon::class, 'destroy'])->name('polres.delete');

Route::post('hambatan', [HambatanCon::class, 'tambah_hambatan'])->name('hambatan.regis');
Route::put('hambatan/{id}', [HambatanCon::class, 'edit_hambatan'])->name('hambatan.edit');
Route::delete('hambatan/{id}', [HambatanCon::class, 'destroy_hambatan'])->name('hambatan.delete');

Route::post('pen', [PendahuluanCon::class, 'tambah_pen'])->name('pen.regis');
Route::put('pen/{id}', [PendahuluanCon::class, 'edit_pen'])->name('pen.edit');
Route::delete('pen/{id}', [endahuluanCon::class, 'destroy_pen'])->name('pen.delete');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
