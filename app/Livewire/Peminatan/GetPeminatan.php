<?php

namespace App\Livewire\Peminatan;

use App\Models\Peminatan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class GetPeminatan extends Component
{

    public $peminatans;

    public function mount(){
        /// Ambil data peminatan dari model Peminatan dan konversi ke array sederhana
        $this->peminatans = array_map(function($peminatan) {
            return $peminatan->toArray();
        }, Peminatan::all());
    }

    public function render()
    {
        return view('livewire.peminatan.get-peminatan');
    }
}
