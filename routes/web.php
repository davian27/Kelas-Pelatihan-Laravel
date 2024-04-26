<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('siswa', function() {
//     return view('pertemuan3.index');
// });

// Route::get('siswa/create', function() {
//     return view('pertemuan3.create');
// });

// Route::get('siswa/detail', function() {
//     return view('pertemuan3.detail');
// });
// Route::get('siswa/edit', function() {
//     return view('pertemuan3.edit');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/data-siswa',SiswaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
