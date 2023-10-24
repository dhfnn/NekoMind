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
        $namepage = 'Materi';
        return view('more.tambahsoal', compact('namepage', 'ujianId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi request sesuai kebutuhan Anda
        // $validatedData = $request->validate([
        //     'pertanyaan.*' => 'required',
        //     'opsi.*' => 'required',
        //     'jawaban.*' => 'required',
        // ]);
    //     for ($i = 0; $i < count($request->pertanyaan); $i++) {

        $opsiString = implode(', ', $request->opsi);

        // Kemudian, Anda dapat mengatur data seperti ini
        $data['pertanyaan'] = $request->pertanyaan;
        $data['opsi'] = $opsiString;
        $data['jawaban'] = $request->jawaban;
        $data['ujian_id'] = $request->ujianid;

        $addData = soal::create($data);
        return redirect('Pelajaran');

    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
