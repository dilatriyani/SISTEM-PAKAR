<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.body');
    }

    public function diagnosa()
    {
        return view('Pengguna.Diagnosa.form');
    }

    public function info_penyakit()
    {
        return view('Pengguna.Layouts.info_penyakit');
    }

    public function tentang()
    {
        return view('Pengguna.Layouts.tentang');
    }
}
