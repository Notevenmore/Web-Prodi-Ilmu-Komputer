<?php

namespace App\Models;

class Peminatan {
    public $title;
    public $description;
    public $image;

    public function __construct($title, $description, $image) {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
    }

    // convert ke array sederhana agar bisa diterima oleh livewire
    public function toArray() {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image
        ];
    }

    public static function all(){
        // data peminatan
        $dataPeminatan = [
            [
                "title" => "Artificial Intellegence",
                "description" => "Menjadi Program Studi Ilmu Komputer unggulan berskala internasional dalam bidang sains data dan rekayasa perangkat lunak yang berkontribusi nyata di bidang energi.",
                "image" => "/img/visi-img.png"],
            [
                "title" => "Data Science",
                "description" => "Dalam mencapai visi yang telah dirancang, kami akan mengemban misi:",
                "image" => "/img/misi-img.png"],
            [
                "title" => "Website Development",
                "description" => "Tujuan dari program studi ilmu komputer mengarahkan kepada pencapaian sebagai berikut:",
                "image" => "/img/tujuan-img.png"
            ],
            [
                "title" => "Mobile Development",
                "description" => "Terdapat berbagai peminatan yang dapat dikembangkan dalam program studi ilmu komputer universitas Pertamina yaitu sebagai berikut:",
                "image" => "/img/tujuan-img.png"
            ]
        ];

        // ubah jadi collections
        $dataPeminatanCollection = [];
        foreach ($dataPeminatan as $peminatan) {
            $dataPeminatanCollection[] = new self($peminatan['title'], $peminatan['description'], $peminatan['image']);
        }

        return $dataPeminatanCollection;
    }
}
