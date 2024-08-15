@props(['kaprodi'])
<div class="py-32 flex flex-col items-center sm:flex-row justify-center sm:w-[100vw] ">
    <div class="flex flex-col sm:flex-row items-end sm:items-center justify-center gap-3 sm:w-[100vw] sm:gap-0">
        <x-dosen.kaprodi.kaprodi-header :img="$kaprodi['img']" />
        <x-dosen.kaprodi.kaprodi-body :$kaprodi />
    </div>
</div>