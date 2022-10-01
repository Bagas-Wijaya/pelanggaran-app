<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
//user
Route::get('/user', [SiswaController::class, 'web']);
Route::get('/user/history-pelanggaran', [SiswaController::class, 'history']);
Route::get('/user/detail-profile',[SiswaController::class,'profile']);
Route::get('/user/edit-password',[SiswaController::class,'password']);



//auth
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);



//admin
Route::get('/admin/siswa', [\App\Http\Controllers\AdminController::class, 'siswa']);
Route::get('/admin/kelas', [\App\Http\Controllers\AdminController::class, 'kelas']);
Route::get('/admin/pelanggaran', [\App\Http\Controllers\AdminController::class, 'pelanggaran']);
Route::get('/admin/kategori-pelanggaran', [\App\Http\Controllers\AdminController::class, 'kategori']);
Route::get('/admin/pelanggar', [\App\Http\Controllers\AdminController::class, 'pelanggar']);
Route::get('/', [\App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/dashboard', [AdminController::class, 'index']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


