<?php

namespace App\Http\Controllers;

use App\Models\Datalainnya;
use App\Models\Datapengguna;
use App\Models\Historyadmin;
use App\Models\Kota;
use App\Models\Level;
use App\Models\Poin;
use App\Models\sekolah;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class data extends Controller
{
    /**
     * Display a listing of the resource.
     */
        // $userData =  users::with('Datapengguna','Datalainnya')->get();

    public function index(Request $request)
    {
        $namepage = 'Data';
        $userData = new users;
        if($request->get('cari')){
            $userData = $userData->where('username','LIKE', $request->get('cari'). '%')->orWhere('email','LIKE', $request->get('cari'). '%');
        }
        $userData = $userData->get();
        $userId = Auth::user()->id;
        return view('admin.data',compact('namepage','userData','request','userId'));

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
        $tanggal = now()->setTimezone('Asia/Jakarta')->toDateString();
        $data['username'] = $request->username;
        $data['email']    = $request->email;
        // $data['password'] = Hash:make($request->password);
        $data['password'] =Hash::make($request->password);
        $data['role']     = $request->role;
        $data['bergabung']= $tanggal;
        $data['foto']= $data['foto'] = ($request->role === 'admin') ? 'admin' : 'pplvl1';
        $datatambah = users::create($data);

        $idadmin = Auth::user()->id;

        if ($datatambah) {
            $data2['user_id'] = $idadmin;
            $data2['isi'] = "Tambah Pengguna Baru ( {$datatambah->username} )";

            $data2['tanggal'] = $tanggal;
            Historyadmin::create($data2);
        }
        if ($request->role === 'pengguna') {
            $data1['user_id'] = $datatambah->id;
            $data1['poin'] = '0';
            Poin::create($data1);

            $data5['user_id'] = $datatambah->id;
            $data5['exp'] = '1200';
            Level::create($data5);
        }

        return redirect('data');
    }
    public function show(string $id)
    {
        $namepage = 'Data';
        $userData = users::with('Datapengguna','Datalainnya')->find($id);
        $userId = Auth::user()->id;

        // $mergedData = [
        //     'datapengguna' => $userData->datapengguna,
        //     'datalainnya' => $userData->datalainnya,
        // ];

        return view('more.datapengguna',compact('userData','namepage','userId'));




    }
    // public function editA(string $id){


    // }

    public function edit(Request $request, $id)
    {

            $data = users::where('id', $id)->first();
            $dataKota = Kota::all();
            $userData = users::with('Datapengguna','Datalainnya')->get();
            return view('more.editpengguna', compact('data','dataKota','userData'));

        }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tanggal = now()->setTimezone('Asia/Jakarta')->toDateString();

            $dataC = users::where('id', $id)->first();

            $data3p = users::where('id', $id)->first();
            $data3['username'] = $request->username;
            $data3['role'] = $data3p->role;
            $data3['email'] = $request->email;
            if ($request->has('password') && !empty($request->password)) {
                if (strlen($request->password) >= 8 && $request->password == $request->konfirmasi) {
                    // Password sesuai, hash dan simpan
                    $data3['password'] = Hash::make($request->password);
                } elseif (strlen($request->password) < 8) {
                    // Tampilkan pesan error jika panjang password kurang dari 8 huruf
                    return redirect()->back()->with('error', 'Password harus terdiri dari minimal 8 huruf');
                } else {
                    // Tampilkan pesan error jika password tidak sesuai dengan konfirmasi
                    return redirect()->back()->with('error', 'Password harus sama');
                }
            } else {
                // Jika tidak ada perubahan password, gunakan password yang ada
                $data3['password'] = $data3p->password;
            }


            $updatedata3 = users::where('id', $id)->update($data3);
            $idadmin = Auth::user()->id;

            if ($updatedata3) {
                $data3pUpdated = users::where('id', $id)->first();
                $data2['user_id'] = $idadmin;
                $data2['isi'] = "Edit Data Pengguna  ( {$data3pUpdated->username} )";

                $data2['tanggal'] = $tanggal;
           Historyadmin::create($data2);

            }
            return redirect('data');

            // if ($updatedata3) {
            // } else {
            //     return 'gagal';
            // }
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

    }
}
