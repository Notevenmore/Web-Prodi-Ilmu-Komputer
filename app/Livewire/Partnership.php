<?php

namespace App\Livewire;

use Livewire\Component;

class Partnership extends Component
{
    private $partner = [
        [
            'name' => 'Pertamina',
            'image' => 'img/Pertamina.png',
        ],
        [
            'name' => 'Pertamina Foundation',
            'image' => 'img/Pertamina Foundation.png',
        ],
        [
            'name' => 'Universitas Pertamina',
            'image' => 'img/Universitas Pertamina.png',
        ],
    ];
    public function render()
    {
        return view('livewire.partnership')->with([
            'partners' => $this->partner,
        ]);
    }
}
