<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
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

Route::group(['prefix' => 'mahasiswa', 'as' => 'mahasiswa.'], function(){
    Route::get('/', [MahasiswaController::class, 'index'])->name('home');
});

//home
Route::get('/', [MahasiswaController::class, 'index'])->name('home');

//buat
Route::get('/buat', [MahasiswaController::class, 'create'])->name('mahasiswa.tambah-data');
Route::post('/buat-data', [MahasiswaController::class, 'store'])->name('mahasiswa.buat-data');

//edit
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

//detail
Route::get('/detail/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

//delete
Route::delete('/delete/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');