<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Historyujian;
use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\soal;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $namepage = 'Materi';

        $dataUjian = Ujian::with('soal')->get();


        $dataKelas = Kelas::all();
        foreach ($dataKelas as $kelas) {
            $jumlahMateri = DB::table('pelajaran')
                ->where('id_kelas', $kelas->id)
                ->count();
            $kelas->jumlahMateri = $jumlahMateri;
        }
        $history = Historyujian::with('users','ujian')
        ->has('users')
        ->has('ujian')
        ->orderBy('waktu', 'desc')
        ->get();
        // dd($history);
        return view('admin.pelajaran',compact('namepage','dataKelas','dataUjian','history'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }






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

        $tambah = Pelajaran::create($data);
        return redirect('Pelajaran/' . $request->id_kelas);
    } else {
        return redirect('Pelajaran/' . $request->id_kelas)->with('error', 'Data yang anda masuk sudah ada !!'); // Redirect dengan pesan error
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $dataPelajaran = Pelajaran::where('id_kelas', $id)->get();
        foreach ($dataPelajaran as $data) {
            $jumlahBab  = DB::table('bab')
            ->where('id_pelajaran' , $data->id)
            ->count();
            $data->jumlahBab = $jumlahBab;
        }
        $dataKelas = Kelas::all();
        $namepage = 'Materi';
        return view('more.daftarmateri',compact('kelas','dataKelas','dataPelajaran','namepage'));
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
    public function update(Request $request, $id)
    {
        $cek = Pelajaran::Where('id_semester', $request->id_semester)
        ->where('id_kelas', $request->id_kelas)
        // ->where('jenis', $request->jenis)
        ->where('namapelajaran', $request->namapelajaran)
        ->first();

        if (!$cek) {

            $pelajaran = Pelajaran::find($id);
            if (!$pelajaran) {
                return redirect()->route('daftarmateri.index')->with('error', 'Pelajaran tidak ditemukan.');
            }

            $pelajaran->id = $request->id;
            $pelajaran->id_semester = $request->id_semester;
            $pelajaran->id_kelas = $request->id_kelas;
            $pelajaran->namapelajaran = $request->namapelajaran;
            if ($request->namapelajaran == 'tps' || $request->namapelajaran == 'lindonesia' || $request->namapelajaran == 'linggris' || $request->namapelajaran == 'pm') {
                $pelajaran->jenis = 'utbk';
            } else {
                $pelajaran->jenis = 'pelajaran';
            }
            $pelajaran->save();
            return redirect('Pelajaran/' . $request->id_kelas);
        }else{
            return redirect('Pelajaran/' . $request->id_kelas)->with('error', 'Data yang anda ubah sama    !!');
        }



    }


    /**
     * Remove the specified resource from storage.
     */
public function destroy(string $id)
{
    // $pelajaran = Pelajaran::find($id);
    // if (!$pelajaran) {
    //     return redirect()->route('daftarmateri.index')->with('error', 'Pelajaran tidak ditemukan.');
    // }
    // $pelajaran->delete();
    // return redirect('Pelajaran/' . $request->id_kelas);
    $pelajaran = Pelajaran::find($id);

if ($pelajaran) {
    $id_pelajaran = $pelajaran->id;
    Bab::where('id_pelajaran', $id_pelajaran)->delete();
    $pelajaran->delete();
    return redirect()->back();

} else {
    // Tindakan jika pelajaran tidak ditemukan
    return 'gagal';
}
}
}
