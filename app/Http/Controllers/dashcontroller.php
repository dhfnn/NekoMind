<?php

namespace App\Http\Controllers;

use App\Models\datalainnya;
use App\Models\datapengguna;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashcontroller extends Controller
{
    function dashadmin(){
        $jumlahPengguna = users::count();
        $namepage = 'Dashboard';
        return view('admin.dashboard', compact('namepage','jumlahPengguna'));
    }


    // function dashpengguna(){
    //     return view('pengguna.dashboard');
    // }

    function dashpengguna(){
        // Mengecek apakah pengguna sudah login
        if (Auth::check()) {
            // Mengambil ID pengguna yang telah login
            $userId = Auth::id();

            // Mengecek apakah data pengguna ada dalam tabel 'datapengguna'
            $datapengguna = datapengguna::where('user_id', $userId)->first();

            // Mengecek apakah data lainnya ada dalam tabel 'datalainnya'
            $datalainnya = datalainnya::where('user_id', $userId)->first();

            if ($datalainnya &&  $datapengguna) {
                // Jika kedua data ada, arahkan ke halaman dashboard
                $userId = auth()->id();
                return view('pengguna.dashboard',compact('userId'));
            } else {
                // Jika salah satu atau kedua data tidak ada, arahkan ke halaman tambah data
                return redirect('/Profilepengguna/create');
            }
        } else {
            // Jika pengguna belum login, arahkan ke halaman login atau halaman lain yang sesuai
            return redirect('/login'); // Ganti dengan rute login yang sesuai
        }
    }
}