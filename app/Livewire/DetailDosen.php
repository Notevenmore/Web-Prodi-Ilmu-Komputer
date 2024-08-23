<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class DetailDosen extends Component
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
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
            'biografi' => 'Ade Irawan received the B.Eng. in Electrical Engineering from Institut Teknologi Bandung (ITB), Indonesia, in 2008, the MSc. (Distinguished Honor Graduate) in Information Science from Japan Advanced Institute of Science and Technology (JAIST), Japan, in 2013, and the Ph.D. in Information Science from JAIST, in 2017. From 2008 to 2009, He was with Versatile Silicon Technologies, Bandung, Indonesia, as the head of signal processing engineer. In December 2009, He joined Xirka Silicon Technology, Bandung, Indonesia, also as the head of signal processing engineer. Ade is currently a faculty member of the Department of Computer Science at Universitas Pertamina, Indonesia. He was a member of the project RESCUE (Robust, Efficient and Smart Communication in Unpredictable Environments) funded by the European Commission under the 7th Framework Programme. He has published more than 12+ contributions to journals and conferences. His primary research interests include intelligent communication systems and networks, machine learning, and Internet of Things (IoT).',
            'pendidikan' => [
                'Doktor (Ph.D.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Magister (MSc.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan',
                'Doktor (S.T.). School of Information Science, Japan Advanced Institute of Science and Technology (JAIST), Japan'
            ]
        ],
    ];

    private $lecture;

    public function mount($id)
    {
        $this->lecture = $this->lectures[$id-1];
    }

    #[Title('Detail Dosen | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.detail-dosen')->with([
            'lecture' => $this->lecture,
        ]);
    }
}
