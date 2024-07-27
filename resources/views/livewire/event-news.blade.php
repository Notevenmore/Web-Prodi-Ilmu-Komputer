<div class="mb-20">
    @if(Request::routeIs('main.berita'))
        <x-event-news-banner :img="$news['img']" />
    @endif
    <section class="flex flex-col w-[80vw] ps-[147px] mt-[147px] gap-[48px]">
        <x-title :title="'Berita'" />
        <livewire:news />
    </section>
    <section class="flex flex-col w-[80vw] ps-[147px] mt-[147px] gap-[48px]">
        <x-title :title="'Agenda & Acara'" />
        <livewire:event />
    </section>
</div>
