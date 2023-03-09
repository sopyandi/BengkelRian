<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisKerusakanController;
use App\Http\Controllers\DiagnosaKerusakanController;
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
    return view('dashboard/edit/update_data_mobil');
});
// ROUTE UNTUK LOGIN & REGISTER
route::controller(LoginController::class)->group(function () {
    Route::get('/signin', 'halaman')->name('login');
    Route::post('/auth', 'login');
    Route::get('/register', 'register');
    Route::post('/logout', 'logout');
});
//ROUTE UNTUK USERS
route::controller(UserController::class)->group(function () {
    Route::post('/create-user','create');
});
// ROUTE UNTUK DASHBOARD
    Route::group(['middleware' => 'auth'],function(){
    route::controller(DashboardController::class)->group(function () {
    route::get('/dashboard','member');
    route::get('/admin', 'admin');
    route::get('/mekanik', 'data_mekanik');
    route::get('/kerusakan', 'data_kerusakan');
    route::get('/create/akun', 'create');
      });
    });

// ROUTE UNTUK MEMBER
Route::group(['middleware' => 'auth'],function(){
    route::controller(MemberController::class)->group(function () {
        route::get('/member', 'data_member');
        route::post('/update_member', 'update_member');
        route::post('hapus_member', 'delete_member');
        route::post('proses_update', 'proses_update');
    });
});
// ROUTE UNTUK MEKANIK
Route::group(['middleware' => 'auth'],function(){
    route::controller(MekanikController::class)->group(function () {
        route::get('daftar_mekanik', 'daftar_mekanik');
        route::post('create_mekanik', 'create_mekanik');
        route::post('update_mekanik', 'update_mekanik');
    });
});
// ROUTE UNTUK JENIS KERUSAKAN
Route::group(['middleware' => 'auth'],function(){
    route::controller(JenisKerusakanController::class)->group(function () {
        route::get('tambah_jenis_kerusakan', 'tambah_jenis');
        route::post('tambah_jenis_kerusakan', 'proses_tambah');
        // route::post('update_mekanik', 'update_mekanik');
    });
});
// ROUTE UNTUK DIAGNOSA KERUSAKAN (PERBAIKAN)
Route::group(['middleware' => 'auth'],function(){
    route::controller(DiagnosaKerusakanController::class)->group(function () {
        route::get('ajukan_perbaikan', 'ajukan_perbaikan');
        route::post('tambah_diagnosa_kerusakan', 'proses_tambah');
        // route::post('update_mekanik', 'update_mekanik');
    });
});
