<section class="flex gap-8">
  <div class="" @if(Request::routeIs('main.berita')) style="width: 60vw;" @endif>
    @if(Request::routeIs('main.index'))
      <x-req-index.news.top :news="$news[0]" />
    @elseif(Request::routeIs('main.berita'))
      <x-req-berita.news.top :$news />
    @endif
  </div>
  <div class="flex gap-3 items-start">
    @if(Request::routeIs('main.index'))
      <x-req-index.news.top-two :$news />
    @endif
    <div class="flex flex-col gap-5" @if(Request::routeIs('main.berita')) style="align-items: start;" @endif>
      @if(Request::routeIs('main.berita'))
        <x-req-berita.news.search />
        <x-title :title="'Berita terkini'" :fontSize=24 :marginBottom=24/>
      @endif
      <x-news.lists :$news />
    </div>
   </div>
</section>