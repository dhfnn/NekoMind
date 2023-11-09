<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\users;
use App\Models\Datalainnya;
use App\Models\Datapengguna;
use App\Models\hasilujian;
use App\Models\Historyadmin;
use App\Models\Level;
use App\Models\Poin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Konfigdata extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datapengguna = datapengguna::where('user_id', $id)->first();
        $datalainnya = datalainnya::where('user_id', $id)->first();
        return view('more.datapengguna');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return '3499';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        // return '123';
        $request->validate([
            'nama' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|min:11',
            'namasekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'target' => 'required',
            // 'checkboxtp[]' => 'required',
            'motto' => 'required',
        ], [
            'nama.required' => ' Nama harus diisi.',
            'tanggallahir.required' => ' Tanggal Lahir harus diisi.',
            'jeniskelamin.required' => ' Jenis Kelamin harus diisi.',
            'kota.required' => ' Kota harus diisi.',
            'alamat.required' => ' Alamat harus diisi.',
            'nohp.required' => ' Nomor HP harus diisi.',
            'nohp.min' => '  min-11',
            'namasekolah.required' => ' Nama Sekolah harus diisi.',
            'kelas.required' => ' Kelas harus diisi.',
            'jurusan.required' => ' Jurusan harus diisi.',
            'target.required' => ' Target harus diisi.',
            // 'checkboxtp[].required' => 'Minimal satu opsi harus dipilih.',
            'motto.required' => ' Motto harus diisi.',
        ]);
        $user_id = $request->id;

        // Mencari pengguna dengan ID yang sesuai dengan user_id
        $user = users::where('id', $user_id)->first();

        $dataP['user_id']=$request->user_id;
        $dataP['nama']=$request->nama;
        $dataP['tanggallahir']=$request->tanggallahir;
        $dataP['jeniskelamin']=$request->jeniskelamin;
        $dataP['kota']=$request->kota;
        $dataP['alamat']=$request->alamat;
        $dataP['nohp']=$request->nohp;

        $dataL['user_id']=$request->user_id;
        $dataL['namasekolah'] = $request->namasekolah;
        $dataL['kelas'] = $request->kelas;
        $dataL['jurusan'] = $request->jurusan;
        $dataL['target'] = $request->target;
        $dataL['pelajaranfav'] = 'Sejarah';
        $dataL['motto'] = $request->motto;

        $createdataP = Datapengguna::create($dataP);
        $createdataL = Datalainnya::create($dataL);

        if($createdataP && $createdataL){
            return redirect('data/' . $user_id);
        }else{
            return 'gagal';
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $namepage = 'Data';
        $userData = users::with('Datapengguna','Datalainnya')->find($id);

        // $mergedData = [
        //     'datapengguna' => $userData->datapengguna,
        //     'datalainnya' => $userData->datalainnya,
        // ];

        return view('more.edittmp',compact('userData','namepage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataKota = Kota::all();
        $userData = users::with('Datapengguna','Datalainnya')->find($id);
        // $data = users::where('id', $id)->first();
        $dataPengguna = Datapengguna::where('user_id', $id)->first();
        $dataLainnya = Datalainnya::where('user_id', $id)->first();
        // return view('component.edit',compact('userData','dataKota') );
                    if ($dataLainnya &&  $dataPengguna) {
                $peringatan="";
                return view('component.edit',compact('userData','peringatan','dataLainnya','dataPengguna','dataKota'));
            } else {
                $peringatan="DATA PENGGUNA YANG INGIN ANDA EDIT MASIH KOSONG !!";

                return view('component.tambah',compact('userData','peringatan','dataLainnya','dataPengguna','dataKota'));

            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = users::where('id', $id)->first();


        $datapengguna = Datapengguna::where('user_id', $id)->first();
        $dataP['user_id'] = $data->id;
        $dataP['nama'] = $request->nama;
        $dataP['tanggallahir'] = $request->tanggallahir;
        $dataP['jeniskelamin'] = $request->jeniskelamin;
        if ($request->has('kota') && !empty($request->kota)) {
            $dataP['kota'] = $request->kota;
        } else {
            $dataP['kota'] = $datapengguna->kota;
        }
        $dataP['alamat'] = $request->alamat;
        $dataP['nohp'] = $request->nohp;



        $datalainnya = Datalainnya::where('user_id', $id)->first();
        $dataL['user_id'] = $data->id;
        if ($request->has('namasekolah') && !empty($request->namasekolah)) {
            $dataL['namasekolah'] = $request->namasekolah;
        } else {
            $dataL['namasekolah'] = $datalainnya->namasekolah;
        }
        $dataL['kelas'] = $request->kelas;
        $dataL['jurusan'] = $request->jurusan;
        $dataL['target'] = $request->target;
        $dataL['pelajaranfav'] = 'Matematika';
        $dataL['motto'] = $request->motto;

        // $updatedata =
         Datapengguna::where('user_id',$id)->update($dataP);
        // $updatedata2 =
        Datalainnya::where('user_id' , $id)->update($dataL);
        return redirect('data');


        // if ($updatedata && $updatedata2) {
        // } else {
        //     return 'gagal';
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // try {
        //     DB::beginTransaction();
        //     Datalainnya::where('user_id', $id)->delete();
        //     Datapengguna::where('user_id', $id)->delete();
        //     Users::find($id)->delete();

        //     DB::commit();
        //     return redirect('data');
        // } catch (\Exception $e) {
        //     DB::rollBack();
        // }
        $data1 =  Users::where('id' , $id)->first();
        $tanggal = now()->setTimezone('Asia/Jakarta')->toDateString();

        $idadmin = Auth::user()->id;
        $data2['user_id'] = $idadmin;
        $data2['isi'] = "Hapus Pengguna  ( {$data1->username} )";

        $data2['tanggal'] = $tanggal;
       $tambah =  Historyadmin::create($data2);
            if ($tambah) {
                Datalainnya::where('user_id', $id)->delete();
                hasilujian::where('user_id', $id)->delete();
                Level::where('user_id', $id)->delete();
                Poin::where('user_id', $id)->delete();
                Datapengguna::where('user_id', $id)->delete();
                Users::find($id)->delete();
            }
            return view('admin.data');
    }
}

// $dataUser->delete();
// Datapengguna::where('user_id',$id)->delete();
// Datalainnya::where('user_id', $id)->delete();