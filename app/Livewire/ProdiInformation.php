<?php

namespace App\Livewire;

use App\Models\Peminatan;
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

    private $prodi_peminatan = [];

    public function render()
    {
        $peminatans = Peminatan::all();
        foreach($peminatans as $peminatan) {
            array_push($this->prodi_peminatan, $peminatan->toArray());
        }
        return view('livewire.prodi-information')->with([
            'prodi_information' => $this->prodi_information,
            'prodi_peminatan' => $this->prodi_peminatan, 
        ]);
    }
}
