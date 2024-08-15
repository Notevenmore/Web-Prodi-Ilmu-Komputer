@props(['news'])
<div class="flex flex-col gap-3 w-full h-[25rem] sm:h-[35.5rem]  md:w-[10rem] lg:w-[15rem] 2xl:w-[25rem] md:h-full">
    @for($i = 1; $i <= 2; $i++)
      <div class="group w-full h-full rounded-3xl bg-no-repeat bg-cover relative" style="background-image: url('{{ asset($news[$i]['img']) }}')">
        <div class="bg-biru opacity-0 transition-[opacity] duration-300 ease-in-out group-hover:opacity-100 rounded-bl-3xl rounded-br-3xl absolute bottom-0 left-0 right-0 h-12 flex justify-between p-5 items-center">
          <h1 class="text-white font-semibold text-sm">{{ $news[$i]['title'] }}</h1>
          <x-date :date="$news[$i]['date']" :textColor="'text-white'" :svgColor="'#C4D82D'" />
        </div>
      </div>
    @endfor
</div>