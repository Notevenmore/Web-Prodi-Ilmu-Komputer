@props(['news'])
<div class="flex flex-col gap-3">
    @for($i = 1; $i <= 2; $i++)
      <div class="group/item w-[21rem] h-[21rem] rounded-3xl bg-no-repeat bg-cover relative" style="background-image: url('{{ asset($news[$i]['img']) }}')">
        <div class="bg-biru invisible group-hover/item:visible rounded-bl-3xl rounded-br-3xl absolute bottom-0 left-0 right-0 h-12 flex justify-between p-5 items-center">
          <h1 class="text-white font-semibold text-sm">{{ $news[$i]['title'] }}</h1>
          <x-date :date="$news[$i]['date']" :textColor="'text-white'" :svgColor="'#C4D82D'" />
        </div>
      </div>
    @endfor
</div>