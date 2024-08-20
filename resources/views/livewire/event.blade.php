<section class="flex flex-col w-[85vw] lg:w-[75vw] 2xl:w-[85vw] gap-7 lg:gap-12">
  <x-title :title="'Agenda & Acara'" />
  <section class="flex flex-col @if(Request::routeIs('main.index')) md:flex-row @endif w-[60vw] sm:w-[85vw] lg:w-[75vw] 2xl:w-[85vw] gap-5 lg:gap-12">
    <div class="grid grid-cols-2 md:grid-cols-3 justify-items-stretch justify-stretch gap-7 w-[85vw] @if(Request::routeIs('main.index'))md:w-[100vw] lg:w-[95vw] @elseif(Request::routeIs('main.berita'))md:w-[90vw] lg:w-[75vw] @endif 2xl:w-full h-full">
      @foreach(array_slice($events, 0, 3) as $event)
        @if(Request::routeIs('main.index'))
          <div class="bg-white shadow-[0_4px_8px_0_rgba(0,0,0,0.25)] rounded-3xl p-[10px] sm:p-[20px] w-full h-full @if($loop->last) max-md:hidden @endif">
            <x-req-index.events.index :$event :textColor="'text-biru'" :svgColor="'red'" />
          </div>
        @elseif(Request::routeIs('main.berita'))
          <div class="bg-white shadow-[0_4px_8px_0_rgba(0,0,0,0.25)] rounded-3xl p-[10px] sm:p-[20px] w-full h-full @if($loop->last) max-md:hidden @endif">
            <x-req-index.events.index :$event :textColor="'text-biru'" :svgColor="'red'" />
          </div>
        @endif
      @endforeach
    </div>
    @if(Request::routeIs('main.berita') && count($events) > 3)
      <div class="flex flex-col gap-10 w-[85vw] md:w-[90vw] lg:w-[75vw]">
        @foreach(array_slice($events, 2) as $event)
          <x-req-berita.events.index :$event />
        @endforeach
      </div>
    @endif
  </section>
</section>