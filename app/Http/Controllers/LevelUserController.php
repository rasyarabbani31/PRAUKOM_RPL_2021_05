<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LevelUserController extends Controller
{
    public function leveluser()
    {
        $lv = DB::table('level_user')
        ->get();

        return view('leveluser', compact('lv') );
    }
    
}
