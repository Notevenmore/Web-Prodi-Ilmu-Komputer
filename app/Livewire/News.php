<?php

namespace App\Livewire;

use App\Models\News as ModelsNews;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class News extends Component
{
    private $news = [];
    private $useId = false;
    public function mount($id = null) {
        $newsCollection = ModelsNews::all();
        if($id == null) {
            foreach($newsCollection as $news) {
                array_push($this->news, $news->toArray());
            }
        } else {
            $this->useId = true;
            $this->news = $newsCollection[$id-1]->toArray();
        }
    }
    
    #[Title('Agenda & Acara | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function renderwithId() {
        return view('livewire.detailnews')->with([
            'news' => $this->news,
        ]);
    }

    public function render()
    {
        if($this->useId) {
            return $this->renderwithId();
        } else {
            return view('livewire.news')->with([
                'news' => $this->news,
            ]);
        }
    }
}
