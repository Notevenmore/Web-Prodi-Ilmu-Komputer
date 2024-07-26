<section class="flex flex-col w-[80vw] gap-10">
  <div class="grid grid-flow-row grid-cols-3 justify-stretch gap-10 w-[80vw]">
    @foreach(array_slice($events, 0, 3) as $event)
      @if(Request::routeIs('main.index'))
        <div class="bg-[#F8FCDA] rounded-3xl p-[20px]">
          <x-req-index.events.index :$event :textColor="'text-biru'" :svgColor="'red'" />
        </div>
      @elseif(Request::routeIs('main.berita'))
        <x-req-index.events.index :$event :textColor="'text-black'" :svgColor="'black'" />
      @endif
    @endforeach
  </div>
  @if(Request::routeIs('main.berita') && count($events) > 3)
    <div class="flex flex-col gap-10">
      @foreach(array_slice($events, 2) as $event)
        <x-req-berita.events.index :$event />
      @endforeach
    </div>
  @endif
</section>