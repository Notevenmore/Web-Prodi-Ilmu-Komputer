<?php

namespace App\Livewire;

use Livewire\Component;

class Event extends Component
{
    private $event = [
        [
            'title' => "Judul",
            "date" => "24 November 2024",
            "started" => "11:00 AM",
            'ended' => "01:00 PM",
            'location' => "Universitas Pertamina",
            'img' => 'img/Hover Berita.png',
        ],
        [
            'title' => "Judul",
            "date" => "24 November 2024",
            "started" => "11:00 AM",
            'ended' => "01:00 PM",
            'location' => "Universitas Pertamina",
            'img' => 'img/Hover Berita.png',
        ],
        [
            'title' => "Judul",
            "date" => "24 November 2024",
            "started" => "11:00 AM",
            'ended' => "01:00 PM",
            'location' => "Universitas Pertamina",
            'img' => 'img/Hover Berita.png',
        ],
        [
            'title' => "Judul",
            "date" => "24 November 2024",
            "started" => "11:00 AM",
            'ended' => "01:00 PM",
            'location' => "Universitas Pertamina",
            'img' => 'img/Hover Berita.png',
        ],
        [
            'title' => "Judul",
            "date" => "24 November 2024",
            "started" => "11:00 AM",
            'ended' => "01:00 PM",
            'location' => "Universitas Pertamina",
            'img' => 'img/Hover Berita.png',
        ],
        [
            'title' => "Judul",
            "date" => "24 November 2024",
            "started" => "11:00 AM",
            'ended' => "01:00 PM",
            'location' => "Universitas Pertamina",
            'img' => 'img/Hover Berita.png',
        ],
    ];

    public function render()
    {
        return view('livewire.event')->with([
            'events' => $this->event,
        ]);
    }
}
