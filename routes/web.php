<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
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
// ROUTE UNTUK MIDLEWARE AUTH
Route::group(['middleware' =>'auth'],function(){
route::controller(DashboardController::class)->group(function () {
route::get('/dashboard','member');
route::get('/admin', 'admin');
route::get('/create/akun', 'create');
  });
});
// END
route::controller(LoginController::class)->group(function () {
    Route::get('/signin', 'halaman')->name('login');
    Route::post('/auth', 'login');
    Route::get('/register', 'register');
    Route::post('/logout', 'logout');
});
route::controller(UserController::class)->group(function () {
    Route::post('/create-user', 'create');

});
