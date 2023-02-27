<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('/product')->group(callback: function () {
    Route::get('/', [ProductController::class, 'index']);
});

Route::get('/news/{page}', [NewsController::class, 'index']);

Route::prefix('/program')->group(function () {
    Route::get('/', [ProgramController::class, 'index']);
});

Route::get('/about-us', [AboutUsController::class, 'index']);

Route::resource('/contact-us', ContactUsController::class);
