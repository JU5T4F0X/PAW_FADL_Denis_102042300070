<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $nama = 'Denis Hendri Wawo';
        $nim = '102042300070';
        $email = 'denishendriwawo@student.telkomuniversity.ac.id';
        $jurusan = 'S1 Sistem Informasi';
        $fakultas = 'Fakultas Rekayasa Industri';


        return view('profil', compact('nama','nim','email','jurusan','fakultas'));
    }
}
