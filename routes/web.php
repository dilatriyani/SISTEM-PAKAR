<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\data_adminController;
use App\Http\Controllers\Admin\data_gejalaController;
use App\Http\Controllers\Admin\data_penyakitController;
use App\Http\Controllers\Admin\data_diagnosaController;
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
Route::get('/Admin/Data_Gejala', [data_gejalaController::class, 'index']);

//crud data penyakit
// Route::get('/Admin/Data_Penyakit', [data_penyakitController::class, 'index']);
Route::get("/Admin/Data_Penyakit/edit", [data_penyakitController::class, "edit"]);
Route::get("/Admin/Data_Penyakit/simpan", [data_penyakitController::class, "update"]);
Route::resource("/Admin/Data_Penyakit", data_penyakitController::class);
Route::get("/Penyakit/{id}", [data_penyakitController::class, "destroy"]);

//crud data diagnosa
Route::get('/Admin/Data_Diagnosa', [data_diagnosaController::class, 'index']);

