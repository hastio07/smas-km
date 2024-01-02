<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
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
    Route::get('/formppdb', 'formppdb');
    Route::get('/profil', 'profil');
    Route::get('/DetailGuru', 'detailguru');
    Route::get('/MainPpdb', 'mainppdb');
    Route::get('/NewsDetails', 'newsdetails');
    Route::get('/TeacherList', 'teacherlist');
});

// Rute Authentication
Route::controller(AuthController::class)
    ->middleware(['guest:admin'])
    ->group(function () {
        Route::get('login/admin', 'index')->name('admin.login'); // Halaman Admin Login
        Route::post('login', 'login')->name('login'); // Proses Login
    });
// Rute After Authentication
Route::controller(AuthController::class)
    ->middleware(['auth:admin'])
    ->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('admin', 'index')->name('admin.dashboard'); // Admin Dashboard
        });
        Route::controller(TeacherController::class)->group(function () {
            Route::get('teacher', 'index')->name('admin.adminteacher'); // Admin Dashboard
        });
        Route::controller(NewsController::class)->group(function () {
            Route::get('news', 'index')->name('admin.adminnews'); // Admin Dashboard
        });
        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'index')->name('admin.adminprofile'); // Admin Dashboard
        });

        Route::post('logout', 'logout')->name('logout'); // Proses Logout
    });
