<?php

use App\Http\Controllers\PolresCon;
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
    Route::get('/', [PolresCon::class, 'index']);


    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        // Route::get('/register', 'PolresCon@index')->name('register.show');
        // Route::post('/register', 'PolresCon@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

// Route::get('/home', [PolresCon::class, 'index']);
Route::get('/home', [Controller::class, 'home']);
Route::get('/homedup', [Controller::class, 'homedup']);
Route::get('/home/id', [Controller::class, 'laporan']);


Route::get('/data-polres', [Controller::class, 'indexPolres']);
Route::get('/data-personil', [Controller::class, 'data_personil']);
Route::get('/data-inventaris/data-jarkomrad', [Controller::class, 'data_jarkomrad']);
Route::get('/data-inventaris/data-jarkomdat', [Controller::class, 'data_jarkomdat']);
Route::get('/data-inventaris/data-barang', [Controller::class, 'data_barang']);
Route::get('/data-giat', [Controller::class, 'data_giat']);

Route::get('/data-polsek/{id}', [Controller::class, 'data_polsek_id']);
Route::get('/data-personil/{id}', [Controller::class, 'data_personil_id']);
Route::get('/data-inventaris/data-jarkomrad/{id}', [Controller::class, 'data_jarkomrad_id']);
Route::get('/data-inventaris/data-jarkomdat/{id}', [Controller::class, 'data_jarkomdat_id']);
Route::get('/data-inventaris/data-barang/{id}', [Controller::class, 'data_barang_id']);
Route::get('/data-giat/id', [Controller::class, 'data_giat_id']);

// Route::get('/', function () {
//     return view('index');
// });
