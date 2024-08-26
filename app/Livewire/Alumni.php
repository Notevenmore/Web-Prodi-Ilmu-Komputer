<?php

namespace App\Livewire;

use App\Models\Alumni as ModelsAlumni;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Alumni extends Component
{
    private $list_alumni = [];

    public function mount() {
        $list_alumni = ModelsAlumni::all();
        foreach($list_alumni as $alumni) {
            array_push($this->list_alumni, $alumni->toArray());
        }
    }

    #[Title('Alumni | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.alumni')->with([
            'alumnis' => $this->list_alumni,
        ]);
    }
}
