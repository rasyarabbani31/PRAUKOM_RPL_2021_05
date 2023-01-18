<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends controller
{
    public function index01()
    {
        return view('dashboard');
    }
}