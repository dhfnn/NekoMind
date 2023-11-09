<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\MateriModel;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class materiPengguna extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = auth()->id();

        $selectedKelas = $request->input('kelas');

        $dataPelajaran = Pelajaran::where('jenis', 'pelajaran');
        if ($selectedKelas) {
            $dataPelajaran->where('id_kelas', $selectedKelas);
        }
        $dataPelajaran = $dataPelajaran->get();

        $dataUTBK = Pelajaran::where('jenis', 'utbk');
        if ($selectedKelas) {
            $dataUTBK->where('id_kelas', $selectedKelas);
        }
        $dataUTBK = $dataUTBK->get();

        return view('pengguna.materi', compact('dataPelajaran', 'userId', 'dataUTBK'));
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
    public function show(Request $request, string $id)
    {
        // Ambil ID bab yang dipilih dari query string
        $selectedBab = $request->input('bab');

        // Inisialisasi variabel $idBab
        $idBab = null;

        // Jika ada ID bab yang dipilih, gunakan ID tersebut
        if ($selectedBab) {
            $idBab = $selectedBab;
        }


        // Ambil data materi sesuai dengan ID bab yang dipilih
        $materi = MateriModel::where('id_bab', $idBab)->first();

        // Ambil data pelajaran
        $pelajaran = Pelajaran::where('id', $id)->first();

        // Ambil data daftar bab yang mungkin digunakan dalam tampilan
        $dataBab = Bab::where('id_pelajaran', $id)->get();
        return  view('pengguna.materi-isi', compact('pelajaran','dataBab','materi','idBab'));
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
