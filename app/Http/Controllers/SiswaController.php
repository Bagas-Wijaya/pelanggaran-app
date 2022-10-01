<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
//admin kontroller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    // Siswa Kontroller
    public function web(){
        return view('user.dashboard-user');
    }


    public function history(){
        return view('user.history-pelanggaran');
    }
    public function profile(){
        return view('user.profile');
    }
    public function password(){
        return view('user.edit-password');
    }

}
