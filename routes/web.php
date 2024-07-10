<?php

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
Route::controller(\App\Http\Controllers\IlmuKomputerController::class)->name('main.')->group(function(){
    Route::get('/prodi/ilmu-komputer', 'index')->name('index');
    Route::get('/prodi/ilmu-komputer/akademik', 'akademik')->name('akademik');
    Route::get('/prodi/ilmu-komputer/fasilitas', 'fasilitas')->name('fasilitas');
});
Route::get('/', function () {
    return redirect()->route('main.index');
});
