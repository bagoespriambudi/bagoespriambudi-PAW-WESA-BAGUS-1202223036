<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;           // ← pastikan sudah ter‐install via composer

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // 1) Set timezone Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');

        // 2) Nama mahasiswa (hard‑code sesuai instruksi)
        $nama    = 'Bagus Priambudi';

        // 3) Ambil waktu sekarang
        $now     = Carbon::now('Asia/Jakarta');
        $jam     = (int) $now->format('H');
        $waktu   = $now->format('H:i:s');    // akan di‐suffix "WIB" di view

        // 4) Tentukan salam
        if ($jam >= 5 && $jam < 12) {
            $salam = 'Selamat Pagi';
        } elseif ($jam >= 12 && $jam < 15) {
            $salam = 'Selamat Siang';
        } elseif ($jam >= 15 && $jam < 18) {
            $salam = 'Selamat Sore';
        } else {
            $salam = 'Selamat Malam';
        }

        // 5) Ambil tanggal via helper
        $tanggal = $this->getTanggal();

        // 6) Kirim ke view
        return view('dashboard', compact('salam','nama','waktu','tanggal'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // Kembalikan tanggal sekarang dalam dd‐mm‐yyyy
        return Carbon::now('Asia/Jakarta')->format('d-m-Y');
    }
}
