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
    return view('welcome');
})->name('home');

Route::get('/admin', function () {
    return ['Laravel' => app()->version()];
})->name('admin');

require __DIR__ . '/auth.php';

Route::middleware(['auth:sanctum', 'admin'])->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');
