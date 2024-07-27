@props(['img'])
<div class="relative">
    <div class=" pb-2">
        <h1 class="font-bold text-2xl text-center text-gradient text-biru">Kepala Prodi</h1>
    </div>
    <div class="relative flex items-center justify-center bg-gradient-to-b from-[#1362A1] via-[#3B84BF] to-[#4280B2] border-white border-solid border-[11px] shadow-[#808080] shadow-[0_8px_8px_0] rounded-3xl left-10 z-10 " style="width:265px; height:363px;">
        <img src="{{ asset($img) }}" alt="" width=197 height=297 style="object-fit: contain;" class="rounded-xl">
    </div>
</div>