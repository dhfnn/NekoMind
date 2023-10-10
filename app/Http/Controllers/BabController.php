<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\MateriModel;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;

class BabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        return redirect()->back();
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
    public function store(Request $request)
    {
        $data['id_bab'] = $request->id_bab;
        $data['isi_materi'] =$request->isi_materi;
        // dd($data);
        $tambahdata = MateriModel::create($data);

        // if($tambahdata ){
            return redirect('Bab/' . $request->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $namepage = 'Materi';
        $bab = Bab::where('id',$id)->first();
        $materi = MateriModel::where('id_bab',$id)->first();
        $materiList = MateriModel::where('id_bab', $id)->get();
        return view('more.bab', compact('namepage','bab','materiList','materi'));
    }

    public function showdua(String $id){
        
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
        $dataB = Bab::where('id' , $id)->first();
        $data['id'] = $dataB->id;
        $data['id_pelajaran'] = $dataB->id_pelajaran;
        $data['judul'] = $request->judul;
        $data['subab'] = $request->subab;

        $dataM = MateriModel::where('id_bab', $id)->first();
        if($dataM){
            $data2['id'] = $dataM->id;
            $data2['id_bab'] = $dataB->id;
            $data2['isi_materi'] = $request->isi_materi;
            $updatedata2 = MateriModel::where('id_bab' ,$id)->update($data2);

        }
        $updatedata = Bab::where('id' ,$id)->update($data);
            return  redirect('Bab/' .$dataB->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletedata2 = MateriModel::where('id_bab' , $id)->delete();
        $deletedata = Bab::where('id' , $id)->delete();


        if($deletedata && $deletedata2){
            return redirect()->back();
        }else{
            return ' gagal';
        }


    }
}
