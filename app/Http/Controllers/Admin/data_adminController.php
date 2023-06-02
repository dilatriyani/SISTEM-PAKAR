<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class data_adminController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::all(),
            
        ];

        return view('Admin.Data_Admin.index', $data);
    }

    public function store(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role'=>  $request->role,
        
        ]);
        return redirect()->back()->with('success', 'Data Admin berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        //delete post
        $user = User::findOrFail($id);
        $user->delete();

        //redirect to index
        return redirect('/Admin/Data_Admin')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    // public function index()
    // {
    //     return view('Admin.Data_Admin.index');
    // }
}
