<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IlmuKomputerController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Prodi Ilmu Komputer',
        ]);
    }
    
    public function akademik() {
        
        return view('akademik', [
            'title' => 'Akademik | Prodi Ilmu Komputer',
        ]);
    }

    public function fasilitas() {
        return view('fasilitas', [
            'title' => 'Fasilitas | Prodi Ilmu Komputer',
        ]);
    }
    
}
