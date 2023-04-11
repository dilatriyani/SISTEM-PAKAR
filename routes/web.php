<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\data_adminController;
use App\Http\Controllers\Admin\data_gejalaController;
use App\Http\Controllers\Admin\data_penyakitController;
use App\Http\Controllers\Admin\data_diagnosaController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\Admin\ArtikelController;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Pengguna.Layouts.Home');
});

Route::get('/Admin/Dashboard', [dashboardController::class, 'index']);
Route::get('/Pengguna/Diagnosa', [dashboardController::class, 'diagnosa']);
Route::get('/Pengguna/Layouts', [dashboardController::class, 'info_penyakit']);
Route::get('/Pengguna/Layouts/tentang', [dashboardController::class, 'tentang']);

//crud data_admin
Route::get('/Admin/Data_Admin', [data_adminController::class, 'index']);

//crud data gejala
// Route::get('/Admin/Data_Gejala', [data_gejalaController::class, 'index']);
Route::resource("/Admin/Data_Gejala", data_gejalaController::class);
Route::get("/Data_Gejala/edit", [data_gejalaController::class, "edit"]);
Route::get("/Data_Gejala/simpan", [data_gejalaController::class, "update"]);
Route::get("/Gejala/{id}", [data_gejalaController::class, "destroy"]);


//crud data penyakit
// Route::get('/Admin/Data_Penyakit', [data_penyakitController::class, 'index']);
Route::get("/Admin/Data_Penyakit/edit", [data_penyakitController::class, "edit"]);
Route::get("/Admin/Data_Penyakit/simpan", [data_penyakitController::class, "update"]);
Route::resource("/Admin/Data_Penyakit", data_penyakitController::class);
Route::get("/Penyakit/{id}", [data_penyakitController::class, "destroy"]);

//crud data diagnosa
Route::get('/Admin/Data_Diagnosa', [data_diagnosaController::class, 'index']);


// crud rules
Route::get('/Admin/Rule', [RuleController::class, 'index']);

// crud rules
Route::resource("/Admin/Artikel", ArtikelController::class);
Route::get("/Artikel/edit", [ArtikelController::class, "edit"]);
Route::put("/Artikel/simpan", [ArtikelController::class, "update"]);
Route::get("/Artikel-hapus/{id}", [ArtikelController::class, "destroy"]);