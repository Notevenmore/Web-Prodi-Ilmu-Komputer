<section class="flex flex-col w-full items-center">
    <x-dosen.kaprodi.index :$kaprodi />
    @if(Request::routeIs('main.dosen'))
        <x-dosen.list.index :$dosen />
    @endif
</section>