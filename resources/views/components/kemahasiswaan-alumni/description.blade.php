@props(['title', 'description', 'link'])
<div class="self-start flex max-w-[60vw] flex-col justify-start 2xl:self-center gap-3 sm:gap-5">
    <h1 class="text-lg sm:text-3xl lg:text-5xl 2xl:text-6xl font-bold text-[#C4D82D] ">{{ $title }}</h1>
    <p class=" text-xs sm:text-base 2xl:text-2xl">{{ mb_substr($description, 0, 200) }}</p>
    <a href="{{ $link }}" class="underline font-bold text-xs sm:text-base 2xl:text-2xl">Selengkapnya ></a>
</div>