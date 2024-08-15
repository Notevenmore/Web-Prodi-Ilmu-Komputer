@props(['title', 'description', 'link'])
<div class="self-start flex max-w-[60vw] flex-col justify-center gap-3">
    <h1 class="text-lg sm:text-xl lg:text-3xl 2xl:text-4xl font-bold text-[#C4D82D] ">{{ $title }}</h1>
    <p class=" text-xs sm:text-base 2xl:text-lg">{{ mb_substr($description, 0, 200) }}</p>
    <a href="{{ $link }}" class="underline font-bold text-xs sm:text-base 2xl:text-lg">Selengkapnya ></a>
</div>