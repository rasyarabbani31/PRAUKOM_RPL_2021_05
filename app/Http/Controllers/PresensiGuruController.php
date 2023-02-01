<?php

namespace App\Http\Controllers;

use App\Models\PresensiGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresensiGuruController extends Controller
{
    public function index2()
    {
        //$presensi_gurus = PresensiGuru::orderBy('tanggal', 'desc')->get(); aaa aaaa
        $guru = DB::table('presensi_guru')
            ->join('guru','presensi_guru.kode_guru','=','guru.id')
            ->join('keterangan_izin', 'presensi_guru.kode_keterangan', '=', 'keterangan_izin.id')
            ->select('guru.*', 'keterangan_izin.*','presensi_guru.*')
            ->orderBy('tanggal', 'desc')
            ->get();
        
        return view('presensiguru.index2', compact('guru') );
    }

    public function searchpresensiguru(Request $request)
    {
        //$siswas = Siswa::orderBy('kode_kelas', 'asc') ->get();
        $katakunci = $request->katakunci;
        $guru = DB::table('presensi_guru')
        ->join('guru','presensi_guru.kode_guru','=','guru.id')
        ->join('keterangan_izin', 'presensi_guru.kode_keterangan', '=', 'keterangan_izin.id')
        ->select('guru.*', 'keterangan_izin.*','presensi_guru.*')
        ->where('tanggal','like',"%$katakunci%")
        ->orWhere('guru.nama_guru','like',"%$katakunci%")
        ->orWhere('keterangan_izin.keterangan','like',"%$katakunci%")
        ->orWhere('agenda_kbm','like',"%$katakunci%")
        ->orderBy('tanggal', 'desc')
        ->orderBy('nama_guru','asc')
        ->orderBy('keterangan','asc')
        ->orderBy('agenda_kbm','asc')
        ->get();

        return view ('presensiguru.index2', compact('guru'));

    }

    public function createpresensiguru()

    {
        $guru1 = DB::table('guru') ->get();
        $keterangan = DB::table('keterangan_izin') ->get();

        return view('presensiguru.create2',compact('guru1','keterangan'));
    }

    public function storepresensiguru(Request $request)
    {   
        $image = $request->file('image')->store('gambarpresensiguru');

        $request->validate([
            'kode_guru' => 'required',
            'kode_keterangan' => 'required'
        ]);

        PresensiGuru::insert([
        'tanggal' => $request->tanggal,
        'kode_guru' => $request->kode_guru,
        'kode_keterangan' => $request->kode_keterangan,
        'agenda_kbm' => $request->agenda_kbm,
        'gambar' => $image
        ]);

        return redirect('presensiguru');
    }

    public function editpresensiguru($id)
    {
        $presensiguru = PresensiGuru::where('id', $id)->first();
        $guru1 = DB::table('guru') ->get();
        $keterangan = DB::table('keterangan_izin') ->get();
       
        return view('presensiguru.edit2', ['presensiguru' => $presensiguru], compact('guru1','keterangan'));
    }

    public function updatepresensiguru(Request $request, $id)
    {   
        $image = $request->file('image')->store('gambarpresensiguru');
        
        $request->validate([
            'kode_guru' => 'required',
            'kode_keterangan' => 'required'
        ]);
        
        PresensiGuru::where('id', $id)->update([ 
        'tanggal' => $request->tanggal,
        'kode_guru' => $request->kode_guru,
        'kode_keterangan' => $request->kode_keterangan,
        'agenda_kbm' => $request->agenda_kbm,
        'gambar' => $image
        ]);

        return redirect('presensiguru');
    }

    public function destroypresensiguru($id)
    {
        PresensiGuru::where('id', $id)->delete();
        
        return back();
    }
}