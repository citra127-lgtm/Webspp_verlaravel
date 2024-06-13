<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\siswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sppController;
use App\Models\admin;
use App\Models\Pembayaran;
use Illuminate\Auth\Events\Login;

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
    return view('coba');
});

Route::get('/spp',[sppController::class, 'index'])->middleware('auth');
Route::get('/spp/create',[sppController::class, 'create']);
Route::post('/spp/input',[sppController::class, 'input']);
Route::get('/spp/{id}/edit/',[sppController::class, 'edit']);
Route::put('/spp/{id}',[sppController::class, 'update']);
Route::delete('/spp/{id}',[sppController::class, 'destroy']);
Route::get('/spp/create', [sppController::class, 'createForm']);



Route::get('/pembayaran', [PembayaranController::class, 'index2']);
Route::get('/pembayaran/create2',[PembayaranController::class, 'create2']);
Route::post('/pembayaran/input2', [PembayaranController::class, 'input2']);
Route::get('/pembayaran/{id}/edit2/',[PembayaranController::class, 'edit2']);
Route::put('/pembayaran/{id}',[PembayaranController::class, 'update']);
Route::delete('/pembayaran/{id}',[PembayaranController::class, 'destroy']);
Route::get('/pembayaran/index2', [PembayaranController::class,'search']);



Route::get('/Login/Login', [LoginController::class, 'index']);
Route::post('/Login/Login', [LoginController::class, 'authenticate']);


Route::get('/Register/Register', [RegisterController::class, 'index']);
Route::post('/Register/Register', [RegisterController::class, 'store']);

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');



