<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/dashboard', [DashboardController::class, 'index']);
route::controller(LoginController::class)->group(function () {
    Route::get('/signin', 'halaman');
    Route::post('/auth', 'login');
    Route::post('/create-kategori', 'input');
    Route::get('/delete-kategori/{id}', 'delete');
});
