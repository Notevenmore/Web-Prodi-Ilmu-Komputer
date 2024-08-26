<?php

namespace App\Models;

class Alumni {
    public $name;
    public $studies_position;
    public $year;
    public $work_position;
    public $img;
    public $quotes;

    public function __construct($name, $studies_position, $year, $work_position, $img, $quotes) {
        $this->name = $name;
        $this->studies_position = $studies_position;
        $this->year = $year;
        $this->work_position = $work_position;
        $this->img = $img;
        $this->quotes = $quotes;
    }

    // convert ke array sederhana agar bisa diterima oleh livewire
    public function toArray() {
        return [
            'name' => $this->name,
            'studies_position' => $this->studies_position,
            'year' => $this->year,
            'work_position' => $this->work_position,
            'img' => $this->img,
            'quotes' => $this->quotes,
        ];
    }

    public static function all(){
        // data alumni
        $daftarAlumni = [
          [
            'name' => "Megandi",
            'studies_position' => "Alumni Ilmu Komputer",
            'year' => "2020",
            'work_position' => "Founder dan Chief Executive Office PT Jaya Pirata Dinamika (Intiva.id)",
            'img' => 'alumni.jpeg',
            'quotes' => '"Membangun sebuah bisnis merupakan target dan visi yang sudah saya tetapkan sejak berkuliah di UPer. Banyak sekali materi di perkuliahan yang bisa saya terapkan dalam merintis startup ini. Mulai dari manajemen proyek, mengikuti best practice dalam membangun proyek, dan tentunya ilmu entrepreneurship. Berkuliah di Universitas Pertamina memberikan saya banyak kesempatan untuk mengembangkan diri saya, memperbanyak koneksi, dan memperkaya pengalaman. Dengan pengalaman dan ilmu yang saya dapatkan di kampus maupun di luar kampus, saya bersama kelima rekan mulai membangun bisnis dari nol. Saat ini saya menjadi Founder dan Chief Executive Officer PT Jaya Pirata Dinamika (Intiva.id). Sebuah perusahaan rintisan yang bergerak di bidang pengembangan produk mulai dari pembuatan sistem sampai maintenance berkelanjutan."'
          ],
          [
            'name' => "Megandi",
            'studies_position' => "Alumni Ilmu Komputer",
            'year' => "2020",
            'work_position' => "Founder dan Chief Executive Office PT Jaya Pirata Dinamika (Intiva.id)",
            'img' => 'alumni.jpeg',
            'quotes' => '"Membangun sebuah bisnis merupakan target dan visi yang sudah saya tetapkan sejak berkuliah di UPer. Banyak sekali materi di perkuliahan yang bisa saya terapkan dalam merintis startup ini. Mulai dari manajemen proyek, mengikuti best practice dalam membangun proyek, dan tentunya ilmu entrepreneurship. Berkuliah di Universitas Pertamina memberikan saya banyak kesempatan untuk mengembangkan diri saya, memperbanyak koneksi, dan memperkaya pengalaman. Dengan pengalaman dan ilmu yang saya dapatkan di kampus maupun di luar kampus, saya bersama kelima rekan mulai membangun bisnis dari nol. Saat ini saya menjadi Founder dan Chief Executive Officer PT Jaya Pirata Dinamika (Intiva.id). Sebuah perusahaan rintisan yang bergerak di bidang pengembangan produk mulai dari pembuatan sistem sampai maintenance berkelanjutan."'
          ],
          [
            'name' => "Megandi",
            'studies_position' => "Alumni Ilmu Komputer",
            'year' => "2020",
            'work_position' => "Founder dan Chief Executive Office PT Jaya Pirata Dinamika (Intiva.id)",
            'img' => 'alumni.jpeg',
            'quotes' => '"Membangun sebuah bisnis merupakan target dan visi yang sudah saya tetapkan sejak berkuliah di UPer. Banyak sekali materi di perkuliahan yang bisa saya terapkan dalam merintis startup ini. Mulai dari manajemen proyek, mengikuti best practice dalam membangun proyek, dan tentunya ilmu entrepreneurship. Berkuliah di Universitas Pertamina memberikan saya banyak kesempatan untuk mengembangkan diri saya, memperbanyak koneksi, dan memperkaya pengalaman. Dengan pengalaman dan ilmu yang saya dapatkan di kampus maupun di luar kampus, saya bersama kelima rekan mulai membangun bisnis dari nol. Saat ini saya menjadi Founder dan Chief Executive Officer PT Jaya Pirata Dinamika (Intiva.id). Sebuah perusahaan rintisan yang bergerak di bidang pengembangan produk mulai dari pembuatan sistem sampai maintenance berkelanjutan."'
          ],
        ];

        // ubah jadi collections
        $dataAlumni = [];
        foreach ($daftarAlumni as $alumni) {
            $dataAlumni[] = new self($alumni['name'], $alumni['studies_position'], $alumni['year'], $alumni['work_position'], $alumni['img'], $alumni['quotes']);
        }

        return $dataAlumni;
    }
}