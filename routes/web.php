<?php

use App\Http\Controllers\BabController;
use App\Http\Controllers\tes;
use App\Http\Controllers\data;
use App\Http\Controllers\Konfigdata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashcontroller;
use App\Http\Controllers\loregcontroller;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\materiPengguna;
use App\Http\Controllers\Permateri;
use App\Http\Controllers\Profilepengguna;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\wordController;

// use App\Http\Controllers\BabController;

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
    Route::get('hai', function() {
        return view('component.texkeditor');
    });
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
        Route::resource('Pelajaran' ,MateriController::class);
        Route::get('Pelajaran/{materi}' ,[MateriController::class, 'show'])->name('materi.show');
        Route::put('Pelajaran/{id}' ,[MateriController::class, 'update'])->name('materi.update');
        Route::delete('Pelajaran/{Materi}' ,[MateriController::class, 'destroy'])->name('materi.destroy');

        // Route::get('Pelajaran/{id}/edit' ,[Materi::class, '']);
        // bagian hal data
        Route::resource('data', data::class);
        Route::get('data/{id}/edit', [data::class, 'edit'])->name('data.edit');
        // Route::get('data/{id}', 'data@show');
        Route::get('data/{id}', [data::class, 'show'])->name('data.show');
        // Route::delete('/data/{id}', [data::class, 'destroy'])->name('data.destroy');

        Route::resource('permateri ',Permateri::class);
        // Route::get('permateri/{id}/create',Permateri::class);
        Route::get('permateri/{id}', [Permateri::class, 'show'])->name('permateri.show');
        Route::get('permateri/{permateri}', [Permateri::class, 'update'])->name('bab.update');
        // Route::get('permateri/{permateri}/edit', [Permateri::class, 'show']);
//


        Route::resource('Konfigdata', Konfigdata::class);
        Route::get('Konfigdata/{id}/edit', [Konfigdata::class,'edit']);
        Route::delete('Konfigdata/{id}', [Konfigdata::class, 'destroy'])->name('data.delete');


        Route::resource('Bab', BabController::class);
        Route::put('bab/{id}', [BabController::class, 'update'])->name('bab.update');





        // bagian profile
        Route::get('/admin/profile' ,[profilecontroller::class,'profadmin'])->name('profile-admin');
            });

            Route::get('/file-word', [wordController::class, 'show']);




// ini batas 2 role








    Route::middleware(['roleakses:pengguna'])->group(function () {
        Route::get('/pengguna/dashboard', [dashcontroller::class, 'dashpengguna'])->name('dashboard-pengguna');
        // halaman materi
        Route::resource('MateriPengguna', materiPengguna::class);
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