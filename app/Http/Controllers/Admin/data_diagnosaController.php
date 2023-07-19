<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\HistoryDiagnosa;
use App\Http\Controllers\Controller;

class data_diagnosaController extends Controller
{
    public function index()
    {
        $data = [
            "riwayat_diagnosa" => HistoryDiagnosa::all(),
        ];

        return view('Admin.Data_Diagnosa.index', $data);
    }
}
