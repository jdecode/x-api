<?php

use App\Http\Controllers\AdminController;
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
})->name('home');

Route::middleware(['auth:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin');
        Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
        Route::post('/admin/logout', 'logout')->name('admin.logout');
    });
});

Route::middleware(['guest'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/login', 'loginForm')->name('admin.loginForm');
        Route::post('/admin/login', 'login')->name('admin.login');
    });
});
