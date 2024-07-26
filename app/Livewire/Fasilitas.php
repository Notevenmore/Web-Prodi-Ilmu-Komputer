<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Fasilitas extends Component
{
    private $fasilitas = [
        'img/Card.png', 
        'img/Card-horizontal1.png',
        'img/Card.png',
        'img/Card-horizontal2.png',
        'img/card-vertical.png',
        'img/Card-horizontal3.png',
        'img/iphone.png',
        'img/Card-horizontal4.png'
    ];

    #[Title('Dosen | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.fasilitas')->with([
            'fasilitas' => $this->fasilitas,
        ]);
    }
}
