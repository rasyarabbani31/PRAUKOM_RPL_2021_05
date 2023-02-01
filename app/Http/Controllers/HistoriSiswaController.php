<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\historisiswa;
use Illuminate\Http\Request;

class HistoriSiswaController extends Controller
{
    public function historisiswa()
    {
        $hs = DB::table('histori_siswa')
        ->orderBy('tgl', 'asc')
        ->get();
        
        return view('historisiswa', compact('hs') );
    }
}
