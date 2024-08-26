<?php

namespace App\Livewire;

use Livewire\Component;

class ProdiPublicInformation extends Component
{
    private $kemahasiswaan;
    private $alumni;

    public function mount() {
        $this->kemahasiswaan = [
            'title' => 'Kemahasiswaan',
            'description' => 'pariatur, quasi, quas debitis a eligendi esse, cumque impedit? Veritatis assumenda ut iste, corporis quo laudantium sint officia alias error praesentium magni eligendi ipsa quia cupiditate distinctio architecto mollitia libero facilis rerum numquam perspiciatis illo laboriosam. Harum provident, inventore illum et, laudantium sunt dolores velit neque veniam, cupiditate deleniti magnam! Similique, nam? Porro maiores beatae laboriosam totam ullam, et eum repellat tempore ea, velit temporibus necessitatibus cupiditate culpa recusandae consectetur numquam qui! Nostrum veniam praesentium voluptas alias adipisci libero earum, est exercitationem facilis qui provident!',
            'link' => route('main.mahasiswa'),
            'img' => 'img/kemahasiswaan.png'
        ];
        $this->alumni = [
            'title' => 'Alumni',
            'description' => 'pariatur, quasi, quas debitis a eligendi esse, cumque impedit? Veritatis assumenda ut iste, corporis quo laudantium sint officia alias error praesentium magni eligendi ipsa quia cupiditate distinctio architecto mollitia libero facilis rerum numquam perspiciatis illo laboriosam. Harum provident, inventore illum et, laudantium sunt dolores velit neque veniam, cupiditate deleniti magnam! Similique, nam? Porro maiores beatae laboriosam totam ullam, et eum repellat tempore ea, velit temporibus necessitatibus cupiditate culpa recusandae consectetur numquam qui! Nostrum veniam praesentium voluptas alias adipisci libero earum, est exercitationem facilis qui provident!',
            'link' => route('main.alumni'),
            'img' => 'img/bg-alumni.png'
        ];
    }
    public function render()
    {
        return view('livewire.prodi-public-information')->with([
            'kemahasiswaan' => $this->kemahasiswaan,
            'alumni' => $this->alumni,
        ]);
    }
}
