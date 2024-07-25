<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Dosen extends Component
{
    private $lectures = [
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Ketua Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Intelligent Communication Systems And Networks',
                'Machine Learning',
                'Internet of Things (IOT)',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
        [
            'nama' => 'Ade Irawan, Ph.D',
            'email' => 'Adeirawan@universitaspertamina.ac.id',
            'posisi' => 'Dosen Program Studi Ilmu Komputer',
            'img' => 'img/dosen.png',
            'keahlian' => [
                'Pengantar Teknologi Informasi',
                'Algoritma Probabilitas',
                'Statistika',
                'Jaringan Komputer',
                'Sistem Cerdas',
            ],
        ],
    ];

    private function getDosen($posisi) {
        $dosen = [];
        foreach($this->lectures as $lecture) {
            if($lecture['posisi'] == $posisi){
                array_push($dosen, $lecture);
            }
        }
        return $dosen;
    }

    #[Title('Dosen | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        $kaprodi = $this->getDosen('Ketua Program Studi Ilmu Komputer')[0];
        $dosen = $this->getDosen('Dosen Program Studi Ilmu Komputer');
        
        return view('livewire.dosen')->with([
            'kaprodi' => $kaprodi,
            'dosen' => $dosen,
        ]);
    }
}
