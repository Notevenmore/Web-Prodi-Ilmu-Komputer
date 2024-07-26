<?php

use App\Http\Controllers\IlmuKomputerController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dosen;
use App\Livewire\EventNews;
use App\Livewire\Akademik;
use App\Livewire\Fasilitas;

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
Route::controller(\App\Http\Controllers\IlmuKomputerController::class)->name('main.')->group(function(){
});

Route::get('/prodi/ilmu-komputer', [IlmuKomputerController::class, 'index'])->name('main.index');
Route::get('/prodi/ilmu-komputer/akademik', Akademik::class)->name('main.akademik');
Route::get('/prodi/ilmu-komputer/dosen', Dosen::class)->name('main.dosen');
Route::get('/prodi/ilmu-komputer/berita', EventNews::class)->name('main.berita');
Route::get('/prodi/ilmu-komputer/fasilitas', Fasilitas::class)->name('main.fasilitas');
Route::get('/', function () {
    return redirect()->route('main.index');
});
