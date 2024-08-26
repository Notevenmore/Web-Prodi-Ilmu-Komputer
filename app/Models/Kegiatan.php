<?php

namespace App\Models;

class Kegiatan {
    public $category;
    public $corporation_name;
    public $description;
    public $documentation_img;

    public function __construct($category, $corporation_name, $description, $documentation_img) {
      $this->category = $category;
      $this->corporation_name = $corporation_name;
      $this->description = $description;
      $this->documentation_img = $documentation_img;
    }

    // convert ke array sederhana agar bisa diterima oleh livewire
    public function toArray() {
        return [
            'category' => $this->category,
            'description' => $this->description,
            'corporation_name' => $this->corporation_name,
            'documentation_img' => $this->documentation_img
        ];
    }

    public static function all(){
        // data peminatan
        $dataKegiatan = [
            [
              'category' => 'Kunjungan Industri',
              'corporation_name' => "PT.Telkom Indonesia",
              'description' => "Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform. Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform.",
              'documentation_img' => "Card-horizontal4.png",
            ],
            [
              'category' => 'Pengabdian Masyarakat',
              'corporation_name' => "PT.Telkom Indonesia",
              'description' => "Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform. Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform.",
              'documentation_img' => "Card-horizontal4.png",
            ],
            [
              'category' => 'Kunjungan Industri',
              'corporation_name' => "PT.Telkom Indonesia",
              'description' => "Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform. Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform.",
              'documentation_img' => "Card-horizontal4.png",
            ],
            [
              'category' => 'Kunjungan Industri',
              'corporation_name' => "PT.Telkom Indonesia",
              'description' => "Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform. Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform.",
              'documentation_img' => "Card-horizontal4.png",
            ],
            [
              'category' => 'Kunjungan Industri',
              'corporation_name' => "PT.Telkom Indonesia",
              'description' => "Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform. Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform.",
              'documentation_img' => "Card-horizontal4.png",
            ],
            [
              'category' => "Kunjungan Industri",
              'corporation_name' => "PT.Telkom Indonesia",
              'description' => "Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform. Kunjungan Industri merupakan agenda rutin tahunan Program Studi Ilmu Komputer Universitas Pertamina yang harapannya dapat menambah wawasan mahasiswa terkait dunia industri. Untuk kunjungan industri kali ini berfokus pada proses bisnis pengolahan data di BigBox, salah satu perusahaan spinoff dari PT Telkom Indonesia yang mengurusi end-to-end Data Management & Analytics Platform.",
              'documentation_img' => "Card-horizontal4.png",
            ],
        ];

        // ubah jadi collections
        $dataKegiatanCollection = [];
        foreach ($dataKegiatan as $kegiatan) {
            $dataKegiatanCollection[] = new self($kegiatan['category'], $kegiatan['corporation_name'], $kegiatan['description'], $kegiatan['documentation_img']);
        }

        return $dataKegiatanCollection;
    }
}