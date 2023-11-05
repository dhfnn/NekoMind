<?php

namespace App\Http\Controllers;

use App\Models\hasilujian;
use App\Models\Historyujian;
use App\Models\soal;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class quizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        $hariini = date('Y-m-d');
        $userData = Auth::user();
        $user_id =$userData->id;
        $dataUjianid = session('dataUjianid');
        $data['user_id'] = $user_id;
        $data['ujian_id'] = $dataUjianid;
        $data['benar']= $request->benar;
        $data['salah'] = $request->salah;
        $data['nilai']= $request->nilai;
        $data['waktu']= $hariini;
        if (hasilujian::where('user_id', $user_id)->where('waktu' ,$hariini)->where('ujian_id', $user_id)->first()) {
            $tambahhistory  = Historyujian::create($data);
        }else{
            $tambah = hasilujian::create($data);
        }
    }
    public function tambahUjian(Request $request){
        $data['judul'] =$request->judul;
        $data['waktu'] = $request->waktu;
        $data['jenis'] = $request->jenis;

        Ujian::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $halo = 'hai';
        $UjianData = Ujian::where('id', $id)->first();
        $dataUjianid = $id;
        session(['dataUjianid' => $dataUjianid]);
        return view('more.RuangUjian' , compact('UjianData'));
    }
    public function AmbilData(){
        $dataUjianid = session('dataUjianid');
        $soals = soal::where('ujian_id' , $dataUjianid)->get();
        return response()->json($soals);
    }
    public function AmbilWaktu(){
        $dataUjianid = session('dataUjianid');

        $waktuu = Ujian::where('id',$dataUjianid)->first();

        if($waktuu) {
            return response()->json(['waktu' =>$waktuu->waktu]);
        }else{
            return response()->json(['error' => 'Data ujian tidak ditemukan'], 404);
        }
    }

    public function simpanNilai(Request $request){
        $data = $request->json()->all();
        $jawabanBenar = $data['jawabanBenar'];
        $jawabanSalah = $data['jawabanSalah'];
        $skorTotal = $data['skorTotal'];
        $persentase = $data['persentase'];
        $response = ['message' => 'Data berhasil diterima dan diproses'];
        return response()->json($response);
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
        $data['judul'] =$request->judul;
        $data['waktu'] = $request->waktu;
        $data['jenis'] = $request->jenis;

        Ujian::where('id', $id)->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        hasilujian::where('ujian_id', $id)->delete();
        soal::where('ujian_id' ,$id)->delete();
        Ujian::where('id' ,$id)->delete();

        return redirect()->back();
    }
}
