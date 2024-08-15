@props(['nama', 'deskripsi', 'img', 'index'])
<div data-number="{{ $index+1 }}" class=" w-full h-full transition-[row-end] duration-300 ease-in-out bg-[#005B9E] p-4 sm:p-6 rounded-2xl overflow-hidden relative item row-span-2 @if($index % 2 == 0 ) col-start-1 col-end-2 @elseif($index % 2 == 1) col-start-2 col-end-3 @endif">
    <h2 class="text-xs sm:text-xl leading-4 sm:leading-6 font-bold mb-1">{{ $nama }}</h2>
    <p class="text-[0.4rem] sm:text-xs overflow-hidden hidden md:block ">{!! $deskripsi !!}</p>
    <img src="{!! $img !!}" alt="" class="transition-[bottom] duration-300 w-24 sm:w-60 absolute bottom-0 right-0 sm:-bottom-10 sm:-right-10">
</div>