<div class="w-screen flex flex-col mb-20 items-center justify-center">
  <img src="{{ asset($news['img']) }}" alt="" class="w-full h-[calc(100vh-(0.75rem*2))] xl:h-[calc(100vh-(3rem*2))]">
  <div class="w-full flex flex-col px-8 sm:px-20 py-8 sm:py-14 gap-5">
    <div class="flex flex-col gap-2">
      <h1 class="font-bold text-3xl">{{ $news['title'] }}</h1>
      <p class="font-semibold text-sm text-[#969696]">{{ $news['date'] }}</p>
    </div>
    <p class="font-semibold text-sm">{!! $news['content'] !!}</p>
  </div>
</div>