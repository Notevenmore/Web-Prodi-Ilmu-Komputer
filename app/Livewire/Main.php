<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Main extends Component
{
    #[Title('Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.main');
    }
}
