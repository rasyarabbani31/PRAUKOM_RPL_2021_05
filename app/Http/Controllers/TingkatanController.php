<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tingkatan;


class TingkatanController extends Controller
{
     public function index5() {
        $tingkatans = tingkatan::orderby('tingkatan', 'asc')->get();

        return view('tingkatan.index5',  compact('tingkatans'));
     }

     public function createtingkatan() {
        return view('tingkatan.create5');
     }

     public function storetingkatan(Request $request) {
        Tingkatan::insert([
            'tingkatan' => $request->tingkatan
        ]);

        return redirect('tingkatan');
     }

     public function edittingkatan($id) {
        $tingkatan = Tingkatan::where('id', $id)->first();

        return view ('tingkatan.edit5', ['tingkatan' => $tingkatan]);
     }

     public function updatetingkatan(Request $request, $id) {
        Tingkatan::where('id', $id)->update([
            'tingkatan' => $request->tingkatan
        ]);

        return redirect('tingkatan');
     }

     public function destroytingkatan($id) {
        Tingkatan::where('id', $id)->delete();

        return back();
     }
}
