<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


class PageController extends Controller {
    public function index()
    {
        return "halaman home Admin";
    }
    public function tampil()
    {
        return "Data siswa Admin";
    }
    public function nilai()
    {
        return view('daftar_nilai');
    }
    public function siswa()
    {
        return view('daftar_siswa');
    }

    
}