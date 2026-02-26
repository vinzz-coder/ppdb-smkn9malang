<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.layout.app');
});
Route::get('/', function () {
    return view('admin.page.beranda.index');
})->name('beranda');

Route::get('/user', function () {
    return view('admin.page.user.index');
})->name('user');
Route::get('/jurusan', function () {
    return view('admin.page.jurusan.index');
})->name('jurusan');
Route::get('/pendaftaran', function () {
    return view('admin.page.pendaftaran.index');
})->name('pendaftaran');

Route::get('/guest', function () {
    return view('guest.layout.app');
});
