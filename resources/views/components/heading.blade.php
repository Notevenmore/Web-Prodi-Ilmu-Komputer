@props(['title','date', 'h1Color', 'textColor', 'svgColor'])
<div class="mb-[10px]">
    <h1 class="{{ $h1Color }} font-semibold text-2xl">{{ $title }}</h1>
    <x-date :date="$date" :$textColor :$svgColor />
</div>