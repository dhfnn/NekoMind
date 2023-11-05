<?php

namespace App\Http\Controllers;

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
        $userId = auth()->id();
        $filterkelas = $request->query('kelas');
        $filterjenis = $request->query('jenis');
        $dataUjianQuery = Ujian::query();

        if (!empty($filterkelas)) {
            $dataUjianQuery->where('kelas_id', $filterkelas);
        }

        if (!empty($filterjenis)) {
            $dataUjianQuery->where('jenis', $filterjenis);
        }

        $dataUjian = $dataUjianQuery->get();
        $totalSoal = 0;
        foreach ($dataUjian as $ujian) {
            $totalSoal += Soal::where('ujian_id', $ujian->id)->count();
        }
        return view('pengguna.soal' , compact('userId','dataUjian' ,'filterkelas','filterjenis','totalSoal','totalBenar','totalSalah','jumlahSoal'));
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
        $dataUjian = Ujian::find($id);
        $jumlahSoal = soal::where('ujian_id' , $id)->count();

        return view('pengguna.praujian' ,compact('dataUjian','jumlahSoal'));
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
        //
    }
}
