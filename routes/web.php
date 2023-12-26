<?php

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
    return view('user/Home');
});
Route::get('/login', function () {
    return view('Auth/login');
});

Route::get('/sambutan', function () {
    return view('user/Sambutan');
});
Route::get('/ppdb', function () {
    return view('user/ppdb');
});
Route::get('/profil', function () {
    return view('user/Profil');
});
Route::get('/guru', function () {
    return view('user/DetailGuru');
});

