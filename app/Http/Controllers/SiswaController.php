<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index1()
    {
        //$siswas = Siswa::orderBy('kode_kelas', 'asc') ->get();
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

    public function createsiswa()

    {
        return view('siswa.create1');
    }

    public function storesiswa(Request $request)
    {

        Siswa::insert([
        'nama_siswa' => $request->nama_siswa,
        'jk_siswa' => $request->jk_siswa,
        'kode_kelas' => $request->kode_kelas,
        'kode_jurusan' => $request->kode_jurusan
        ]);

        return redirect('siswa');
    }

    public function editsiswa($id)
    {
        $siswa = Siswa::where('id', $id)->first();

        return view('siswa.edit1', ['siswa' => $siswa]);
    }

    public function updatesiswa(Request $request, $id)
    {
        Siswa::where('id', $id)->update([ 
            'nama_siswa' => $request->nama_siswa, 
            'jk_siswa' => $request->jk_siswa, 
            'kode_kelas' => $request->kode_kelas,
            'kode_jurusan' => $request->kode_jurusan
        ]);

        return redirect('siswa');
    }

    public function destroysiswa($id)
    {
        Siswa::where('id', $id)->delete();
        
        return back();
    }
}