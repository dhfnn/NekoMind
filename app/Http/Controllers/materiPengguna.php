<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Chatpengguna;
use App\Models\MateriModel;
use App\Models\Pelajaran;
use App\Models\users;
use Illuminate\Http\Request;

class materiPengguna extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = auth()->id();
        $userdata = users::where('id', $userId)->first();
        $datachat=  Chatpengguna::with('user')->get();

        $selectedKelas = $request->input('kelas');
        $semester = '1';
        $dataPelajaran = Pelajaran::where('jenis', 'pelajaran')->where('id_semester', $semester);
        if ($selectedKelas) {
            $dataPelajaran->where('id_kelas', $selectedKelas);
        }
        $dataPelajaran = $dataPelajaran->get();

        $dataUTBK = Pelajaran::where('jenis', 'utbk');
        if ($selectedKelas) {
            $dataUTBK->where('id_kelas', $selectedKelas);
        }
        $dataUTBK = $dataUTBK->get();

        return view('pengguna.materi', compact('dataPelajaran', 'userId', 'dataUTBK','datachat', 'userdata'));
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
        $idb = $request->input('bab');
        $ids = $request->input('semester');

if (empty($ids)) {
    $ids = 1;
}

if ($ids == 1) {
    $pelajaran = Pelajaran::where('id', $id)->where('id_semester', $ids)->first();
    $dataBab = Bab::where('id_pelajaran', $id)->get();
    // dd($dataBab);

}

if ($ids == 2) {
    $u = Pelajaran::where('id', $id)->where('id_semester', '1')->first();
    $pelajaran = Pelajaran::where('namapelajaran', $u->namapelajaran)->where('id_kelas', $u->id_kelas)->where('id_semester', '2')->first();
    $idp = $pelajaran->id;
    $dataBab = Bab::where('id_pelajaran', $idp)->get();
}
    $materi = MateriModel::where('id_bab' ,$idb)->first();
        return  view('pengguna.materi-isi', compact('pelajaran','dataBab','materi', 'idb','ids'));
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
