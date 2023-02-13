<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends controller
{
    public function index01()
    {
        

        return view('dashboard');
    }
}