@props(['img'])
<div class="bg-gradient-to-b from-[#1362A1] via-[#3B84BF] to-[#4280B2] border-white border-[11px] drop-shadow-[4px_4px_8px_rgba(0,0,0,0.35)] rounded-3xl flex items-center justify-center w-full h-105 z-20">
    <img src="{{ asset($img) }}" alt="" class="w-[calc(100%-6rem)] h-[calc(100%-3rem)] rounded-xl" >
</div>