<?php

namespace App\Http\Controllers\Admin;
use App\Models\data_penyakit;
use App\Models\gejala;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class data_penyakitController extends Controller
{
    public function index()
    {
        $data = [
            "data_penyakit" => data_penyakit::all(),
            "data_gejala" => gejala::all(),
    
        ];

        return view('Admin.Data_Penyakit.index', $data);
    }

    public function store(Request $request)
    {

        data_penyakit::create([
            'kd_penyakit' => $request->kd_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'solusi' => $request->solusi,
        ]);
        return redirect()->back()->with('success', 'Data penyakit berhasil ditambahkan!');
    }
    public function edit(Request $request)
    {
        $dp = [
            "edit" => data_penyakit::where("id", $request->id)->first()
        ];

        return view('Admin.Data_Penyakit.edit', $dp);
    }

    public function update(Request $request)
    {
        data_penyakit::where("id", $request->id)->update([
            'kd_penyakit' => $request->kd_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'solusi' => $request->solusi,
        ]);

        return back()->with('success', 'Data Penyakit berhasil diupdate');
    }

    // public function show(Request $request)
    // {
    //     $ket = [
    //         "detail" => KetentuanLayanan::where("id", $request->id)->first()
    //     ];

    //     return view('superadmin.master.ketentuan.detail', $ket);
    // }

    // 
    public function destroy($id)
    {
        //delete post
        $data_penyakit = data_penyakit::findOrFail($id);
        $data_penyakit->delete();

        //redirect to index
        return redirect('/Admin/Data_Penyakit')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
