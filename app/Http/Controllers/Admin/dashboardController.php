<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Gejala;
use App\Models\Rule;
use App\Models\data_penyakit;
use Illuminate\Support\Facades\Session;
class dashboardController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.body');
    }

    // public function diagnosa()
    // {
    //     return view('Pengguna.Diagnosa.form');
    // }

    public function getUserSess(Request $request) {
        if($request){
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
        if($id == null){
            $id = 1;
        }
        $gejala = Gejala::query()->findOrFail($id);
        return view('Pengguna.Diagnosa.form')->with([
            'gejala' => $gejala,
            'user_name' => last($user_name),
            'user_age' => last($user_age),
            'user_address' => last($user_address),
        ]);
    }

    public function result(Request $request, )
    {
        $last = Gejala::latest()->first();
        $penyakit_total = data_penyakit::get()->count();
        $next = $request->id_gejala + 1;
        if($next != $last->id) {
            if($request->answer == 1){
                for ($i=1; $i <=$penyakit_total; $i++) {
                    $rule = Rule::query()->findOrFail($i);
                    $daftar_gejala = explode(',', $rule->daftar_gejala);
                    foreach ($daftar_gejala as $gejala) {
                        $daftar_gejala = explode(',', $rule->daftar_gejala);
                        if($gejala == $request->id_gejala){
                            Session::push('penyakit', $rule->id_penyakit);
                            break;
                        }
                    }
                }
            }
            return redirect('/Pengguna/Diagnosa/'.$next);
        }
        else{
            $penyakit = Session::get('penyakit');
            $arrayLength = count($penyakit);
            if($arrayLength == 0){
                return redirect('/Pengguna/Diagnosa/1')->with(['message' => 'Pilih setidaknya 1 Gejala!']);
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

            // dd($user_name, $user_age, $user_address);

            return view('Pengguna.Diagnosa.Hasil')->with([
                'penyakit' => $penyakit_result,
                'score' => $score,
                'name' => last($user_name),
                'age' => last($user_age),
                'address' => last($user_address),
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
