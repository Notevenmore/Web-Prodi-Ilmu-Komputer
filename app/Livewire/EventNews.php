<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\News as ModelsNews;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class EventNews extends Component
{
    private $news = [];
    public function mount() {
        $newsCollection = ModelsNews::all();
        foreach($newsCollection as $news) {
            array_push($this->news, $news->toArray());
        }
    }

    #[Title('Agenda & Acara | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.event-news')->with([
            'news' => $this->news[0],
        ]);
    }
}
