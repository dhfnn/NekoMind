<?php

namespace App\Http\Controllers;

use App\Models\Datalainnya;
use App\Models\Datapengguna;
use App\Models\Kota;
use App\Models\sekolah;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class data extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $id = auth()->user()->id;

        $namepage = 'Data';
        $userData = users::with('Datapengguna','Datalainnya')->get();

        return view('admin.data',compact('namepage','userData'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('more.tambahpengguna');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email|unique:users,email',
            'password' => 'required|min:6',
            'username'=> 'required',
            'role'=>'required'
        ],
        [
            'email.required'=>'Email belum diisi',
            'email.unique'=>'Email sudah ada',
            'password.required'=>'password belum diisi',
            'password.min'=>'password minimal 6 karakter',
            'username.required'=>'username belum diisi',
            'role.required'=>'role belum disi'

        ]);
        $data['username'] = $request->username;
        $data['email']    = $request->email;
        // $data['password'] = Hash:make($request->password);
        $data['password'] =Hash::make($request->password);
        $data['role']     = $request->role;
        users::create($data);
        return redirect('admin/dashboard');
    }
    public function show(string $id)
    {
        // $userData = users::with('Datapengguna','Datalainnya')->get();



    }
    // public function editA(string $id){


    // }

    public function edit(Request $request, $id)
    {

            $data = users::where('id', $id)->first();
            $dataKota = Kota::all();
            $datapengguna = datapengguna::where('user_id', $id)->first();
            $datalainnya = datalainnya::where('user_id', $id)->first();

            $data2 = Datapengguna::where('user_id', $id)->first();
            $data3 = Datalainnya::where('user_id', $id)->first();
            $userData = users::with('Datapengguna','Datalainnya')->get();
            return view('more.editpengguna', compact('data','data2','data3','datalainnya','datapengguna','dataKota'));

            // if ($datalainnya &&  $datapengguna) {
            //     $peringatan="";
            //     return view('component.edit',compact('data','data2','data3','peringatan','datalainnya','datapengguna','dataKota'));
            // } else {
            //     $peringatan="DATA PENGGUNA YANG INGIN ANDA EDIT MASIH KOSONG !!";

            //     return view('component.tambah',compact('data','data2','data3','peringatan','datalainnya','datapengguna','dataKota'));

            // }

        }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $dataC = users::where('id', $id)->first();

            $data3p = users::where('id', $id)->first();
            $data3['username'] = $request->username;
            $data3['role'] = $data3p->role;
            $data3['email'] = $request->email;
            if ($request->has('password') && !empty($request->password)) {
                $data3['password'] = hash::make($request->password);
            } else {
                $data3['password'] = $data3p->password;
            }
            $updatedata3 = users::where('id', $id)->update($data3);
            if ($updatedata3) {
                return redirect('data');
            } else {
                return 'gagal';
            }
            // batas table akun --------------------------------------------------------------



            $dataA = datapengguna::where('user_id', $id)->first();
        $dataB = datalainnya::where('user_id', $id)->first();

        if ($dataA &&  $dataB) {

        } else {
            $request->validate([
                'nama'=>'required',
                'tanggallahir'=>'required',
                'jeniskelamin'=>'required',
                'kota'=>'required',
                'alamat'=>'required',
                'nohp'=>'required',
                'namasekolah'=>'required',
                'kelas'=>'required',
                'jurusan'=>'required',
                'target'=>'required',
                // 'checkboxtp[]'=>'required',
                'motto'=> 'required',
            ]);
        }

        $datap = Datapengguna::where('user_id', $id)->first();
        $data['user_id'] = $dataC->id;
        $data['nama'] = $request->nama;
        $data['tanggallahir'] = $request->tanggallahir;
        $data['jeniskelamin'] = $request->jeniskelamin;
        if ($request->has('kota') && !empty($request->kota)) {
            $data['kota'] = $request->kota;
        } else {
            $data['kota'] = $datap->kota;
        }
        $data['alamat'] = $request->alamat;
        $data['nohp'] = $request->nohp;



        $data2p = Datalainnya::where('user_id', $id)->first();
        $data2['user_id'] = $dataC->id;
        if ($request->has('namasekolah') && !empty($request->namasekolah)) {
            $data2['namasekolah'] = $request->namasekolah;
        } else {
            $data2['namasekolah'] = $data2p->namasekolah;
        }
        $data2['kelas'] = $request->kelas;
        $data2['jurusan'] = $request->jurusan;
        $data2['target'] = $request->target;
        $data2['pelajaranfav'] = 'Matematika';
        $data2['motto'] = $request->motto;

        if ($dataA &&  $dataB) {
            $updatedata = Datapengguna::where('user_id',$id)->update($data);
            $updatedata2 = Datalainnya::where('user_id' , $id)->update($data2);
        } else {
            $updatedata = Datapengguna::where('user_id',$id)->create($data);
            $updatedata2 = Datalainnya::where('user_id' , $id)->create($data2);
        }
        if ($updatedata && $updatedata2) {
            return redirect()->route('nama_rute_yang_diinginkan');
        } else {
            return redirect('data');
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
