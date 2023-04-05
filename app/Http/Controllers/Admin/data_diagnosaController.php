<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class data_diagnosaController extends Controller
{
    public function index()
    {
        return view('Admin.Data_Diagnosa.index');
    }
}
