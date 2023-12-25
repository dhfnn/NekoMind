<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\users;
use App\Models\Datalainnya;
use App\Models\Datapengguna;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profilepengguna extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Datapengguna::all();
        $userId = auth()->id();
        $level = Level::where('user_id', $userId)->first();
        $levelpengguna = $level->exp/1200;
        $dataAkun = users::where('id',$userId)->first();
        $foto = $dataAkun->foto;
        $dataPengguna = Datapengguna::where('user_id', $userId)->first();
        $dataLainnya = Datalainnya::where('user_id', $userId)->first();

        // return $dataPengguna;
        $namepage = 'Profile'; // Menginisialisasi variabel $namepage dengan nilai 'Profile'
        return view('pengguna.profile', compact('namepage','dataPengguna','dataLainnya', 'dataAkun','userId','levelpengguna','foto'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataKota = Kota::all();
        $checkboxItems = [
            ['value' => 'Indonesia', 'id' => 'Indonesia', 'label' => 'B. Indonesia'],
            ['value' => 'Inggris', 'id' => 'Inggris', 'label' => 'B. Inggris'],
            ['value' => 'Sejarah', 'id' => 'Sejarah', 'label' => 'Sejarah'],
            ['value' => 'Matematika', 'id' => 'Matematika', 'label' => 'Matematika'],
            ['value' => 'Kimia', 'id' => 'Kimia', 'label' => 'Kimia'],
            ['value' => 'Biologi', 'id' => 'Biologi', 'label' => 'Biologi'],
            ['value' => 'Fisika', 'id' => 'Fisika', 'label' => 'Fisika'],
            ['value' => 'Sosiologi', 'id' => 'Sosiologi', 'label' => 'Sosiologi'],
            ['value' => 'Geografi', 'id' => 'Geografi', 'label' => 'Geografi'],
            ['value' => 'Ekonomi', 'id' => 'Ekonomi', 'label' => 'Ekonomi'],
        ];

        $namepage = 'Profile'; // Menginisialisasi variabel $namepage dengan nilai 'Profile'
        return view('more.tambahdata', compact('namepage','dataKota','checkboxItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return ' BJHK';
        // @dd($request->all());
        // $Fav = $request->input('pelajaran');
        // dd($selectedPelajaran);
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
            'checkboxtp[].required' => 'Minimal satu opsi harus dipilih.',
            'motto.required' => ' Motto harus diisi.',
        ]);

        $user_id = Auth::user()->id;


        $hallo = Auth::user()->id;

$data['user_id'] = $hallo;
$data2['user_id'] = $hallo;

        // $hallo = Auth::user()->id;
        // $data['user_id']=$hallo;
        $favpel = implode(', ', $request->input('pelajaran'));

        $data2['namasekolah'] = $request->namasekolah;
        $data2['kelas'] = $request->kelas;
        $data2['jurusan'] = $request->jurusan;
        $data2['target'] = $request->target;
        $data2['pelajaranfav'] = $favpel ;
        $data2['motto'] = $request->motto;


        // $user_id = Auth::user()->id;
        // $data['user_id']=$user_id;
        $data['nama'] = $request->nama;
        $data['tanggallahir'] = $request->tanggallahir;
        $data['jeniskelamin'] = $request->jeniskelamin;
        $data['kota'] = $request->kota;
        $data['alamat'] = $request->alamat;
        $data['nohp'] = $request->nohp;


        $savedData = Datapengguna::create($data);

        $savedData2 = Datalainnya::create($data2);
        // Simpan data kedua

        if ($savedData && $savedData2) {
            // Jika berhasil, alihkan ke halaman dashboard
            return redirect()->route('dashboard-pengguna');
        } else {
            // Jika salah satu atau kedua operasi gagal, tampilkan pesan "gagal"
            return back()->with('error', 'Gagal menyimpan data.');
        }




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
                $checkboxItems = [
            ['value' => 'Indonesia', 'id' => 'Indonesia', 'label' => 'B. Indonesia'],
            ['value' => 'Inggris', 'id' => 'Inggris', 'label' => 'B. Inggris'],
            ['value' => 'Sejarah', 'id' => 'Sejarah', 'label' => 'Sejarah'],
            ['value' => 'Matematika', 'id' => 'Matematika', 'label' => 'Matematika'],
            ['value' => 'Kimia', 'id' => 'Kimia', 'label' => 'Kimia'],
            ['value' => 'Biologi', 'id' => 'Biologi', 'label' => 'Biologi'],
            ['value' => 'Fisika', 'id' => 'Fisika', 'label' => 'Fisika'],
            ['value' => 'Sosiologi', 'id' => 'Sosiologi', 'label' => 'Sosiologi'],
            ['value' => 'Geografi', 'id' => 'Geografi', 'label' => 'Geografi'],
            ['value' => 'Ekonomi', 'id' => 'Ekonomi', 'label' => 'Ekonomi'],
        ];
        $userId = auth()->id(); // Mendapatkan user_id pengguna yang login.
        $dataKota = Kota::all();

        // Mengambil data pengguna berdasarkan user_id.
        $dataAkun = users::where('id',$userId)->first();
        $dataPengguna = Datapengguna::where('user_id', $userId)->first();
        $dataLainnya = Datalainnya::where('user_id', $userId)->first();

        // return $dataPengguna;
        $namepage = 'Profile'; // Menginisialisasi variabel $namepage dengan nilai 'Profile'
        return view('pengguna.editprofile', compact('namepage','dataPengguna','dataLainnya', 'dataAkun','userId','dataKota','checkboxItems'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
            'checkboxtp[]' => 'required',
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
            'checkboxtp[].required' => 'Minimal satu opsi harus dipilih.',
            'motto.required' => ' Motto harus diisi.',
        ]);
        $hallo = Auth::user()->id;
        $datap = Datapengguna::where('user_id', $hallo)->first();
        $data2p = Datalainnya::where('user_id', $hallo)->first();
        $favpel = implode(', ', $request->input('pelajaran'));

        $data['user_id'] = $hallo;
        $data2['user_id'] = $hallo;

        $data2['namasekolah'] = $request->namasekolah ?: $data2p->namasekolah;
        $data2['kelas'] = $request->kelas ?: $data2p->kelas;
        $data2['jurusan'] = $request->jurusan ?: $data2p->jurusan;
        $data2['target'] = $request->target ?: $data2p->target;
        $data2['pelajaranfav'] = $favpel ?:$data2p->pelajaranfav;
        $data2['motto'] = $request->motto ?: $data2p->motto;

        $data['nama'] = $request->nama ?: $datap->nama;
        $data['tanggallahir'] = $request->tanggallahir ?: $datap->tanggallahir;
        $data['jeniskelamin'] = $request->jeniskelamin ?: $datap->jeniskelamin;
        $data['kota'] = $request->kota ?: $datap->kota;
        $data['alamat'] = $request->alamat ?: $datap->alamat;
        $data['nohp'] = $request->nohp ?: $datap->nohp;


        $updatedata = Datapengguna::where('user_id', $hallo)->update($data);
        $updatedata2 = Datalainnya::where('user_id', $hallo)->update($data2);

        if ($updatedata && $updatedata2) {
            // Jika berhasil, alihkan ke halaman dashboard
            return redirect()->route('dashboard-pengguna');
        } else {
            // Jika salah satu atau kedua operasi gagal, tampilkan pesan "gagal"
            // return redirect()->route('dashboard-jklasd');
            return redirect()->route('dashboard-pengguna');


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
