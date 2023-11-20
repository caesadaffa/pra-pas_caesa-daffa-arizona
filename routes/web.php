<?php

use App\Http\Controllers\buahController;
use App\Http\Controllers\pembeliController;
use App\Http\Controllers\sayurController;
use App\Models\buah;
use App\Models\pembeli;
use App\Models\sayur;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/buah/all', [buahController::class,'index']);

Route::get('/buah/detail/{buah}', [buahController::class,'show']);

Route::get('/pembeli/all', [pembeliController::class,'index']);

Route::get('/pembeli/detail/{pembeli}', [pembeliController::class,'show']);

Route::get('/sayur/all', [sayurController::class,'index']);

Route::get('/sayur/detail/{sayurs}', [sayurController::class,'show']);