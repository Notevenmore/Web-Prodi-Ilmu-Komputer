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
        $list_matkul = [
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
        ];
        return view('akademik', [
            'title' => 'Akademik | Prodi Ilmu Komputer',
            'semesters' => $list_matkul,
        ]);
    }

    public function fasilitas() {
        return view('fasilitas', [
            'title' => 'Fasilitas | Prodi Ilmu Komputer',
        ]);
    }
    
}
