<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class data_gejalaController extends Controller
{
    public function index()
    {
        return view('Admin.Data_Gejala.index');
    }
}
