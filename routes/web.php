<?php

use App\Http\Controllers\GudangController;
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

Route::get('/login', function () {
    return view('login',[
        "title" => "Login"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Dashboard"
    ]);
});

Route::get('/gudang', function () {
    return view('gudang',[
        "title" => "Gudang"
    ]);
});

Route::get('/barang', function () {
    return view('barang',[
        "title" => "Barang"
    ]);
});

Route::get('/barang-masuk', function () {
    return view('barang-masuk',[
        "title" => "Barang Masuk"
    ]);
});

Route::get('/barang-keluar', function () {
    return view('barang-keluar',[
        "title" => "Barang Keluar"
    ]);
});

Route::resource('/tambah-gudang',GudangController::class);