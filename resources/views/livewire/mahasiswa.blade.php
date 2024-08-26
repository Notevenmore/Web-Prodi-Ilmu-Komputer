<section class="flex flex-col w-full px-5 md:px-9 lg:px-24 gap-10 md:gap-20 justify-center my-20">
    <div class="gap-4 flex flex-col">
        <x-title :title="'Mahasiswa'"  />
        <p class="text-justify">Mahasiswa Program Studi Ilmu Komputer Universitas Pertamina fokus pada bidang data dan pengembangan software, di mana mereka terlibat dalam analisis data serta pengembangan aplikasi dan sistem perangkat lunak. Dengan keahlian ini, mereka dipersiapkan untuk menghadapi tantangan teknologi modern dan berkontribusi dalam berbagai sektor industri yang memerlukan solusi berbasis data dan teknologi.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 items-stretch justify-items-stretch justify-center gap-5 md:gap-10">
        @foreach($kegiatans as $kegiatan)
            <div class="bg-[#f5f5f5] w-full h-full flex flex-col">
                <img src="{{ asset('img/'.$kegiatan['documentation_img']) }}" alt="" class="w-full h-full rounded-2xl">
                <div class="flex flex-col gap-4 p-3">
                    <div class="flex flex-col gap-1">
                        <h1 class="font-bold text-base">{{ $kegiatan['corporation_name'] }}</h1>
                        <h2 class="font-medium text-xs">{{ $kegiatan['category'] }}</h2>
                    </div>
                    <p class="font-medium text-xs text-justify">
                        {{ implode(' ', array_slice(explode(' ', $kegiatan['description']), 0, 50)) }}
                        <a href="" class=" underline text-[#0C82E3]">Selengkapnya</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>