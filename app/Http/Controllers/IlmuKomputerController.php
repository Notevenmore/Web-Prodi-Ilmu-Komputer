<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IlmuKomputerController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Prodi Ilmu Komputer'
        ]);
    }
}
