<?php

namespace App\Livewire;

use App\Models\Kegiatan;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Mahasiswa extends Component
{
    private $kegiatans = [];

    public function mount() {
        $kegiatans = Kegiatan::all();
        foreach($kegiatans as $kegiatan) {
            array_push($this->kegiatans, $kegiatan->toArray());
        }
    }

    #[Title('Mahasiswa | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.mahasiswa')->with([
            'kegiatans' => $this->kegiatans
        ]);
    }
}
