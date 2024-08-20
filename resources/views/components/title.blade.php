@props(['title', 'marginBottom', 'fontSize', 'line', 'textColor', 'responsive', 'hidden', 'gap'])
<div  class="flex flex-col @isset($gap) {{ $gap }} @else gap-2 @endif" @isset($marginBottom) style="margin-bottom: {{ $marginBottom }}px" @endif>
    <h1 class=" font-bold @isset($textColor) {{ $textColor }} @else black @endif @isset($responsive) {{ $responsive }} @else text-3xl @endif" @isset($fontSize) style="font-size: {{ $fontSize }}px" @endif>{!! $title !!}</h1>
    @isset($line) @else <div class="w-[68px] h-[3px] @isset($hidden) {{ $hidden }} @endif rounded bg-[#FF0202CC]"></div> @endif
</div>