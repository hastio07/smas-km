<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

// Rute Main Page
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/sambutan', 'sambutan');
    Route::get('/ppdb', 'ppdb');
    Route::get('/profil', 'profil');
Route::get('/DetailGuru', 'detailguru');

});

// Rute Authentication
Route::controller(AuthController::class)->middleware(['guest:admin,teacher,student,user'])->group(function () {
    Route::get('login/admin', 'index')->name('admin.login'); // Halaman Admin Login
    Route::get('login/user', 'index')->name('user.login'); // Halaman User Login
    Route::post('login', 'login')->name('login'); // Proses Login
});
// Rute After Authentication
Route::controller(AuthController::class)->middleware(['auth:admin,teacher,student,user'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin', 'index')->name('admin.dashboard'); // Admin Dashboard
    });
    Route::post('logout', 'logout')->name('logout'); // Proses Logout
});

