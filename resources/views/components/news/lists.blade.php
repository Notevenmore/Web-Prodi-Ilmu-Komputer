@props(['news'])
<ul class="flex flex-col gap-2 md:gap-0 xl:gap-1 2xl:gap-3 w-full lg:max-h-full lg:overflow-y-scroll" @if(Request::routeIs('main.berita')) style="gap: 24px;" @endif>
    @php 
      $start = 3;
      $end =  11;
    @endphp
    @if(Request::routeIs('main.berita'))
      @php
        $start = 5;
        $end = count($news);
      @endphp
    @endif
    @for($i = $start; $i <= $end-1; $i++ )
      <li class="flex flex-col gap-1 sm:gap-3 md:gap-0 lg:gap-1 2xl:gap-3">
        <div class="flex flex-row gap-4 items-center" @if(Request::routeIs('main.berita')) style="gap: 16px;" @endif>
          <img class="max-w-52 h-full w-full md:w-[calc(100%-10rem)] max-h-40 md:h-[calc(100%-10rem)]" src="{{ asset($news[$i]['img']) }}" alt="">
          <div class="text-xs sm:text-base md:text-xs lg:text-sm xl:text-base flex flex-col gap-1 mt-1">
            @if(Request::routeIs('main.index'))
              <x-date :date="$news[$i]['date']" :textColor="'text-biru'" :svgColor="'red'" />
              <h3 class="text-biru font-semibold ">{{ $news[$i]['title'] }}</h3>
            @else
              <h3 class="font-bold text-xl">{{ $news[$i]['title'] }}</h3>
              <h3 class="text-[#b0b0b0] font-semibold text-base">{{ $news[$i]['date'] }}</h3>
            @endif
          </div>
        </div>
        @if(Request::routeIs('main.index'))
        <hr class="w-[7rem] sm:w-60 bg-black">
        @endif
      </li>
    @endfor
</ul>