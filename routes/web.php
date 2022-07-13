<?php

use App\Http\Controllers\PolresCon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
        Route::get('/register', 'PolresCon@index')->name('register.show');
        Route::post('/register', 'PolresCon@register')->name('register.perform');

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

Route::get('/home', [Controller::class, 'home']);
Route::get('/homedup', [Controller::class, 'homedup']);


Route::get('/data-polsek', [Controller::class, 'data_polsek']);
Route::get('/data-personil', [Controller::class, 'data_personil']);
Route::get('/data-barang', [Controller::class, 'data_barang']);
Route::get('/data-internet', [Controller::class, 'data_internet']);
Route::get('/data-giat', [Controller::class, 'data_giat']);

// Route::get('/', function () {
//     return view('index');
// });
