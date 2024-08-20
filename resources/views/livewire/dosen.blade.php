<section class="flex flex-col w-full @if(Request::routeIs('main.index')) items-center @elseif(Request::routeIs('main.dosen')) px-3 xl:px-24 gap-20 @endif justify-center mt-40">
    @if(Request::routeIs('main.index'))
        <h1 class="text-black font-bold text-5xl sm:text-6xl">Dosen</h1>
        <x-dosen.kaprodi.index :$kaprodi />
    @elseif(Request::routeIs('main.dosen'))
        <div class="gap-4 flex flex-col">
            <x-title :title="'Daftar Dosen'"  />
            <p class="text-justify">Dosen Ilmu Komputer memiliki banyak pengalaman, terutama dalam Rekayasa Perangkat Lunak, Machine Learning, dan Pemodelan Matematika. Dengan kemampuan mengajar hingga tingkat S3, Dosen-Dosen Ilmu Komputer mampu memberikan pendidikan yang relevan dengan perkembangan zaman.</p>
        </div>
        <x-dosen.list.index :$dosen />
    @endif
</section>