<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rule;

class RuleController extends Controller
{
    public function index()
    {
        // $data = [
        //     "rule" => Rule::all()
        // ];

        return view('Admin.Rule.index');
    }
}
