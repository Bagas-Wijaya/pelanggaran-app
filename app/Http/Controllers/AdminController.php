<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('');
    // }


        public function index()
        {
            return view('admin.dashboard');
        }


    public function siswa (){
        return view('admin.siswa');
    }
    public function kelas(){
        return view('admin.kelas');
    }
    public function pelanggaran(){
        return view('admin.pelanggaran');
    }
    public function kategori(){
        return view('admin.kategori-pelanggaran');
    }
    public function pelanggar(){
        return view('admin.pelanggar');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    //
}
