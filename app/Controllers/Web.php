<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function salam($name, $kelas) {
        return "Halo $name, Selamat Datang di Web Kelas $kelas";
    }
}