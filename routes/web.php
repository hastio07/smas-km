<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminHistoryController;
use App\Http\Controllers\AdminVisiMisiController;
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
    Route::get('/MainPpdb', 'mainppdb');
    Route::get('/NewsDetails', 'newsdetails');
    Route::get('/TeacherList', 'teacherlist');
    Route::get('/History', 'history');
    Route::get('/OrgStructure', 'orgstructure');
    Route::get('/VisiMisi', 'visimisi');
    Route::get('/contact', 'contact');
    Route::get('/foto', 'foto');
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
            Route::get('adminteacher', 'index')->name('admin.adminteacher'); // Admin Dashboard
        });
        Route::controller(NewsController::class)->group(function () {
            Route::get('news', 'index')->name('admin.adminnews');
            Route::post('news', 'store')->name('admin.addnews');
            Route::delete('news-delete', 'destroy')->name('admin.deletenews');
        });
        Route::controller(AdminHistoryController::class)->group(function () {
            Route::get('adminhistory', 'index')->name('admin.adminhistory');
        });
        Route::controller(AdminVisiMisiController::class)->group(function () {
            Route::get('adminvisimisi', 'index')->name('admin.adminvisimisi'); // Admin Dashboard
        });

        Route::post('logout', 'logout')->name('logout'); // Proses Logout
    });
