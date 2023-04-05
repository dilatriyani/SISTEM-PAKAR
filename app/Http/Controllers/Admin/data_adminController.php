<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class data_adminController extends Controller
{
    public function index()
    {
        return view('Admin.Data_Admin.index');
    }
}
