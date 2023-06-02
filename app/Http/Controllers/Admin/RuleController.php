<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data_penyakit;
use App\Models\gejala;
use App\Models\Rule;

class RuleController extends Controller
{

    public function index()
    {
       
        $data = [
            "rules" => Rule::all(),
            "data_penyakits" => data_penyakit::all(),
            "gejalas" => gejala::all()
    
        ];

        return view('Admin.Rule.index', $data);
    }

    public function store(Request $request)
{
    $request->validate([
        'kd_penyakit' => 'required',
        'kd_gejala' => 'required',
        'pertanyaan' => 'required',
    ]);
    Rule::create([
        
        'kd_penyakit' => $request->kd_penyakit,
        'kd_gejala' => $request->kd_gejala,
        'pertanyaan' => $request->pertanyaan,
    ]);
    return redirect()->back()->with('success', 'Data rule berhasil ditambahkan!');
}

    
public function edit(Request $request)
{
    $data = [
        "edit" => Rule::where("id", $request->id)->first(),
        "data_penyakits" => data_penyakit::all(),
        "gejalas" => gejala::all()
    ];

    return view('Admin.Rule.edit', $data);
}

public function update(Request $request)
{
    Rule::where("id", $request->id)->update([
    
        'kd_penyakit' => $request->kd_penyakit,
        'kd_gejala' => $request->kd_gejala,
        'pertanyaan' => $request->pertanyaan,


    ]);

    return back()->with('success', 'Data Rule berhasil diupdate');
}

    }

