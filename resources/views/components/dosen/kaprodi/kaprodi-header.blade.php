@props(['img'])
<div class="img relative">
    <div class=" pb-2">
        <h1 class="font-bold text-2xl text-center text-gradient">Kepala Prodi</h1>
    </div>
    <div class="relative d-flex items-center justify-center bg-dosen-pict left-10 z-10 " style="width:265px; height:363px;">
        <img src="{{ asset($img) }}" alt="" width=197 height=297 style="object-fit: contain;">
    </div>
</div>