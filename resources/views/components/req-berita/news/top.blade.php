@props(['news'])
<div class="bg-no-repeat bg-cover" style="background-image: url('{{ asset($news[0]['img']) }}')">
  <div class="h-96 relative ">
    <h1 class="text-white absolute bottom-[20px] left-[24px] font-semibold text-3xl">{{ $news[0]['title'] }}</h1>
  </div>
</div>
<div class="grid grid-cols-2 gap-x-6 gap-y-14 mt-9 ">
  @for($i = 1; $i <= 4; $i++)
    <div class=" ">
      <img class="w-[50rem] h-[15rem]" src="{{ asset($news[$i]['img']) }}" alt="" />
      <div class=" mb-[10px] bg-[#D9D9D9] p-[12px]">
        <x-heading 
            :title="$news[$i]['title']"
            :date="$news[$i]['date']" 
            :h1Color="'text-black'"
            :textColor="'text-black'"
            :svgColor="'black'"
        />
        <p class="description">{{ implode(' ', array_slice(explode(' ', $news[$i]['content']), 0, 18)) }}...</p>
      </div>
    </div>
  @endfor
</div>