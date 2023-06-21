<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gejala;
// use App\Models\Rule;
use App\Models\data_penyakit;
class data_gejalaController extends Controller
{
    public function index()
    {
        $data = [
            "data_gejala" => gejala::paginate(5),
            "data_penyakit" => data_penyakit::all(),
            // "rule" => Rule::all(),
        ];

        return view('Admin.Data_Gejala.index', $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'kd_penyakit' => 'kd_penyakit',
        //     'nama_penyakit' => 'nama_penyakit',
        //     'deskripsi' => 'deskripsi',
        //     'solusi' => 'solusi',
        // ]);

        gejala::create([
            'nama_gejala' => $request->nama_gejala,
            'kd_gejala' => $request->kd_gejala,
            'kd_penyakit' => $request->kd_penyakit,
        ]);
        return redirect()->back()->with('success', 'Data gejala berhasil ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => gejala::where("id", $request->id)->first(),
            "data_penyakit" => data_penyakit::all(),
        ];

        return view('Admin.Data_Gejala.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data_gejala = gejala::findOrFail($id);
        $data_gejala->kd_gejala = $request->kd_gejala;
        $data_gejala->nama_gejala = $request->nama_gejala;
        $data_gejala->save();
    

        return redirect()->back()->with('success', 'Data Penyakit berhasil diupdate');
    }

    public function destroy($id)
    {
        //delete post
        $data_gejala = gejala::findOrFail($id);
        $data_gejala->delete();

        //redirect to index
        return redirect('/Admin/Data_Gejala')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
