@props(['title', 'marginBottom', 'fontSize', 'line', 'textColor'])
<div  class="flex flex-col gap-2" @isset($marginBottom) style="margin-bottom: {{ $marginBottom }}px" @endif>
    <h1 class="text-3xl font-bold @isset($textColor) {{ $textColor }} @endif" @isset($fontSize) style="font-size: {{ $fontSize }}px" @endif>{!! $title !!}</h1>
    @isset($line) @else <div class="w-[58px] h-[3px] rounded bg-[#FF0202CC]"></div> @endif
</div>