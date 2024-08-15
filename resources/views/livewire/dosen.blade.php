<section class="flex flex-col w-full items-center justify-center mt-40">
    <h1 class="text-black font-bold text-5xl sm:text-6xl">Dosen</h1>
    <x-dosen.kaprodi.index :$kaprodi />
    @if(Request::routeIs('main.dosen'))
        <x-dosen.list.index :$dosen />
    @endif
</section>