<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends controller
{
    public function index01()
    {
        $guru = collect(DB::select("SELECT * FROM jumlah_guru"))
            ->firstOrFail()
            ->jml_guru;

        $siswa = collect(DB::select("SELECT * FROM jumlah_siswa"))
            ->firstOrFail()
            ->jml_siswa;

        $kelas = collect(DB::select("SELECT * FROM jumlah_kelas"))
            ->firstOrFail()
            ->jml_kelas;

        $jurusan = collect(DB::select("SELECT * FROM jumlah_jurusan"))
            ->firstOrFail()
            ->jml_jurusan;

        return view('dashboard', compact('guru','siswa', 'kelas', 'jurusan'));
    }
}