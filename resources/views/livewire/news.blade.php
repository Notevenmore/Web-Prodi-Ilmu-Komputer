<section class="flex flex-col w-[85vw] lg:w-[75vw] 2xl:w-[85vw] gap-7 lg:gap-12">
  <x-title :title="'Berita'" />
  <section class="flex flex-col md:flex-row w-[85vw] lg:w-[75vw] 2xl:w-[85vw] gap-7 lg:gap-12">
    {{-- @if(Request::routeIs('main.berita')) style="width: 60vw;" @endif --}}
    @if(Request::routeIs('main.index'))
      <x-req-index.news.top :news="$news[0]" />
    @elseif(Request::routeIs('main.berita'))
      <x-req-berita.news.top :$news />
    @endif
    <div class="flex gap-2 sm:gap-12 md:gap-2 lg:gap-12 items-start">
      @if(Request::routeIs('main.index'))
        <x-req-index.news.top-two :$news />
      @endif
      <div class="w-[9rem] sm:w-auto flex flex-col gap-5" @if(Request::routeIs('main.berita')) style="align-items: start;" @endif>
        @if(Request::routeIs('main.berita'))
          <x-req-berita.news.search />
          <x-title :title="'Berita terkini'" :fontSize=24 :marginBottom=24/>
        @endif
        <x-news.lists :$news />
      </div>
    </div>
  </section>
</section>
