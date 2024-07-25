<?php

namespace App\Livewire;

use Livewire\Component;

class ProdiInformation extends Component
{
    private $prodi_information = [
        [
            'label' => 'Total Mahasiswa',
            'value' => 128
        ],
        [
            'label' => 'Akreditasi',
            'value' => "B"
        ],
        [
            'label' => 'Total Pengajar',
            'value' => 8,
        ]
    ];

    private $prodi_peminatan = [
        [
            'nama' => 'Artificial Intelligence',
            'deskripsi' => 'Tujuan dari Program Studi Ilmu Komputer mengarah kepada pencapaian sebagai berikut: <br>
              Pengembangan kualitas pendidikan untuk menghasilkan lulusan dengan kapasitas intelektual yang tinggi dalam pengetahuan dan keahlian, yang dapat mengkonsolidasikan dan menguatkan integritas nasional. <br>
              Pengembangan kegiatan dan kualitas penelitian mahasiswa dan dosen dalam kemajuan sains dan teknologi, serta untuk mengembangkan dan memasyarakatkan sains dan teknologi yang relevan untuk mencapai kesejahteraan bangsa. <br>
              Pengembangan kegiatan pengabdian masyarakat oleh mahasiswa dan dosen untuk memberdayakan penduduk Indonesia.',
            'img' => '/img/visi-img.png',
        ],
        [
            'nama' => 'Data Science',
            'deskripsi' => 'Tujuan dari Program Studi Ilmu Komputer mengarah kepada pencapaian sebagai berikut: <br>
              Pengembangan kualitas pendidikan untuk menghasilkan lulusan dengan kapasitas intelektual yang tinggi dalam pengetahuan dan keahlian, yang dapat mengkonsolidasikan dan menguatkan integritas nasional. <br>
              Pengembangan kegiatan dan kualitas penelitian mahasiswa dan dosen dalam kemajuan sains dan teknologi, serta untuk mengembangkan dan memasyarakatkan sains dan teknologi yang relevan untuk mencapai kesejahteraan bangsa. <br>
              Pengembangan kegiatan pengabdian masyarakat oleh mahasiswa dan dosen untuk memberdayakan penduduk Indonesia.',
            'img' => '/img/misi-img.png',
        ],
        [
            'nama' => 'Website Development',
            'deskripsi' => 'Tujuan dari Program Studi Ilmu Komputer mengarah kepada pencapaian sebagai berikut: <br>
              Pengembangan kualitas pendidikan untuk menghasilkan lulusan dengan kapasitas intelektual yang tinggi dalam pengetahuan dan keahlian, yang dapat mengkonsolidasikan dan menguatkan integritas nasional. <br>
              Pengembangan kegiatan dan kualitas penelitian mahasiswa dan dosen dalam kemajuan sains dan teknologi, serta untuk mengembangkan dan memasyarakatkan sains dan teknologi yang relevan untuk mencapai kesejahteraan bangsa. <br>
              Pengembangan kegiatan pengabdian masyarakat oleh mahasiswa dan dosen untuk memberdayakan penduduk Indonesia.',
            'img' => '/img/tujuan-img.png',
        ],
        [
            'nama' => 'Mobile Development',
            'deskripsi' => 'Tujuan dari Program Studi Ilmu Komputer mengarah kepada pencapaian sebagai berikut: <br>
              Pengembangan kualitas pendidikan untuk menghasilkan lulusan dengan kapasitas intelektual yang tinggi dalam pengetahuan dan keahlian, yang dapat mengkonsolidasikan dan menguatkan integritas nasional. <br>
              Pengembangan kegiatan dan kualitas penelitian mahasiswa dan dosen dalam kemajuan sains dan teknologi, serta untuk mengembangkan dan memasyarakatkan sains dan teknologi yang relevan untuk mencapai kesejahteraan bangsa. <br>
              Pengembangan kegiatan pengabdian masyarakat oleh mahasiswa dan dosen untuk memberdayakan penduduk Indonesia.',
            'img' => '/img/tujuan-img.png',
        ],
    ];

    public function render()
    {
        return view('livewire.prodi-information')->with([
            'prodi_information' => $this->prodi_information,
            'prodi_peminatan' => $this->prodi_peminatan, 
        ]);
    }
}
