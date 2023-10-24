<?php

namespace App\Http\Controllers;

use App\Models\datalainnya;
use App\Models\datapengguna;
use App\Models\HistoryUjian;
use App\Models\Level;
use App\Models\Pelajaran;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                $data = DB::table('historyujian')
                ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                ->whereIn('id', function($query) use ($userId) {
                    $query->select(DB::raw('MAX(id)'))
                        ->from('historyujian')
                        ->where('user_id', $userId)
                        ->groupBy('ujian_id');
                })
                ->get();
            $totalBenar = $data->sum('benar');

            $data = DB::table('historyujian')
                    ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                    ->whereIn('id', function($query) use ($userId) {
                        $query->select(DB::raw('MAX(id)'))
                            ->from('historyujian')
                            ->where('user_id', $userId)
                            ->groupBy('ujian_id');
                    })
                    ->get();

                // Jumlahkan kolom "salah"
                $totalSalah = $data->sum('salah');

                $data = DB::table('historyujian')
                        ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                        ->whereIn('id', function($query) use ($userId) {
                            $query->select(DB::raw('MAX(id)'))
                                ->from('historyujian')
                                ->where('user_id', $userId)
                                ->groupBy('ujian_id');
                        })
                        ->distinct('ujian_id')
                        ->get();

                    // Menghitung berapa banyak ujian_id yang unik
                    $jumlahSoal = $data->count();
                $level = Level::where('user_id', $userId)->first();
                $exp=$level->exp;
                $expLevel = $exp / 1200;
                $sisaBagi = $exp % 1200;
                $levelPengguna = number_format($expLevel);

                if($sisaBagi !== 0){
                $persentase = ($sisaBagi/1200 )*100;

                }else(
                    $persentase = 0
                );
                return view('pengguna.dashboard',compact('userId','datalainnya','datapengguna','totalBenar', 'totalSalah','jumlahSoal','levelPengguna','sisaBagi','persentase'));
            } else {
                // Jika salah satu atau kedua data tidak ada, arahkan ke halaman tambah data
                return redirect('/Profilepengguna/create');
            }
        } else {
            // Jika pengguna belum login, arahkan ke halaman login atau halaman lain yang sesuai
            return redirect('/login'); // Ganti dengan rute login yang sesuai
        }
    }
    public function peringkat(){
        $namepage = 'Dashboard';
        $userId = Auth::id();
        $userDataPeringkat = Users::with('datalainnya', 'historyujian', 'level','poin')
        ->where('role', 'pengguna')
        ->get();
        $hasil = [];
        $nomor = 1; // Variabel untuk nomor indeks

        foreach($userDataPeringkat as $data) {
            $benar = $data->historyujian->benar;
            $salah = $data->historyujian->salah;
            $totalUjian = $benar + $salah;
            $persentase = ($benar / $totalUjian) * 100;

            $hasil[] = [
                'no' => 1, // Menggunakan nomor dan kemudian menambahkannya
                'foto' => 2,
                'username' => $data->username,
                'level' => $data->level->exp/1200,
                'persentase' => $persentase,
                'poin' => $data->poin->poin
            ];
        }

        // Sekarang, $hasil akan berisi nomor (indeks) yang berurutan pada setiap elemen.

        return view('pengguna.peringkat',compact('namepage','userId','hasil'));
    }

    public function getDataPeringkat(){
        $userData = Users::with('datalainnya', 'historyujian', 'level','poin')
        ->where('role', 'pengguna')
        ->get();
       return response()->json($userData);
    }
}