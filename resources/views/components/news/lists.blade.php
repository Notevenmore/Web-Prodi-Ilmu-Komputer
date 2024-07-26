@props(['news'])
<ul class="flex flex-col gap-3" @if(Request::routeIs('main.berita')) style="gap: 24px;" @endif>
    @php $start = 3 @endphp
    @if(Request::routeIs('main.berita'))
      @php
        $start = 5   
      @endphp
    @endif
    @for($i = $start; $i <= 10; $i++ )
      <li>
        <div class="list" @if(Request::routeIs('main.berita')) style="gap: 16px;" @endif>
          <img @if(Request::routeIs('main.index')) class="" @elseif(Request::routeIs('main.berita')) class="menu" @endif src="{{ asset($news[$i]['img']) }}" alt="">
          <div class=" flex flex-col gap-1 mt-1">
            @if(Request::routeIs('main.index'))
              <x-date :date="$news[$i]['date']" :textColor="'text-biru'" :svgColor="'red'" />
              <h3 class="text-biru font-semibold">{{ $news[$i]['title'] }}</h3>
            @else
              <h3>{{ $news[$i]['date'] }}</h3>
              <h3>{{ $news[$i]['title'] }}</h3>
            @endif
          </div>
        </div>
        @if(Request::routeIs('main.index'))
          <hr class="w-60 bg-black">
        @endif
      </li>
    @endfor
</ul>