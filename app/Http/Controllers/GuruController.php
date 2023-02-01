<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::orderBy('nama_guru', 'asc')->get();
        
        return view('guru.index', compact('gurus') );
    }

    public function searchguru(Request $request)
    {

        $katakunci = $request->katakunci;
        $gurus = DB::table('guru')
                ->select('id', 'nama_guru', 'jk_guru', 'nip')
                ->where('nama_guru','like',"%$katakunci%")
                ->orWhere('jk_guru','like',"%$katakunci%")
                ->orWhere('nip','like',"%$katakunci%")
                ->orderBy('nama_guru','asc')
                ->get();

        return view ('guru.index', compact('gurus'));

    }

    public function createguru()

    {
        return view('guru.create');
    }

    public function storeguru(Request $request)
    {
        $request->validate([
            'jk_guru' => 'required',
            'nip'=>'required|max:20'
        ]);

        Guru::insert([
        'nama_guru' => $request->nama_guru,
        'jk_guru' => $request->jk_guru,
        'nip' => $request->nip
        ]);

        return redirect('guru');
    }

    public function editguru($id)
    {
        $guru = Guru::where('id', $id)->first();

        return view('guru.edit', ['guru' => $guru]);
    }

    public function updateguru(Request $request, $id)
    {   
        $request->validate([
            'jk_guru' => 'required',
            'nip'=>'required|max:20'
        ]);

        Guru::where('id', $id)->update([ 
            'nama_guru' => $request->nama_guru, 
            'jk_guru' => $request->jk_guru
        ]);

        return redirect('guru');
    }

    public function destroyguru($id)
    {
        $hapus = DB::table('guru')
            ->where('id',$id)
            ->delete();
        if($hapus) {
            return redirect('guru');
        }
    }
}