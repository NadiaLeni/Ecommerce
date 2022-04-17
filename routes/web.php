<?php

use App\Http\Controllers\ProductController;
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
    return view('home');
});

Route::get('/login', function () {
    return view('/auth/login');
});

Route::get('/signup', function () {
    return view('/auth/register');
});

Route::get('/admin', [ProductController::class, 'getProduk']);

Route::get('/tambah', function () {
    return view('tambah');
});

Route::post('/tambah-produk', [ProductController::class, 'createProduk']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
