<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pelajaran;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class Materi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $dataKelas = Kelas::all();
        $namepage = 'Materi';
        return view('admin.pelajaran',compact('namepage','dataKelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {   $id_kelas=$request->input('id_kelas');
    //     // dd($request->all());
    //     $data['id_semester'] = $request->id_semester;
    //     $data['id_kelas'] = $request->id_kelas;
    //     $data['namapelajaran'] = $request->namapelajaran;

    //     if ($request->namapelajaran == 'tps' || $request->namapelajaran == 'lindonesia' || $request->namapelajaran == 'linggris' || $request->namapelajaran == 'pm') {
    //         $data['jenis'] = 'utbk';
    //     } else {
    //         $data['jenis'] = 'pelajaran';
    //     }

    //     // dd($data);


    //     $tambah = Pelajaran::create($data);

    
  

    // }
    public function store(Request $request)
{
    // Validasi untuk memeriksa apakah data dengan kombinasi yang sama sudah ada
    $cek = Pelajaran::where('id_semester', $request->id_semester)
        ->where('id_kelas', $request->id_kelas)
        // ->where('jenis', $request->jenis)
        ->where('namapelajaran', $request->namapelajaran)
        ->first();

    if (!$cek) {
        $data['id_semester'] = $request->id_semester;
        $data['id_kelas'] = $request->id_kelas;
        $data['namapelajaran'] = $request->namapelajaran;

        if ($request->namapelajaran == 'tps' || $request->namapelajaran == 'lindonesia' || $request->namapelajaran == 'linggris' || $request->namapelajaran == 'pm') {
            $data['jenis'] = 'utbk';
        } else {
            $data['jenis'] = 'pelajaran';
        }

        // Simpan data jika tidak ada duplikasi
        $tambah = Pelajaran::create($data);
    } else {
        return redirect('Materi/' . $request->id_kelas)->with('error', 'Data yang anda masuk sudah ada !!'); // Redirect dengan pesan error
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $dataKelas = Kelas::all();
        $namepage = 'Materi';
        return view('more.daftarmateri',compact('kelas','dataKelas','namepage'));
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
