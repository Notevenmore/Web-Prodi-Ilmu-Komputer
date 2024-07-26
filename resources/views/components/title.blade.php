@props(['title', 'marginBottom', 'fontSize'])
<div class="title" @isset($marginBottom) style="margin-bottom: {{ $marginBottom }}px" @endif>
    <h1 class="title" @isset($fontSize) style="font-size: {{ $fontSize }}px" @endif>{!! $title !!}</h1>
    <div class="line"></div>
</div>