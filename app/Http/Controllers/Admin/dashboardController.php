<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
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
        $artikels = Artikel::query()
        ->get();
        return view('Pengguna.Layouts.info_penyakit',compact('artikels'));
    }

    

    public function tentang()
    {
        return view('Pengguna.Layouts.tentang');
    }
    public function hasil()
    {
        return view('Pengguna.Diagnosa.Hasil');
    }
}
