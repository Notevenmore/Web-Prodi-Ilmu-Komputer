@props(['title', 'marginBottom', 'fontSize', 'line', 'textColor'])
<div class="title" @isset($marginBottom) style="margin-bottom: {{ $marginBottom }}px" @endif>
    <h1 class="title @isset($textColor) {{ $textColor }} @endif" @isset($fontSize) style="font-size: {{ $fontSize }}px" @endif>{!! $title !!}</h1>
    @isset($line) @else <div class="line"></div> @endif
</div>