<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\PenggunaanController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\ArtikelDetailController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\data_adminController;
use App\Http\Controllers\Admin\data_gejalaController;
use App\Http\Controllers\Admin\data_diagnosaController;
use App\Http\Controllers\Admin\data_penyakitController;
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
// Route::post('/Pengguna/Diagnosa', [dashboardController::class, 'getUserSess']);
Route::post('/Pengguna/Diagnosa/Mulai', [dashboardController::class, 'getUserSess']);

Route::get('/Pengguna/Diagnosa/{id}', [dashboardController::class, 'question']);
Route::post('/Pengguna/Diagnosa/Hasil', [dashboardController::class, 'result']);
Route::post('/Pengguna/Diagnosa/Cetak', [dashboardController::class, 'GeneratePdf']);
Route::get('/Pengguna/Layouts/tentang', [dashboardController::class, 'tentang']);
// Route::get('/Pengguna/Diagnosa/Hasil', [dashboardController::class, 'hasil']);

Route::get('/Penggunaan', [PenggunaanController::class, 'index']);
Route::get('/Pengguna/Layouts', [dashboardController::class, 'info_penyakit']);
Route::get('/Pengguna/Layouts/detail/{id}', [ArtikelDetailController::class, 'index']);

//crud data_admin
Route::resource("/Admin/Data_Admin", data_adminController::class);
Route::get("/Data_Admin/{id}", [data_adminController::class, "destroy"]);

//crud data gejala
Route::get('/Admin/Data_Gejala', [data_gejalaController::class, 'store']);
Route::resource("/Admin/Data_Gejala", data_gejalaController::class);

//crud data penyakit
Route::get('/Admin/Data_Penyakit', [data_penyakitController::class, 'store']);

Route::resource("/Admin/Data_Penyakit", data_penyakitController::class);
// Route::get("/Penyakit/{id}", [data_penyakitController::class, "destroy"]);

//crud data diagnosa
Route::get('/Admin/Data_Diagnosa', [data_diagnosaController::class, 'index']);


// crud rules
// Route::get('/Admin/Rule', [RuleController::class, 'index']);
Route::resource("/Admin/Rule", RuleController::class);

// crud rules
Route::resource("/Admin/Artikel", ArtikelController::class);
Route::get("/Artikel-hapus/{id}", [ArtikelController::class, "destroy"]);

//login

Route::middleware(['guest'])->group(function () {
    Route::get('/login',  [LoginController::class, 'index'])->name('login');
    Route::post('/login',  [LoginController::class, 'login']);
});


Route::middleware(['auth'])->group(function () {

    Route::get('/Admin/Dashboard',  [dashboardController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);
});

Route::get('/Profile', [ProfileController::class, 'index']);
Route::post('/Profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/Profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
