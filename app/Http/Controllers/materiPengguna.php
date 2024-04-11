<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\users;
use App\Models\dibaca;
use App\Models\NamaModel;
use App\Models\Pelajaran;
use App\Models\Materibaca;
use App\Models\MateriModel;
use App\Models\Chatpengguna;
use App\Models\GambarMateri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class materiPengguna extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $userId = auth()->id();
        $usersData  = users::where('id', $userId)->first();
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

        return view('pengguna.materi', compact('dataPelajaran', 'userId', 'dataUTBK','datachat', 'userdata','usersData'));
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
        $userId = Auth::user()->id;
        $data['id_bab'] = $request->babid;
        $data['user_id'] = $userId;
        // dd($data);
Materibaca::create($data);
return redirect(url()->previous(2));

        // dd($data);

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {









        $idb = $request->input('bab');
        $ids = $request->input('semester');
        $records = NamaModel::all();



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
$babM = Bab::where('id' ,$idb)->first();
$materi = MateriModel::where('id' ,$idb)->first();
$tes = Materibaca::all();
$userId = Auth::user()->id;
$kec = 'tidak';
if ($babM) {
    $cek = Materibaca::where('id_bab', $babM->id)->where('user_id', $userId)->first();

    if ($tes->isNotEmpty()) {
        if ($cek) {
            $kec = 'ada';
        }else{
            $kec = 'tidak';
        }

    } else {
        $kec = 'tidak';

    }
}

// dd($kec);





return  view('pengguna.materi-isi', compact('pelajaran','dataBab','babM', 'idb','ids','kec','materi'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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
