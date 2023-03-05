<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/s', function () {
    return view('dashboard/edit/update_member');
});
// ROUTE UNTUK LOGIN & REGISTER
route::controller(LoginController::class)->group(function () {
    Route::get('/signin', 'halaman')->name('login');
    Route::post('/auth', 'login');
    Route::get('/register', 'register');
    Route::post('/logout', 'logout');
});
// ROUTE UNTUK MIDLEWARE AUTH DASHBOARD
    Route::group(['middleware' =>'auth'],function(){
    route::controller(DashboardController::class)->group(function () {
    route::get('/dashboard','member');
    route::get('/admin', 'admin');
    route::get('/member', 'data_member');
    route::get('/mekanik', 'data_mekanik');
    route::get('/kerusakan', 'data_kerusakan');
    route::get('/create/akun', 'create');
      });
    });
// ROUTE UNTUK CREATE
route::controller(UserController::class)->group(function () {
    Route::post('/create-user', 'create');

});
//ROUTE UNTUK UPDATE
route::controller(UpdateController::class)->group(function () {
    route::get('/update-member/{id}', 'update_member');
});
