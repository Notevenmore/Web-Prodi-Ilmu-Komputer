@props(['nama', 'deskripsi', 'img'])
<div class="w-80 h-36-with-transition h-80-with-transition bg-sky-800 p-6 rounded-2xl overflow-hidden item">
    <h2 class="text-xl leading-10 font-bold">{{ $nama }}</h2>
    <p class="text-xs overflow-hidden h-24-with-transition">{!! $deskripsi !!}</p>
    <img src="{!! $img !!}" alt="" class="ml-16 w-60">
</div>