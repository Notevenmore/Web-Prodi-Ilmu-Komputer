<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class About extends Component
{
    private $profile;
    public function mount() {
        $this->profile = [
            "Universitas Pertamina, didirikan oleh PT Pertamina (Persero) pada 2016, adalah institusi pendidikan tinggi yang terletak di Simprug, Jakarta Selatan. Sebagai bagian dari Yayasan Pertamina, universitas ini bertujuan untuk menjadi pusat unggulan dalam pendidikan dan penelitian, khususnya di bidang energi, teknologi, dan lingkungan. Dengan berbagai program studi di bidang teknik dan humaniora, Universitas Pertamina berkomitmen mencetak lulusan yang siap bersaing di tingkat nasional dan internasional.",
            "Universitas Pertamina didirikan dengan tujuan untuk memenuhi kebutuhan industri energi nasional akan tenaga ahli yang kompeten dan inovatif. Salah satu program studi yang paling menonjol adalah Program Studi Ilmu Komputer, yang dibentuk sejalan dengan perkembangan pesat teknologi digital dan kebutuhan industri akan spesialis IT yang mampu mengatasi tantangan di era revolusi industri 4.0.<br>Ilmu Komputer di Universitas Pertamina fokus pada pengembangan keterampilan analitis dan teknis di bidang pemrograman, jaringan, keamanan siber, serta pengelolaan data. Sejak awal pembentukannya, program studi ini telah berkembang pesat, menawarkan kurikulum yang disesuaikan dengan tren global dan kolaborasi dengan berbagai industri untuk memastikan relevansi lulusan di pasar kerja.",
            "Visi dari Program Studi Ilmu Komputer adalah menjadi pusat unggulan dalam pendidikan, penelitian, dan pengembangan teknologi informasi yang berkontribusi pada kemajuan ilmu pengetahuan serta solusi inovatif untuk industri energi dan lingkungan. Misi program ini adalah mencetak lulusan yang memiliki kompetensi tinggi di bidang ilmu komputer, dengan kemampuan analisis dan pemecahan masalah yang relevan dengan kebutuhan industri, khususnya sektor energi.",
        ];
    }

    #[Title('Profil | Prodi Ilmu Komputer')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.about')->with([
            'profile' => $this->profile,
        ]);
    }
}
