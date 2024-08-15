@props(['img'])
<div class="relative sm:self-end">
    <div class="pb-2 hidden sm:block">
        <h1 class="font-bold text-2xl text-center sm:text-biru text-black">Kepala Prodi</h1>
    </div>
    <div class="relative flex items-center justify-center bg-gradient-to-b from-[#1362A1] via-[#3B84BF] to-[#4280B2] sm:border-white border-none sm:border-solid border-[11px] sm:shadow-[#808080] sm:shadow-[0_8px_8px_0] rounded-tr-[150px] sm:rounded-xl sm:left-10 sm:z-10 w-[265px] h-[363px]">
        <div class="block sm:hidden absolute -top-2 -left-24">
            <x-title :title="'Kepala Prodi'" :fontSize="14" :textColor="'-mb-3'"/>
        </div>
        <img src="{{ asset($img) }}" alt="" style="object-fit: contain;" class="rounded-xl absolute sm:sticky -left-14 bottom-3 sm:border-none border-solid border-[11px] border-white w-[220px] h-[320px] sm:w-[197px] sm:h-[297px] shadow-[#808080] shadow-[0_4px_4px_0px] sm:shadow-none" />
    </div>
</div>