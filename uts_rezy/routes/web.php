<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\obatcontroller;

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

// Data siswa
Route::get('/jual_obat/', [obatcontroller::class, 'index'])->middleware('auth');
Route::get('/jual_obat/form/', [obatcontroller::class, 'create'])->middleware('auth');
