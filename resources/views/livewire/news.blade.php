<section class="flex flex-col w-[85vw] lg:w-[75vw] 2xl:w-[85vw] gap-7 lg:gap-12">
  <x-title :title="'Berita'" />
  <section class="flex flex-col @if(Request::routeIs('main.index')) md:flex-row @elseif(Request::routeIs('main.berita')) lg:flex-row @endif w-[85vw] lg:w-[75vw] 2xl:w-[85vw]  max-2xl:lg:max-h-[112rem] gap-7 lg:gap-12 justify-stretch items-stretch">
    @if(Request::routeIs('main.index'))
      <x-req-index.news.top :news="$news[0]" />
    @elseif(Request::routeIs('main.berita'))
      <x-req-berita.news.top :$news />
    @endif
    <div class="flex gap-2 sm:gap-12 md:gap-2 lg:gap-12 items-start">
      @if(Request::routeIs('main.index'))
        <x-req-index.news.top-two :$news />
      @endif
      <div class="w-full lg:max-h-full sm:w-auto flex flex-col justify-stretch gap-5" @if(Request::routeIs('main.berita')) style="align-items: start;" @endif>
        @if(Request::routeIs('main.berita'))
          <x-req-berita.news.search />
          <x-title :title="'Berita terkini'" :fontSize=24 :marginBottom=24/>
        @endif
        <x-news.lists :$news />
      </div>
    </div>
  </section>
</section>
