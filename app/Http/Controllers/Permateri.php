<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Kelas;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class Permateri extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('hai');
    }

    public function store(Request $request)
    {
        // Mencari data yang cocok berdasarkan kolom id_pelajaran, judul, dan subab
        $cek = Bab::where('id_pelajaran', $request->id_pelajaran)
                   ->where('judul', $request->judul)
                   ->where('subab', $request->subab)
                   ->first();

        if (!$cek) {
            // Menemukan data terakhir berdasarkan id_pelajaran
            $dataTerakhir = Bab::where('id_pelajaran', $request->id_pelajaran)
                               ->orderBy('subab', 'desc')
                               ->first();

            // Membuat data baru
            $data = [
                'id_pelajaran' => $request->id_pelajaran,
                'judul' => $request->judul,
                'subab' => $dataTerakhir ? $dataTerakhir->subab + 1 : 1,
            ];

            // Menyimpan data baru ke dalam tabel Bab
            Bab::create($data);

            return redirect('permateri/' . $request->id_pelajaran);
        } else {
            return redirect('permateri/' . $request->id_pelajaran)->with('error', 'Data yang Anda masukkan sudah ada!!');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::where('kelas', $id)->first();
        $pelajaran = Pelajaran::where('id', $id)->first();
        $babs = Bab::where('id_pelajaran', $id)->get();

        if (!$pelajaran) {
            // Handle ketika data tidak ditemukan
            return 'yoo'; // atau tampilkan pesan kesalahan lainnya
        }
            $namepage = 'Materi';
        return view('more.permateri',compact('namepage','pelajaran','kelas','babs'));
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
        $cek = Bab::where('judul',$request->judul)
        ->where('subab',$request->subab)
        ->first();

        if (!$cek) {
            $bab = Bab::find($id);
            if (!$cek) {
                return 'data tidak di temukan';
            }
            $bab->id= $request->id;
            $bab->id_pelajaran= $request->id_pelajaran;
            $bab->judul= $request->judul;
            $bab->subab= $request->subab;

            $bab->save();
            return dd($bab);

        }else {
            return 'gagal';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
