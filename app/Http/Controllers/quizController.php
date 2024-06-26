<?php

namespace App\Http\Controllers;

use App\Models\hasilujian;
use App\Models\Historyujian;
use App\Models\Level;
use App\Models\Poin;
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
        $tanggal = now()->setTimezone('Asia/Jakarta')->toDateString();
        // $tanggal = now()->setTimezone('Asia/Jakarta')->format('Y-m-d H');


        // $hariini = $tanggal;
        $userData = Auth::user();
        $user_id =$userData->id;
        $dataUjianid = session('dataUjianid');
        $data['user_id'] = $user_id;
        $data['ujian_id'] = $dataUjianid;
        $data['benar']= $request->benar;
        $data['salah'] = $request->salah;
        $data['nilai']= $request->nilai;

        $data['waktu']= $tanggal;
        if ($hai = hasilujian::where('user_id', $user_id)->where('waktu' ,$tanggal)->where('ujian_id', $dataUjianid)->first()) {
            $tambahhistory  = Historyujian::create($data);
            $benar = $tambahhistory->benar;
            $ujianid= $tambahhistory->ujian_id;
            $ujiannya = Ujian::where('id' ,$ujianid)->first();
            $jenis = $ujiannya->jenis;
            $userId = Auth::user()->id;
            if ($jenis = 'QUIZ') {
                $poin = Poin::where('user_id', $userId)->first();
                $poin->update(['poin' => $poin->poin + ($benar*10)]);

                $level = Level::where('user_id' ,$userId)->first();
                $level->update(['exp'=> $level->exp +  ($benar*5)]);
            }elseif ($jenis = 'LATIHAN') {
                $poin = Poin::where('user_id', $userId)->first();
                $poin->update(['poin' => $poin->poin +  ($benar*10)]);

                $level = Level::where('user_id' ,$userId)->first();
                $level->update(['exp'=> $level->exp + ($benar*5)]);
            }elseif ($jenis = 'UJIAN') {
                $poin = Poin::where('user_id', $userId)->first();
                $poin->update(['poin' => $poin->poin + ($benar*10)]);

                $level = Level::where('user_id' ,$userId)->first();
                $level->update(['exp'=> $level->exp + ($benar*5)]);
            }else{
                $poin = Poin::where('user_id', $userId)->first();
                $poin->update(['poin' => $poin->poin + ($benar*10)]);

                $level = Level::where('user_id' ,$userId)->first();
                $level->update(['exp'=> $level->exp + ($benar*5)]);
            }
            // dd($hai);
        }else{
            // dd('tidak ada');
            $tambah = hasilujian::create($data);
            $tambahhistory  = Historyujian::create($data);
            $benar = $tambahhistory->benar;

            $ujianid= $tambahhistory->ujian_id;
            $ujiannya = Ujian::where('id' ,$ujianid)->first();
            $jenis = $ujiannya->jenis;
            $userId = Auth::user()->id;
            if ($jenis = 'QUIZ') {
                $poin = Poin::where('user_id', $userId)->first();
                $poin->update(['poin' => $poin->poin + ($benar*15)]);

                $level = Level::where('user_id' ,$userId)->first();
                $level->update(['exp'=> $level->exp + ($benar*10)]);
            }elseif ($jenis = 'LATIHAN') {
                $poin = Poin::where('user_id', $userId)->first();
                $poin->update(['poin' => $poin->poin + ($benar*15)]);

                $level = Level::where('user_id' ,$userId)->first();
                $level->update(['exp'=> $level->exp + ($benar*10)]);
            }elseif ($jenis = 'UJIAN') {
                $poin = Poin::where('user_id', $userId)->first();
                $poin->update(['poin' => $poin->poin + ($benar*15)]);

                $level = Level::where('user_id' ,$userId)->first();
                $level->update(['exp'=> $level->exp + ($benar*10)]);
            }else{
                $poin = Poin::where('user_id', $userId)->first();
                $poin->update(['poin' => $poin->poin + ($benar*15)]);

                $level = Level::where('user_id' ,$userId)->first();
                $level->update(['exp'=> $level->exp + ($benar*10)]);
            }

        }
        return redirect('Soal/' . $dataUjianid);

    }
    public function tambahUjian(Request $request){
        $data['judul'] =$request->judul;
        $data['id_kelas'] = $request->idkelas;
        $data['jenis'] = $request->jenis;
        if ($request->jenis === 'QUIZ') {
            $data['waktu'] = '10';
        }elseif ($request->jenis === 'LATIHAN') {
            $data['waktu'] = '30';
        }elseif($request->jenis === 'UJIAN'){
            $data['waktu'] = '60';
        }elseif($request->jenis === 'TRYOUT'){
            $data['waktu'] = '120';
        }

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

        $jenis =  Ujian::where('id', $id)->first();
        $jeni = $jenis->id;
        $data['judul'] =$request->judul;
        $data['id_kelas'] = $request->idkelas;

        $data['jenis'] = $jeni;

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
        Historyujian::where('ujian_id', $id)->delete();
        hasilujian::where('ujian_id', $id)->delete();
        Ujian::where('id' ,$id)->delete();

        return redirect()->back();
    }
}
