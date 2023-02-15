<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa()
    {
        $siswas = DB::table('siswa')
                ->join('kelas', 'siswa.kode_kelas', '=', 'kelas.id')
                ->join('jurusan', 'siswa.kode_jurusan', '=', 'jurusan.id')
                ->select('kelas.*', 'jurusan.*', 'siswa.*')
                ->orderBy('tingkatan','asc')
                ->orderBy('nama_jurusan','asc')
                ->orderBy('nama_siswa','asc')
                ->get();
                
        return view ('siswa.index1', compact('siswas'));

    }
    public function searchsiswa(Request $request)
    {
        $katakunci = $request->katakunci;
        $siswas = DB::table('siswa')
                ->join('kelas', 'siswa.kode_kelas', '=', 'kelas.id')
                ->join('jurusan', 'siswa.kode_jurusan', '=', 'jurusan.id')
                ->select('kelas.*', 'jurusan.*', 'siswa.*')
                ->where('nama_siswa','like',"%$katakunci%")
                ->orWhere('jk_siswa','like',"%$katakunci%")
                ->orWhere('kelas.tingkatan','like',"%$katakunci%")
                ->orWhere('jurusan.nama_jurusan','like',"%$katakunci%")
                ->orWhere('nisn','like',"%$katakunci%")
                ->orderBy('tingkatan','asc')
                ->orderBy('nama_jurusan','asc')
                ->orderBy('nama_siswa','asc')
                ->get();
                
        return view ('siswa.index1', compact('siswas'));

    }

    public function createsiswa()

    {
        $kelas2 = DB::table('kelas') ->get();
        // dd($kelas2);
        $jurusan2 = DB::table('jurusan') ->get();

        return view('siswa.create1', compact('kelas2', 'jurusan2'));
    }

    public function storesiswa(Request $request)
    {
        $request->validate([
            'nisn'=>'required|max:10',
            'jk_siswa' => 'required',
            'kode_kelas'=>'required',
            'kode_jurusan'=>'required'
        ]);

        Siswa::insert([
        'nama_siswa' => $request->nama_siswa,
        'jk_siswa' => $request->jk_siswa,
        'kode_kelas' => $request->kode_kelas,
        'kode_jurusan' => $request->kode_jurusan,
        'nisn' => $request->nisn
        ]);

        return redirect('siswa');
    }

    public function editsiswa($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        dd($siswa);
        $kelas2 = DB::table('kelas') ->get();
        $jurusan2 = DB::table('jurusan') ->get();

        return view('siswa.edit1', ['siswa' => $siswa], compact('kelas2', 'jurusan2'));
    }

    public function updatesiswa(Request $request, $id)
    {   
        $request->validate([
            'nisn'=>'required|max:10',
            'jk_siswa' => 'required',
            'kode_kelas'=>'required',
            'kode_jurusan'=>'required'
        ]);
        
        Siswa::where('id', $id)->update([ 
            'nama_siswa' => $request->nama_siswa, 
            'jk_siswa' => $request->jk_siswa, 
            'kode_kelas' => $request->kode_kelas,
            'kode_jurusan' => $request->kode_jurusan,
            'nisn' => $request->nisn
        ]);

        return redirect('siswa');
    }

    public function destroysiswa($id = null)
    {
      
        $hapus = DB::table('siswa')
            ->where('id',$id)
            ->delete();
        if($hapus) {
            return redirect('siswa');
        }
       
    }
}