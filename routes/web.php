<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('/login', function () {
    return view('login');
})->name('login');

// Route::middleware(['auth'])->group(function () {
// Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/tambah-user', [AdminController::class, 'tambahUser'])->name('tambah.user');
Route::post('/tambah-user-proses', [AdminController::class, 'tambahUserProses'])->name('tambah.user.proses');
Route::delete('/hapus-user/{id_user}', [AdminController::class, 'hapusUser'])->name('hapus.user');
// 
// });

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/biodata', [UserController::class, 'biodata'])->name('biodata');
