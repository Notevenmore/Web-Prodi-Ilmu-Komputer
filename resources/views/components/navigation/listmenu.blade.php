<div class="px-4 text-lg">
    <ul class="flex items-center gap-[2vw]">
        <x-navigation.menu :routes="'main.index'" :label="'Beranda'" />
        <x-navigation.menu :routes="'main.akademik'" :label="'Akademik'" />
        <x-navigation.menu :routes="'main.fasilitas'" :label="'Fasilitas'" />
        <x-navigation.menu :routes="'main.berita'" :label="'Agenda & Berita'" />
        <li>
            <div class="group flex flex-col items-center xl:text-base text-sm">
                <a href="" class=" group-hover:text-gray-700 text-black font-medium">Kontak</a>
                <div class=" w-0 group-hover:w-10 xl:group-hover:w-14 duration-300 rounded-xl bg-red-600 h-1"></div>
            </div>
        </li>
    </ul>
</div>