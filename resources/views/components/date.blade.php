@props(['date', 'textColor', 'svgColor', 'svg'])
<div class="flex flex-row items-center gap-0.5 text-[0.6rem] sm:text-xs font-medium {{ $textColor }}">
    @isset($svg) 
        @if($svg == "location") <x-svg-location :$svgColor /> 
        @elseif($svg == 'clock') <x-svg-clock :$svgColor /> @endif 
    @else
        <x-svg-date :$svgColor />
    @endif  
    <p>{{ $date }}</p>
</div>