<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data Penjualan Obat
Route::get('/jual/', [ObatController::class, 'index'])->middleware('auth');
Route::get('/jual/form/', [ObatController::class, 'create'])->middleware('auth');
Route::post('/jual/store/', [ObatController::class, 'store'])->middleware('auth');
Route::get('/jual/edit/{id}', [ObatController::class, 'edit'])->middleware('auth');
Route::put('/jual/{id}', [ObatController::class, 'update'])->middleware('auth');
Route::delete('/jual/{id}', [ObatController::class, 'destroy'])->middleware('auth');
