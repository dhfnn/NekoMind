<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class materiPengguna extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();
        $dataPelajaran = Pelajaran::where('jenis','pelajaran')->get();
        $dataUTBK = Pelajaran::where('jenis','utbk')->get();
        return view('pengguna.materi' ,compact('dataPelajaran','userId','dataUTBK'));
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
        $pelajaran = Pelajaran::where('id', $id)->first();
        $dataBab = Bab::where('id_pelajaran', $id)->get();
        return  view('pengguna.materi-isi', compact('pelajaran','dataBab'));
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