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
});

Route::get('/api/v1', function () {
    return ['Laravel' => app()->version()];
})->name('api.v1');

Route::get('/admin', function () {
    return ['Laravel' => app()->version()];
})->name('admin');

require __DIR__ . '/auth.php';

Route::middleware(['auth:sanctum', 'admin'])->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');
