<?php

namespace App\Http\Controllers;

use App\Models\datalainnya;
use App\Models\datapengguna;
use App\Models\HistoryMisi;
use App\Models\Historytambahpoin;
use App\Models\hasilujian;
use App\Models\Historyujian;
use App\Models\Level;
use App\Models\MateriModel;
use App\Models\Misi;
use App\Models\Pelajaran;
use App\Models\Poin;
use App\Models\Ujian;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashcontroller extends Controller
{
    function dashadmin(){
        $jumlahPengguna = users::count();
        $jumlahUjian = Ujian::count();
        $jumlahMateri = MateriModel::count();
        $dataLevel = Level::with('users','poin')
        ->get();
        // dd($dataLevel);
        $namepage = 'Dashboard';
        return view('admin.dashboard', compact('namepage','jumlahPengguna','jumlahUjian','jumlahMateri','dataLevel'));
    }


    // function dashpengguna(){
    //     return view('pengguna.dashboard');
    // }
    function terimadataTanggal(Request $request){
        $tanggal = $request->input('tanggal');
        dd($tanggal);

    }

    function dashpengguna(){
        if (Auth::check()) {
            $userId = Auth::id();
            $datapengguna = datapengguna::where('user_id', $userId)->first();
            $datalainnya = datalainnya::where('user_id', $userId)->first();
            if ($datalainnya &&  $datapengguna) {
                $userId = auth()->id();
                $data = DB::table('hasilujian')
                ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                ->whereIn('id', function($query) use ($userId) {
                    $query->select(DB::raw('MAX(id)'))
                        ->from('hasilujian')
                        ->where('user_id', $userId)
                        ->groupBy('ujian_id');
                })
                ->get();
            $totalBenar = $data->sum('benar');

            $data = DB::table('hasilujian')
                    ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                    ->whereIn('id', function($query) use ($userId) {
                        $query->select(DB::raw('MAX(id)'))
                            ->from('hasilujian')
                            ->where('user_id', $userId)
                            ->groupBy('ujian_id');
                    })
                    ->get();

                $totalSalah = $data->sum('salah');

                $data = DB::table('hasilujian')
                        ->select('ujian_id', 'id', 'user_id', 'benar', 'salah', 'nilai')
                        ->whereIn('id', function($query) use ($userId) {
                            $query->select(DB::raw('MAX(id)'))
                                ->from('hasilujian')
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




                // $sekarang= date('Y-m-d');
                $sekarang = date('Y-m-d');
                $dataMisi = Misi::all()->first();
                if($dataMisi->tanggal === $sekarang){
                    // dd('data ada');
                }else{
                    $dataMisi = Misi::all()->first();
                    $dataMisi->update(['tanggal'=>$sekarang]);
                }
                // lamun aya data dina hostory misi anu tanggal poe ayeuna jd user_id
                if(HistoryMisi::where('tanggal', $sekarang)->where('user_id', $userId)->exists()){
                   $dataHistory = HistoryMisi::where('tanggal' ,$sekarang)
                                ->where('user_id' ,$userId)
                                ->first();
                    $ListdataMisi = "0";


///////////////////////////////////////////////////////////////////////////////////////////////////////
                                if(Historytambahpoin::where('user_id', $userId)->where('misi_id', $dataMisi->id)->where('tanggal', $sekarang)->exists()){

                                    // dd('data tersedia tak perlu di tambahkan');
                                    // dd($sekarang);
                                }else{
                                $data['user_id'] = $userId;
                                $data['misi_id'] =$dataMisi->id;
                                $data['tanggal'] = $sekarang;
                                $data['jumlahpoin'] = $dataMisi->poin;
                                $data['jumlahexp'] = $dataMisi->exp;
                                // dd($dataMisi->exp);
                                $dataArray = $data->toArray();
                                // dd($dataArray);
                                $tambahhitorypoin = HistoryTambahPoin::create($dataArray);
                                if($tambahhitorypoin){
                                    $datatambahpoin = Historytambahpoin::where('user_id', $userId)->where('misi_id', $dataMisi->id)->where('tanggal', $sekarang)->first();

                                    $level = Level::where('user_id', $userId)->first();
                                    // dd($level->exp+$datatambahpoin->jumlahexp);
                                  $updatelevel =   $level->update(['exp'=>$level->exp+$datatambahpoin->jumlahexp ]);
                                //   if($updatelevel){
                                    $poin = Poin::where('user_id', $userId)->first();
                                    $poin->update(['poin'=> $poin->poin+$datatambahpoin->jumlahpoin]);

                                //     dd('berhaso;');
                                //   }else{
                                //     dd('gaga');
                                //   }
                                    // dd($poin);

                                }else{
                                    dd('data gagal di tambahkan');
                                }
                                }
///////////////////////////////////////////////////////////////////////////////////

                }else{
                    // bagian untuk menajalanan sistem misi
                //    dd('data tidak ada') ;
                    $ListdataMisi = Misi::all()->first();
                    if ($ListdataMisi->jenis === "soal") {
                        // $today = date('Y-m-d');
                        // dd($sekarang);
                        $dataHistoryUjian=Historyujian::where('waktu', $sekarang)->where('user_id', $userId)->get();
                        $periksanilai = false;
                        foreach($dataHistoryUjian as $data){
                            if ($data->nilai >= $ListdataMisi->target){
                                $periksanilai = true;
                                break;
                            }
                        }
                        if($periksanilai){
                            $data = [
                                'misi_id' => $ListdataMisi->id,
                                'user_id' => $userId,
                                'tanggal' => $sekarang,
                                'poin' => $ListdataMisi->poin,
                                'exp' => $ListdataMisi->exp,
                            ];
                            HistoryMisi::create($data);
                        }else{
                            // dd('dataTidak tersedia');
                            // dd($sekarang);
                        }

                    }else{
                        dd('INI MISINYA JENIS BACA MATERI');
                    }
                }

                return view('pengguna.dashboard',compact('userId','datalainnya','datapengguna','totalBenar', 'totalSalah','jumlahSoal','levelPengguna','sisaBagi','persentase', 'ListdataMisi'));
            } else {
                return redirect('/Profilepengguna/create');
            }
        } else {
            return redirect('/login');
        }
    }
    public function peringkat(){
        $namepage = 'Dashboard';
        $userId = Auth::id();
        $userDataPeringkat = Users::with('datalainnya','datapengguna', 'hasilujian', 'level','poin')
        ->where('role', 'pengguna')
        ->get();
        $hasil = [];
        $nomor = 1; // Variabel untuk nomor indeks

        foreach($userDataPeringkat as $data) {
            $benar = $data->hasilujian->benar;
            $salah = $data->hasilujian->salah;
            $totalUjian = $benar + $salah;
            $persentase = ($benar / $totalUjian) * 100;

            $hasil[] = [
                'no' => 1, // Menggunakan nomor dan kemudian menambahkannya
                'foto' => 2,
                'username' => $data->datapengguna->nama,
                'level' => $data->level->exp/1200,
                'persentase' => $persentase,
                'poin' => $data->poin->poin
            ];
        }

        // Sekarang, $hasil akan berisi nomor (indeks) yang berurutan pada setiap elemen.

        return view('pengguna.peringkat',compact('namepage','userId','hasil'));
    }

    public function getDataPeringkat(){
        $userData = Users::with('datalainnya', 'hasilujian', 'level','poin')
        ->where('role', 'pengguna')
        ->get();
       return response()->json($userData);
    }
}