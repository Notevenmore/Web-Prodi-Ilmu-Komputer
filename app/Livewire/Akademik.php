<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Akademik extends Component
{
    private $list_matkul = [
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

    #[Title('Akademik | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.akademik')->with([
            'semesters' => $this->list_matkul,
            'key' => ['Kode', 'Mata Kuliah', 'SKS'],
        ]);
    }
}
