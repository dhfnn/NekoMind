<?php

use App\Http\Controllers\tes;
use App\Http\Controllers\data;
use App\Http\Controllers\Konfigdata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashcontroller;
use App\Http\Controllers\loregcontroller;
use App\Http\Controllers\Materi;
use App\Http\Controllers\Profilepengguna;
use App\Http\Controllers\profilecontroller;

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



// login dan sign up
route::middleware(['guest'])->group(function(){
    Route::get('/masuk',[loregcontroller::class,'loginpage'])->name('masuk');
    Route::post('/daftar',[loregcontroller::class,'register'])->name('register');
    Route::get('/daftar',[loregcontroller::class,'registerpage'])->name('daftar');
    Route::post('/masuk',[loregcontroller::class,'login'])->name('login');
    Route::get('/', function () {
        return view('index');
    });
});
route::middleware(['auth'])->group(function(){
    Route::middleware(['roleakses:admin'])->group(function () {
        Route::get('/admin/dashboard', [dashcontroller::class, 'dashadmin'])->name('dashboard-admin');
        // bagian hal pelajaran
        Route::resource('Materi' ,Materi::class);
        Route::get('Materi/{id}' ,[Materi::class, 'show']);
        // bagian hal data
        Route::resource('data', data::class);
        Route::get('data/{id}/edit', [data::class, 'edit'])->name('data.edit');
        // Route::get('data/{id}', 'data@show');
        Route::get('data/{id}', [data::class, 'show'])->name('data.show');
        // Route::delete('/data/{id}', [data::class, 'destroy'])->name('data.destroy');



        Route::resource('Konfigdata', Konfigdata::class);
        Route::get('Konfigdata/{id}/edit', [Konfigdata::class,'edit']);
        Route::delete('Konfigdata/{id}', [Konfigdata::class, 'destroy'])->name('data.delete');






        // bagian profile
        Route::get('/admin/profile' ,[profilecontroller::class,'profadmin'])->name('profile-admin');
            });




// ini batas 2 role








    Route::middleware(['roleakses:pengguna'])->group(function () {
        Route::get('/pengguna/dashboard', [dashcontroller::class, 'dashpengguna'])->name('dashboard-pengguna');
        // halaman materi
        Route::get('/pengguna/materi',function(){
            $userId = auth()->id();
            return view('pengguna.materi',compact('userId'));
        })->name('materi');
        // halaman soal
        Route::get('/pengguna/soal',function(){
            return view('pengguna.soal');
        })->name('soal');
        Route::get('pengguna/soal/praujian', function () {
            return view('pengguna.praujian');
        })->name('praujian');
        // halaman profile
        Route::resource('Profilepengguna', Profilepengguna::class);
        // Route::get('Profilepengguna/{userId}/edit', 'Profilepengguna@edit');
        Route::get('profilepengguna/{userId}/edit', [Profilepengguna::class, 'edit']);

        Route::post('/pengguna/profile/tambah',[profilecontroller::class,'tambahdata'])->name('tambahdataprofile');

        // Rute-rute pengguna lainnya
    });

    Route::post('/logout',[loregcontroller::class,'logout']);
});

route::get('/home', function(){
    return redirect('admin/dashboard');
});

Route::get('/sekolah', [tes::class,'getDataSekolah']);