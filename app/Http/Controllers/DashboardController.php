<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Gantilah 'dashboard' sesuai dengan nama view yang Anda inginkan
    }
}
