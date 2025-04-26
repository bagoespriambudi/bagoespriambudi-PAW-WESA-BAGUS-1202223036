<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = (object)[
            'nama' => 'Bagus Priambudi',
            'nim' => '1202223036',
            'email' => 'bangpri@student.telkomuniversity.ac.id',
            'jurusan' => 'S1 Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => asset('images/foto baguss.jpg')
        ];

        return view('profil', compact('mahasiswa'));
    }
}
