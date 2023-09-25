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

Route::get('/', function () {
    return view('index');
});

// login dan sign up
Route::get('/masuk',function(){
    return view('masuk');
})->name('masuk');


Route::get('/daftar',function(){
    return view('daftar');
})->name('daftar');


// bagian halaman dashboard

Route::get('/pengguna/dashboard',function(){
    return view('pengguna.dashboard');
})->name('dashboard-pengguna');

// halaman materi
Route::get('/pengguna/materi',function(){
    return view('pengguna.materi');
})->name('materi');


// halaman soal
Route::get('/pengguna/soal',function(){
    return view('pengguna.soal');
})->name('soal');
Route::get('pengguna/soal/praujian', function () {
    return view('pengguna.praujian');
})->name('praujian');

// halaman profile
Route::get('/pengguna/profile',function(){
    return view('pengguna.profile');
})->name('profile-pengguna');
Route::get('/pengguna/profile/edit',function(){
    return view('pengguna.editprofile');
})->name('editprofile-p');












// INI BAGIAN HALAMAN ADMIN
Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
})->name('dashboard-admin');
