<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/', '/dashboard');

//Route::get('/home', [HomeController::class, 'index']);
//
//Route::prefix('/product')->group(callback: function () {
//    Route::get('/', [ProductController::class, 'index']);
//});
//
//Route::get('/news/{page}', [NewsController::class, 'index']);
//
//Route::prefix('/program')->group(function () {
//    Route::get('/', [ProgramController::class, 'index']);
//});
//
//Route::get('/about-us', [AboutUsController::class, 'index']);
//
//Route::resource('/contact-us', ContactUsController::class);

// Week 3 - praktikum 2
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/experience', [ExperienceController::class, 'index']);

// Week 4 - praktikum 1
Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/hobby', [HobbyController::class, 'index']);
Route::get('/keluarga', [KeluargaController::class, 'index']);
Route::get('/matakuliah', [MataKuliahController::class, 'index']);
