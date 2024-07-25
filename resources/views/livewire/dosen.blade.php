<section id="dosen" class="flex flex-col w-full items-center">
    <section id="content-dosen">
        <x-dosen.kaprodi.index :$kaprodi />
    </section>
    @if(Request::routeIs('main.dosen'))
        <section id="list-dosen">
            <x-dosen.list.index :$dosen/>
        </section>
    @endif
</section>