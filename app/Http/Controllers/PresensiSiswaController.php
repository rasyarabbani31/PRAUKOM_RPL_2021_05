<?php

namespace App\Http\Controllers;

use App\Models\PresensiSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresensiSiswaController extends Controller
{
    public function index3()
    {
        //$presensi_gurus = PresensiGuru::orderBy('tanggal', 'desc')->get();
        $siswa = DB::table('presensi_siswa')
            ->join('siswa','presensi_siswa.kode_siswa','=','siswa.id')
            ->join('kelas', 'presensi_siswa.kode_kelas','=','kelas.id')
            ->join('jurusan','presensi_siswa.kode_jurusan','=','jurusan.id')
            ->join('keterangan_izin', 'presensi_siswa.kode_keterangan', '=', 'keterangan_izin.id')
            ->select('siswa.*', 'kelas.*', 'jurusan.*', 'keterangan_izin.*','presensi_siswa.*')
            ->orderBy('tanggal', 'desc')
            ->orderBy('tingkatan','asc')
            ->orderBy('nama_jurusan','asc')
            ->orderBy('nama_siswa','asc')
            ->get();
        
        return view('presensisiswa.index3', compact('siswa') );
    }
    
    public function searchpresensisiswa(Request $request)
    {
        //$siswas = Siswa::orderBy('kode_kelas', 'asc') ->get();
        $katakunci = $request->katakunci;
        $siswa = DB::table('presensi_siswa')
        ->join('siswa','presensi_siswa.kode_siswa','=','siswa.id')
        ->join('kelas', 'presensi_siswa.kode_kelas','=','kelas.id')
        ->join('jurusan','presensi_siswa.kode_jurusan','=','jurusan.id')
        ->join('keterangan_izin', 'presensi_siswa.kode_keterangan', '=', 'keterangan_izin.id')
        ->select('siswa.*', 'kelas.*', 'jurusan.*', 'keterangan_izin.*','presensi_siswa.*')
        ->where('tanggal','like',"%$katakunci%")
        ->orWhere('nama_siswa','like',"%$katakunci%")
        ->orWhere('kelas.tingkatan','like',"%$katakunci%")
        ->orWhere('jurusan.nama_jurusan','like',"%$katakunci%")
        ->orWhere('keterangan_izin.keterangan','like',"%$katakunci%")
        ->orderBy('tanggal', 'desc')
        ->orderBy('tingkatan','asc')
        ->orderBy('nama_jurusan','asc')
        ->orderBy('nama_siswa','asc')
        ->get();

        return view ('presensisiswa.index3', compact('siswa'));

    }

    public function createpresensisiswa()

    {
        $siswa1 = DB::table('siswa') ->get();
        $kelas1 = DB::table('kelas') ->get();
        $jurusan1 = DB::table('jurusan') ->get();
        $keterangan1 = DB::table('keterangan_izin') ->get();

        return view('presensisiswa.create3', compact('siswa1', 'kelas1', 'jurusan1', 'keterangan1'));
    }

    public function storepresensisiswa(Request $request)
    {   
        
        $image = $request->file('image')->store('gambarpresensisiswa');

        $request->validate([
            'kode_siswa' => 'required',
            'kode_kelas' => 'required',
            'kode_jurusan' => 'required',
            'kode_keterangan' => 'required'
        ]);

        Presensisiswa::insert([
        'tanggal' => $request->tanggal,
        'kode_siswa' => $request->kode_siswa,
        'kode_kelas' => $request->kode_kelas,
        'kode_jurusan' => $request->kode_jurusan,
        'kode_keterangan' => $request->kode_keterangan,
        'gambar' => $image
        ]);

        return redirect('presensisiswa');
    }

    public function editpresensisiswa($id)
    {
        $presensisiswa = PresensiSiswa::where('id', $id)->first();
        $siswa1 = DB::table('siswa') ->get();
        $kelas1 = DB::table('kelas') ->get();
        $jurusan1 = DB::table('jurusan') ->get();
        $keterangan1 = DB::table('keterangan_izin') ->get();

        return view('presensisiswa.edit3', ['presensisiswa' => $presensisiswa], compact('siswa1', 'kelas1', 'jurusan1', 'keterangan1'));
    }

    public function updatepresensisiswa(Request $request, $id)
    {   
        
        $image = $request->file('image')->store('gambarpresensisiswa');
        
        $request->validate([
            'kode_siswa' => 'required',
            'kode_kelas' => 'required',
            'kode_jurusan' => 'required',
            'kode_keterangan' => 'required'
        ]);
        
        PresensiSiswa::where('id', $id)->update([ 
        'tanggal' => $request->tanggal,
        'kode_siswa' => $request->kode_siswa,
        'kode_kelas' => $request->kode_kelas,
        'kode_jurusan' => $request->kode_jurusan,
        'kode_keterangan' => $request->kode_keterangan,
        'gambar' => $image
        ]);

        return redirect('presensisiswa');
    }

    public function destroypresensisiswa($id)
    {
        PresensiSiswa::where('id', $id)->delete();
        
        return back();
    }
}