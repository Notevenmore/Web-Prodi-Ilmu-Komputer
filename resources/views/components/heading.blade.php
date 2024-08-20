@props(['title','date', 'h1Color', 'textColor', 'svgColor', 'gap'])
<div class="flex flex-col w-full @isset($gap) {{ $gap }} @endif">
    <h1 class="{{ $h1Color }} font-semibold sm:text-3xl w-full break-words">{{ $title }}</h1>
    <x-date :date="$date" :$textColor :$svgColor />
</div>