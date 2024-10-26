<?php

use App\Livewire\About;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dosen;
use App\Livewire\EventNews;
use App\Livewire\Akademik;
use App\Livewire\Alumni;
use App\Livewire\DetailDosen;
use App\Livewire\Fasilitas;
use App\Livewire\Mahasiswa;
use App\Livewire\Main;
use App\Livewire\News;

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

Route::get('/prodi/ilmu-komputer', Main::class)->name('main.index');
Route::get('/prodi/ilmu-komputer/akademik', Akademik::class)->name('main.akademik');
Route::get('/prodi/ilmu-komputer/dosen', Dosen::class)->name('main.dosen');
Route::get('/prodi/ilmu-komputer/berita', EventNews::class)->name('main.berita');
Route::get('/prodi/ilmu-komputer/berita/{id}', News::class)->name('detail.berita');
Route::get('/prodi/ilmu-komputer/fasilitas', Fasilitas::class)->name('main.fasilitas');
Route::get('/prodi/ilmu-komputer/dosen/{id}', DetailDosen::class)->name('detail.dosen');
Route::get('/prodi/ilmu-komputer/kegiatan', Mahasiswa::class)->name('main.mahasiswa');
Route::get('/prodi/ilmu-komputer/alumni', Alumni::class)->name('main.alumni');
Route::get('/prodi/ilmu-komputer/profile', About::class)->name('main.profile');
Route::get('/', function () {
    return redirect()->route('main.index');
});
