<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/content', [HomeController::class, 'content']);

Route::get('dasboard', [AdminController::class, 'index'])->name('dasboard')->middleware('auth');
Route::get('system', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('registrasi', [LoginController::class, 'registrasi']);
Route::post('registrasi', [LoginController::class, 'store']);

Route::get('dataUser', [AdminController::class,'user'])->name('dataUser')->middleware('auth');
