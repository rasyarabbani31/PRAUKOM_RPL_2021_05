<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\historiguru;
use Illuminate\Http\Request;

class HistoriGuruController extends Controller
{
    public function historiguru()
    {
        $hg = DB::table('histori_guru')
        ->orderBy('tgl', 'asc')
        ->get();
        
        return view('historiguru', compact('hg') );
    }
}
