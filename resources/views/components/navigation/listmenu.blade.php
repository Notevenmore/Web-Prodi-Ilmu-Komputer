<div class="px-4 text-lg">
    <ul class="flex items-center gap-[2vw]">
        <x-navigation.menu :routes="'main.index'" :label="'Beranda'" />
        <x-navigation.menu :routes="'main.akademik'" :label="'Akademik'" />
        <x-navigation.menu :routes="'main.fasilitas'" :label="'Fasilitas'" />
        <x-navigation.menu :routes="'main.berita'" :label="'Agenda & Berita'" />
        <x-navigation.menu :routes="'main.profile'" :label="'Kontak'" />
    </ul>
</div>