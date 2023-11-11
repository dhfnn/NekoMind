<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Poin;
use App\Models\Level;
use App\Models\Ujian;
use App\Models\users;
use App\Models\Pelajaran;
use App\Models\hasilujian;
use App\Models\datalainnya;
use App\Models\HistoryMisi;
use App\Models\MateriModel;

use App\Models\Chatpengguna;
use App\Models\datapengguna;
use App\Models\Historyadmin;
use App\Models\Historyujian;
use Illuminate\Http\Request;
use App\Models\Historytambahpoin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dashcontroller extends Controller
{
    function dashadmin()
    {
        $userId = auth()->id();

        $datachat=  Chatpengguna::with('user')->get();
        $userdata = users::where('id', $userId)->first();
        // dd($userdata);

        $jumlahPengguna = users::count();
        $jumlahUjian = Ujian::count();
        $jumlahMateri = MateriModel::count();
        $dataLevel = Level::join('users', 'users.id', '=', 'level.user_id')
        ->join('poinpengguna', 'poinpengguna.user_id', '=', 'level.user_id')
        ->select('level.*', 'users.*', 'poinpengguna.*')
        ->get();


        // dd($dataLevel);
        $dataAdmin = Historyadmin::with('user')
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();
        // dd($dataAdmin);
        // dd($dataLevel);
        $namepage = 'Dashboard';
        return view('admin.dashboard', compact('namepage', 'jumlahPengguna', 'jumlahUjian', 'jumlahMateri', 'dataLevel', 'dataAdmin','datachat','userdata','userId'));
    }

    // function dashpengguna(){
    //     return view('pengguna.dashboard');
    // }
    function terimadataTanggal(Request $request)
    {
        $tanggal = $request->input('tanggal');
        dd($tanggal);
    }

    function dashpengguna()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $usersData =users::where('id', $userId)->first();
            $ujianTerbaru = Historyujian::with('ujian')
                ->where('user_id', $userId)
                ->whereHas('ujian', function ($query) {
                    $query->where('jenis', 'UJIAN');
                })
                ->orderBy('waktu', 'desc')
                ->take(4)
                ->get();
            $jumlahAujian = count($ujianTerbaru);
            $arrayUjian = [];
            if (!$ujianTerbaru->isEmpty()) {
                for ($i = 0; $i < $jumlahAujian; $i++) {
                    $arrayUjian[] = $ujianTerbaru[$i]->nilai;
                }
            } else {
                $arrayUjian = ['0', '0', '0', '0'];
            }

            $quizTerbaru = Historyujian::with('ujian')
                ->where('user_id', $userId)
                ->whereHas('ujian', function ($query) {
                    $query->where('jenis', 'QUIZ');
                })
                ->take(4)
                ->get();
            $jumlahQuiz = count($quizTerbaru);
            $arrayQuiz = [];
            if (!$quizTerbaru->isEmpty()) {
                for ($i = 0; $i < $jumlahQuiz; $i++) {
                    $arrayQuiz[] = $quizTerbaru[$i]->nilai;
                }
            } else {
                $arrayQuiz = [];
            }

            $latihanTerbaru = Historyujian::with('ujian')
                ->where('user_id', $userId)
                ->whereHas('ujian', function ($query) {
                    $query->where('jenis', 'LATIHAN');
                })
                ->take(4)
                ->get();
            $jumlahLatihan = count($latihanTerbaru);
            // dd($jumlahLatihan);
            $arrayLatihan = [];
            if (!$latihanTerbaru->isEmpty()) {
                for ($i = 0; $i < $jumlahLatihan; $i++) {
                    $arrayLatihan[] = $latihanTerbaru[$i]->nilai;
                }
            } else {
                $arrayLatihan = [];
            }

            $tryoutTerbaru = Historyujian::with('ujian')
                ->where('user_id', $userId)
                ->whereHas('ujian', function ($query) {
                    $query->where('jenis', 'TRYOUT');
                })
                ->take(4)
                ->get();
            if (!$tryoutTerbaru->isEmpty()) {
                $arrayTryout = [$tryoutTerbaru[0]->nilai, $tryoutTerbaru[1]->nilai, $tryoutTerbaru[2]->nilai, $tryoutTerbaru[3]->nilai];
            } else {
                $arrayTryout = [];
            }

            $ujianRata = Historyujian::with('ujian')
                ->where('user_id', $userId)
                ->whereHas('ujian', function ($query) {
                    $query->where('jenis', 'UJIAN');
                })
                ->get();
            $nilaiArrayujian = $ujianRata->pluck('nilai')->toArray();
            $rataUjian = count($nilaiArrayujian) > 0 ? intval(array_sum($nilaiArrayujian) / count($nilaiArrayujian)) : 0;

            $quizRata = Historyujian::with('ujian')
                ->where('user_id', $userId)
                ->whereHas('ujian', function ($query) {
                    $query->where('jenis', 'QUIZ');
                })
                ->get();
            $nilaiArrayquiz = $quizRata->pluck('nilai')->toArray();
            $rataQuiz = count($nilaiArrayquiz) > 0 ? intval(array_sum($nilaiArrayquiz) / count($nilaiArrayquiz)) : 0;

            $latihanRata = Historyujian::with('ujian')
                ->where('user_id', $userId)
                ->whereHas('ujian', function ($query) {
                    $query->where('jenis', 'LATIHAN');
                })
                ->get();
            $nilaiArraylatihan = $latihanRata->pluck('nilai')->toArray();
            $rataLatihan = count($nilaiArraylatihan) > 0 ? intval(array_sum($nilaiArraylatihan) / count($nilaiArraylatihan)) : 0;

            $tryoutRata = Historyujian::with('ujian')
                ->where('user_id', $userId)
                ->whereHas('ujian', function ($query) {
                    $query->where('jenis', 'TRYOUT');
                })
                ->get();
            $nilaiArrayTryout = $tryoutRata->pluck('nilai')->toArray();
            $rataTryout = count($nilaiArrayTryout) > 0 ? intval(array_sum($nilaiArrayTryout) / count($nilaiArrayTryout)) : 0;

            $userId = Auth::id();
            $datapengguna = datapengguna::where('user_id', $userId)->first();
            $datalainnya = datalainnya::where('user_id', $userId)->first();

            // dd($pelfav);
            if ($datalainnya && $datapengguna) {
                $pelfav = $datalainnya->pelajaranfav;
                $pel = explode(', ', $pelfav);
                $userId = auth()->id();
                $data = DB::table('hasilujian')
                    ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                    ->whereIn('id', function ($query) use ($userId) {
                        $query
                            ->select(DB::raw('MAX(id)'))
                            ->from('hasilujian')
                            ->where('user_id', $userId)
                            ->groupBy('ujian_id');
                    })
                    ->get();
                $totalBenar = $data->sum('benar');

                $data = DB::table('hasilujian')
                    ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                    ->whereIn('id', function ($query) use ($userId) {
                        $query
                            ->select(DB::raw('MAX(id)'))
                            ->from('hasilujian')
                            ->where('user_id', $userId)
                            ->groupBy('ujian_id');
                    })
                    ->get();

                $totalSalah = $data->sum('salah');

                $data = DB::table('hasilujian')
                    ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                    ->whereIn('id', function ($query) use ($userId) {
                        $query
                            ->select(DB::raw('MAX(id)'))
                            ->from('hasilujian')
                            ->where('user_id', $userId)
                            ->groupBy('ujian_id');
                    })
                    ->distinct('ujian_id')
                    ->get();

                // Menghitung berapa banyak ujian_id yang unik
                $jumlahSoal = $data->count();
                $level = Level::where('user_id', $userId)->first();
                $exp = $level->exp;
                $expLevel = $exp / 1200;
                $sisaBagi = $exp % 1200;
                $levelPengguna = number_format($expLevel);

                if ($sisaBagi !== 0) {
                    $persentase = ($sisaBagi / 1200) * 100;
                } else {
                    $persentase = 0;
                }

                // $sekarang= date('Y-m-d');
                $tanggal = now()
                    ->setTimezone('Asia/Jakarta')
                    ->toDateString();

                $sekarang = $tanggal;
                $dataMisi = Misi::all()->first();
                if ($dataMisi->tanggal === $sekarang) {
                    // dd('data ada');
                } else {
                    $dataMisi = Misi::all()->first();
                    $dataMisi->update(['tanggal' => $sekarang]);
                }
                // lamun aya data dina hostory misi anu tanggal poe ayeuna jd user_id
                if (
                    HistoryMisi::where('tanggal', $sekarang)
                        ->where('user_id', $userId)
                        ->exists()
                ) {
                    $dataHistory = HistoryMisi::where('tanggal', $sekarang)
                        ->where('user_id', $userId)
                        ->first();
                    $ListdataMisi = '0';

                    ///////////////////////////////////////////////////////////////////////////////////////////////////////
                    if (
                        Historytambahpoin::where('user_id', $userId)
                            ->where('misi_id', $dataMisi->id)
                            ->where('tanggal', $sekarang)
                            ->exists()
                    ) {
                        // dd('data tersedia tak perlu di tambahkan');
                        // dd($sekarang);
                    } else {
                        $data['user_id'] = $userId;
                        $data['misi_id'] = $dataMisi->id;
                        $data['tanggal'] = $sekarang;
                        $data['jumlahpoin'] = $dataMisi->poin;
                        $data['jumlahexp'] = $dataMisi->exp;
                        // dd($dataMisi->exp);
                        $dataArray = $data->toArray();
                        // dd($dataArray);
                        $tambahhitorypoin = HistoryTambahPoin::create($dataArray);
                        if ($tambahhitorypoin) {
                            $datatambahpoin = Historytambahpoin::where('user_id', $userId)
                                ->where('misi_id', $dataMisi->id)
                                ->where('tanggal', $sekarang)
                                ->first();

                            $level = Level::where('user_id', $userId)->first();
                            // dd($level->exp+$datatambahpoin->jumlahexp);
                            $updatelevel = $level->update(['exp' => $level->exp + $datatambahpoin->jumlahexp]);
                            //   if($updatelevel){
                            $poin = Poin::where('user_id', $userId)->first();
                            $poin->update(['poin' => $poin->poin + $datatambahpoin->jumlahpoin]);

                            //     dd('berhaso;');
                            //   }else{
                            //     dd('gaga');
                            //   }
                            // dd($poin);
                        } else {
                            dd('data gagal di tambahkan');
                        }
                    }
                    ///////////////////////////////////////////////////////////////////////////////////
                } else {
                    $ListdataMisi = Misi::all()->first();
                    if ($ListdataMisi->jenis === 'soal') {
                        $dataHistoryUjian = Historyujian::where('waktu', $sekarang)
                            ->where('user_id', $userId)
                            ->get();
                        $periksanilai = false;
                        foreach ($dataHistoryUjian as $data) {
                            if ($data->nilai >= $ListdataMisi->target) {
                                $periksanilai = true;
                                break;
                            }
                        }
                        if ($periksanilai) {
                            $data = [
                                'misi_id' => $ListdataMisi->id,
                                'user_id' => $userId,
                                'tanggal' => $sekarang,
                                'poin' => $ListdataMisi->poin,
                                'exp' => $ListdataMisi->exp,
                            ];
                            HistoryMisi::create($data);
                        } else {
                            // dd('dataTidak tersedia');
                            // dd($sekarang);
                        }
                    } else {
                        dd('INI MISINYA JENIS BACA MATERI');
                    }
                }

                return view('pengguna.dashboard', compact('userId', 'datalainnya', 'datapengguna', 'totalBenar', 'totalSalah', 'jumlahSoal', 'levelPengguna', 'sisaBagi', 'persentase', 'ListdataMisi', 'pel', 'arrayUjian', 'arrayQuiz', 'arrayLatihan', 'arrayTryout', 'rataUjian', 'rataLatihan', 'rataQuiz', 'rataTryout','usersData'));
            } else {
                return redirect('/Profilepengguna/create');
            }
        } else {
            return redirect('/login');
        }
    }

    public function peringkat()
    {

        // ->whereHas('users', function ($query) {
        //     $query->where('role', 'pengguna');
        // })
        $namepage = 'Dashboard';
        $userId = Auth::id();
        $username = Auth::user()->username;
        $userDataPeringkat = DB::table('level')
        ->join('users', 'level.user_id', '=', 'users.id')
        ->join('poinpengguna', 'level.user_id', '=', 'poinpengguna.user_id')
        ->join('datapengguna', 'level.user_id', '=', 'datapengguna.user_id')
        ->join('datalainnyas', 'level.user_id', '=', 'datalainnyas.user_id')
        ->select('level.*', 'users.*', 'poinpengguna.*', 'datapengguna.*', 'datalainnyas.*')
        ->get();



        $hasil = [];
        $nomor = 1;
        $jumlahBenarPerUser = HasilUjian::select('user_id', \DB::raw('SUM(benar) as totalBenar'))
        ->groupBy('user_id')
        ->get();

    $jumlahSalahPerUser = HasilUjian::select('user_id', \DB::raw('SUM(salah) as totalSalah'))
        ->groupBy('user_id')
        ->get();

    if (!$jumlahBenarPerUser->isEmpty() && !$jumlahSalahPerUser->isEmpty()) {
        // Jalankan kode jika $jumlahBenarPerUser dan $jumlahSalahPerUser memiliki nilai atau data

        $hasil = [];

        foreach ($userDataPeringkat as $data) {
            $totalBenar = $jumlahBenarPerUser->where('user_id', $data->user_id)->first()->totalBenar;
            $totalSalah = $jumlahSalahPerUser->where('user_id', $data->user_id)->first()->totalSalah;
            $totalUjian = $totalBenar + $totalSalah;
            $persentase = ($totalBenar / $totalUjian) * 100;

            // Now you can use $totalBenar in your calculations or display
            $hasil[] = [
                'no' => 1, // Menggunakan nomor dan kemudian menambahkannya
                'foto' => 2,
                'username' => $data->username,
                'level' => $data->exp / 1200,
                'persentase' => $persentase,
                'poin' => $data->poin,
            ];
        }

        // Lakukan sesuatu dengan $hasil atau tampilkan hasilnya
    }


        // Sekarang, $hasil akan berisi nomor (indeks) yang berurutan pada setiap elemen.

        return view('pengguna.peringkat', compact('namepage', 'userId', 'hasil', 'username'));
    }

    public function getDataPeringkat()
    {
        $userData = Users::with('datalainnya', 'hasilujian', 'level', 'poin')
            ->where('role', 'pengguna')
            ->get();
        return response()->json($userData);
    }
}
