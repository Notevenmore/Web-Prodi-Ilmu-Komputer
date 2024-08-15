<div class="mb-20 w-screen grid grid-cols-1 justify-items-center justify-center gap-[147px] mt-[147px] h-auto">
    @if(Request::routeIs('main.berita'))
        <x-event-news-banner :img="$news['img']" />
    @endif
    <section class="flex row-start-1 flex-col gap-[48px] w-full items-center">
        <livewire:news />
    </section>
    <section class="flex row-start-2 flex-col gap-[48px] w-full items-center">
        <livewire:event />
    </section>
</div>
