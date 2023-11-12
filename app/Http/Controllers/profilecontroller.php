<?php

namespace App\Http\Controllers;

use App\Models\Datapengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profilecontroller extends Controller
{
    function profpengguna(){
        return view('pengguna.profile');

    }

    function profadmin(){
        $user = Auth::user();
        $username = $user->username;

        $namepage = 'Profile';
        return view('admin.profile', compact('namepage','username'));

    }
    function isidata(){
        return view('more.tambahdata');
    }
    function edit(){
        dd('hai');
    }

}