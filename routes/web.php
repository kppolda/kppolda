<?php

use App\Http\Controllers\PolresCon;
use App\Http\Controllers\PdfCon;
use App\Http\Controllers\PersonilCon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */

    Route::get('/', [Controller::class, 'homedup']);

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'PolresCon@index')->name('register.show');
        Route::post('/register', 'PolresCon@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'PolresCon@login')->name('login.perform');    });

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    Route::group(['middleware' => ['admin']], function () {
            /**
             * Logout Routes
             */
        Route::get('/data-polres', [Controller::class, 'indexPolres']);
        Route::get('/data-personil', [Controller::class, 'data_personil']);
        Route::get('/data-inventaris/data-jarkomrad', [Controller::class, 'data_jarkomrad']);
        Route::get('/data-inventaris/data-jarkomdat', [Controller::class, 'data_jarkomdat']);
        Route::get('/data-inventaris/data-barang', [Controller::class, 'data_barang']);
        Route::get('/data-giat', [Controller::class, 'data_giat']);
        Route::get('/daftar-lapbul', [Controller::class, 'daftar_lapbul']);
        Route::get('/daftar-lapbul/{id}', [Controller::class, 'daftar_lapbul_bulan']);
        Route::get('/laporan/{id}', [Controller::class, 'laporan']);
        Route::get('/pdf/{id}', [PdfCon::class, 'index']);
        Route::get('/home', [Controller::class, 'home']);
    });
    Route::group(['middleware' => ['auth']], function () {

        Route::get('/data-personil/id', [Controller::class, 'data_personil_id']);
        Route::get('/data-inventaris/data-jarkomrad/id', [Controller::class, 'data_jarkomrad_id']);
        Route::get('/data-inventaris/data-jarkomdat/id', [Controller::class, 'data_jarkomdat_id']);
        Route::get('/data-inventaris/data-barang/id', [Controller::class, 'data_barang_id']);
        Route::get('/data-giat/id', [Controller::class, 'data_giat_id']);
        Route::get('/data-hambatan/id', [Controller::class, 'data_hambatan_id']);
        Route::get('/kesimpulan-saran/id', [Controller::class, 'kesimpulan_saran_id']);
        Route::get('/daftar-lapbuls/id', [Controller::class, 'daftar_lapbul_id'])->name('lapbul');

    });
});

// Route::get('/home', [PolresCon::class, 'index']);

// Route::get('/html-pdf', [PdfCon::class, 'htmlpdf'])->name('htmlPdf');
// Route::get('/pdf2', [PdfCon::class, 'index2']);
// Route::get('/pdf', [PdfCon::class, 'index']);


// Route::get('/', function () {
//     return view('index');
// });
