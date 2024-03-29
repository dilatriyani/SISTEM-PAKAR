<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rule;
use App\Models\gejala;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\data_penyakit;
use App\Models\HistoryDiagnosa;
use Illuminate\Support\Facades\URL;
use Spatie\Browsershot\Browsershot;
// use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Session;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class dashboardController extends Controller
{
    public function index()
    {
        $totalAdmins = User::count();
        $Penyakit = data_penyakit::count();
        $gejala = gejala::count();
        $Konsultasi = HistoryDiagnosa::count();
    
        // Pass the count to the view
        return view('Admin.Dashboard.body', compact('totalAdmins', 'Penyakit', 'gejala', 'Konsultasi'));
       
    }

    // public function diagnosa()
    // {
    //     return view('Pengguna.Diagnosa.form');
    // }

    // public function getUserSess(Request $request) {
    //     if($request->has('name') && $request->has('age') && $request->has('address')) {
    //         $request->session()->flush();
    //         Session::put('user_name', $request->name);
    //         Session::put('user_age', $request->age);
    //         Session::put('user_address', $request->address);
    //         return redirect('/Pengguna/Diagnosa/1');
    //     }
    // }
    

 
    public function getUserSess(Request $request)
    {
        if ($request) {
            $request->session()->flush();
            Session::push('user_name', $request->name);
            Session::push('user_age', $request->age);
            Session::push('user_address', $request->address);
            return redirect('/Pengguna/Diagnosa/1');
        }
    }

    public function question($id)
    {
        $user_name = Session::get('user_name');
        $user_age = Session::get('user_age');
        $user_address = Session::get('user_address');
        if ($id == null) {
            $id = 1;
        }
        $gejala = gejala::query()->findOrFail($id);
        return view('Pengguna.Diagnosa.form')->with([
            'gejala' => $gejala,
            'user_name' => last($user_name),
            'user_age' => last($user_age),
            'user_address' => last($user_address),
        ]);
    }

    public function result(Request $request,)
    {
        $last = gejala::latest()->first();
        $penyakit_total = data_penyakit::get()->count();
        $id_gejala = $request->id_gejala;
        $next = $id_gejala + 1;
        if ($next < $last->id) {
            $gejala = gejala::find($id_gejala);
            if ($gejala) {
                $next++;
            } else {
                if ($request->answer == 1) {
                    # save gejala selected
                    // $gejala = gejala::findOrFail($id_gejala);
                    Session::push('gejala', $gejala->nama_gejala);
                    for ($i = 1; $i <= $penyakit_total; $i++) {
                        $rule = Rule::query()->findOrFail($i);
                        $daftar_gejala = explode(',', $rule->daftar_gejala);
                        foreach ($daftar_gejala as $gejala) {
                            $daftar_gejala = explode(',', $rule->daftar_gejala);
                            if ($gejala == $id_gejala) {
                                Session::push('penyakit', $rule->id_penyakit);
                                break;
                            }
                        }
                    }
                }
            }
            return redirect('/Pengguna/Diagnosa/' . $next);
        } else {
            $penyakit = Session::get('penyakit');
            $arrayLength = count($penyakit);
            if ($arrayLength == 0) {
                return redirect('/Pengguna/Diagnosa/1')->with(['message' => 'Pilih setidaknya 1 gejala!']);
            }

            $countArray = array_count_values($penyakit);
            $arrayLength = count($penyakit);
            arsort($countArray);
            $mostFrequentValue = key($countArray);
            $frequency = current($countArray);
            $score = $frequency / $arrayLength * 100;

            $penyakit_result = data_penyakit::query()->findOrFail($mostFrequentValue);

            $user_name = Session::get('user_name');
            $user_age = Session::get('user_age');
            $user_address = Session::get('user_address');
            $gejala_list = Session::get('gejala');

            HistoryDiagnosa::create([
                'nama' => last($user_name),
                'umur' => last($user_age),
                'alamat' => last($user_address),
                'penyakit' => $penyakit_result->nama_penyakit,
                'persentase' => strval($score),
                'solusi' => $penyakit_result->solusi,
            ]);

            return view('Pengguna.Diagnosa.Hasil')->with([
                'penyakit' => $penyakit_result,
                'score' => $score,
                'name' => last($user_name),
                'age' => last($user_age),
                'address' => last($user_address),
                'gejala_list' => $gejala_list,
            ]);
        }
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
