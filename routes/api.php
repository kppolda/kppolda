<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PolresCon;
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
Route::post('login', [PolresCon::class, 'login'])->name('polres.login');
Route::delete('polres/{id}', [PolresCon::class, 'destroy'])->name('polres.delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
