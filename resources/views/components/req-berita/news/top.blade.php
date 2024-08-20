@props(['news'])
<div class="h-1/2 w-full flex flex-col">
  <div class="bg-no-repeat bg-cover w-full h-[19rem] sm:h-[30rem] flex items-end p-5 sm:p-10" style="background-image: url('{{ asset($news[0]['img']) }}')">
    <h1 class="text-white font-semibold text-3xl">{{ $news[0]['title'] }}</h1>
  </div>
  <div class="grid grid-cols-2 gap-3 sm:gap-7 mt-9" >
    @for($i = 1; $i <= 4; $i++)
      <div class="flex flex-col w-full h-full">
        <img class="w-full h-full" src="{{ asset($news[$i]['img']) }}" alt="" />
        <div class="flex flex-col bg-[#D9D9D9] p-3 sm:p-6 gap-2 sm:gap-5">
          <x-heading 
              :title="$news[$i]['title']"
              :date="$news[$i]['date']" 
              :h1Color="'text-black'"
              :textColor="'text-black'"
              :svgColor="'black'"
              :gap="'xl:gap-4'"
          />
          <p class="mb-3 sm:mb-5 sm:text-base text-[0.6rem]">{{ implode(' ', array_slice(explode(' ', $news[$i]['content']), 0, 18)) }}...</p>
          <div class="text-white bg-biru p-3 lg:p-2 xl:p-3 w-full lg:w-3/4 2xl:w-1/2 xl:text-base text-[0.5rem] sm:text-base lg:text-[0.6rem] rounded-xl text-center">Baca Selengkapnya</div>
        </div>
      </div>
    @endfor
  </div>
</div>