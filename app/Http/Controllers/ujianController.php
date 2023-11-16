<?php

namespace App\Http\Controllers;

use App\Models\hasilujian;
use App\Models\Historyujian;
use App\Models\soal;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ujianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = Auth::id();
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
        // dd($jumlahSoal);
        $userId = auth()->id();
        $filterkelas = $request->query('kelas');
        $filterjenis = $request->query('jenis');
        $dataUjianQuery = Ujian::query();
        if (!empty($filterkelas)) {
            $dataUjianQuery->where('id_kelas', $filterkelas);
        }

        if (!empty($filterjenis)) {
            $dataUjianQuery->where('jenis', $filterjenis);
        }

        $dataUjian = $dataUjianQuery->get();
        // $totalSoal = 0;
        // foreach ($dataUjian as $ujian) {
        //     $totalSoal += soal::where('ujian_id', $ujian->id)->count();
        // }
        return view('pengguna.soal' , compact('userId','dataUjian' ,'filterkelas','filterjenis','totalBenar','totalSalah','jumlahSoal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userId = Auth::user()->id;
        $dataUjian = Ujian::find($id);
        $hasilujian =  hasilujian::where('ujian_id', $dataUjian->id)->where('user_id', $userId)->first();

        $historyujian = Historyujian::where('ujian_id', $dataUjian->id)
        ->where('user_id', $userId)
        ->orderBy('waktu', 'desc')
        ->take(5)
        ->get();

        // dd($historyujian);
        $jumlahSoal = soal::where('ujian_id' , $id)->count();

        return view('pengguna.praujian' ,compact('dataUjian','jumlahSoal','hasilujian','historyujian'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $history = Historyujian::where('id' ,$id)->first();
        $ujian_id = $history->ujian_id;
        $waktu = $history->waktu;


        if (hasilujian::where('ujian_id',$ujian_id)
                        ->where('waktu' ,$waktu)
                        ->exists())
        {
        hasilujian::where('ujian_id', $ujian_id)->delete();
        Historyujian::where('id', $id)->delete();
        }else {
            Historyujian::where('id', $id)->delete();

        }
    }
}
