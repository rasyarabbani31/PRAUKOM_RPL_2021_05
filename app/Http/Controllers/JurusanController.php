<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    public function index4() {
        $jurusans = Jurusan::get();
        
        return view('jurusan.index4', compact('jurusans') );
    }

    public function createjurusan() {
        {
            return view ('jurusan.create4');
        }
    }

    public function storejurusan(Request $request) {
        Jurusan::insert([
            'nama_jurusan' => $request->nama_jurusan,
            'singkatan_jurusan' => $request->singkatan_jurusan
        ]);

        return redirect('jurusan');
    }

    public function editjurusan($id) {
        $jurusan = Jurusan::where('id', $id)->first();

        return view ('jurusan.edit4', ['jurusan' => $jurusan]);
    }

    public function updatejurusan(Request $request, $id) {
        Jurusan::where('id', $id)->update([
            'nama_jurusan' => $request->nama_jurusan,
            'singkatan_jurusan' => $request->singkatan_jurusan
        ]);

        return redirect('jurusan');
    }

    public function destroyjurusan($id) {
        Jurusan::where('id', $id)->delete();

        return back();
    }
}
