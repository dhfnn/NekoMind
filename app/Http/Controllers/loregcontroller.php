<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\MateriModel;
use App\Models\Ujian;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loregcontroller extends Controller
{
    function index(){
        $dataMateri = MateriModel::all();
        $dataSoal = Ujian::all();
        $totalMateri= $dataMateri->count();
        $totalSoal= $dataSoal->count();
        return view('index', compact('totalMateri','dataSoal'));
    }
    function loginpage(){
        return view('masuk');
    }


    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password' => 'required'
        ],
        [
            'email.required'=>'Email belum diisi',
            'password.required'=>'password belum diisi',

        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($infologin)){
            // return redirect('admin/dashboard');
            if(Auth::user()->role == 'admin'){
                return redirect('admin/dashboard');
            }elseif(Auth::user()->role == 'pengguna'){
                return redirect('pengguna/dashboard');
            };
        }else{
            return redirect('/masuk')->withErrors('data yang anda masukan salah')->withInput();
        }


    }



    function registerpage(){
        return view('daftar');
    }
    function register(Request $request){
        // dd($request->all());
        $tanggal = now()->setTimezone('Asia/Jakarta')->toDateString();

        $request->validate([
            'email'=>'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'username'=> 'required',
        ],
        [
            'email.required'=>'Email belum diisi',
            'email.unique'=>'Email sudah ada',
            'password.required'=>'password belum diisi',
            'password.min'=>'password minimal 6 karakter',
            'password.confirmed'=>'Konfirmasi password tidak cocok',
            'username.required'=>'username belum diisi',

        ]);
        $data['username'] = $request->username;
        $data['email']    = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['role']     = 'pengguna';
        $data['bergabung']= $tanggal;
        $data['foto']= 'pplvl1';
        $data00 = users::create($data);

        $data5['user_id'] = $data00->id;
        $data5['exp'] = '1200';
        Level::create($data5);
        $datapoin['user_id'] = $data00->id;
        $datapoin['poin'] = '0';
        Poin::create($datapoin);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($infologin)){
            // return redirect('admin/dashboard');
            return redirect('pengguna/dashboard');
        }else{
            return redirect('/masuk')->withErrors('data yang anda masukan salah')->withInput();
        }

        }

    function logout(){
        Auth::logout();
        return redirect('/masuk');
    }




}
