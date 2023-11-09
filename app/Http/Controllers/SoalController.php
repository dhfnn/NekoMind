<?php

namespace App\Http\Controllers;

use App\Models\soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {
        $ujianId = $request->input('id');
        $type = $request->input('type');
        if($type === 'QUIZ'){
            $jumlahSoal = '10';
        }elseif($type === 'UJIAN'){
            $jumlahSoal = '40';
        }elseif($type === 'LATIHAN'){
            $jumlahSoal = '20';
        }elseif($type === 'TRYOUT'){
            $jumlahSoal = '40';
        }
        $namepage = 'Materi';
        return view('more.tambahsoal', compact('namepage', 'ujianId', 'jumlahSoal', 'type'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jumlahSoal = 0;
        $type = $request->type;
        // dd($type);
        if($type === 'QUIZ'){
            $jumlahSoal = '10';
        }elseif($type === 'UJIAN'){
            $jumlahSoal = '40';
        }elseif($type === 'LATIHAN'){
            $jumlahSoal = '20';
        }elseif($type === 'TRYOUT'){
            $jumlahSoal = '40';
        }
            for ($i = 1; $i <= $jumlahSoal; $i++) {

        $opsiString = implode(', ', $request->input("opsi{$i}"));

        $data = [
            'pertanyaan' => $request->input("pertanyaan{$i}"),
            'opsi' =>$opsiString,
            'jawaban' => $request->input("jawaban{$i}"),
            'ujian_id' => $request->input('ujianid'),
        ];

        soal::create($data);
        // dd($data);

    }
            return redirect('Pelajaran');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $urutan  = 1;
        $dataSoal = soal::where('ujian_id', $id)->get();
        $ujianId = $id;
        $namepage =  'Materi';
        return view('more.soal', compact('dataSoal','namepage' ,'urutan','ujianId'));
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
        $opsiString = implode(', ', $request->opsi);
     $data['ujian_id']= $request->ujianid;
     $data['opsi'] = $opsiString;
     $data['pertanyaan']= $request->pertanyaan;
     $data['jawaban']= $request->jawaban;

        soal::where('id', $id)->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        soal::where('ujian_id', $id)->delete();
        return redirect('Pelajaran');
    }
}
