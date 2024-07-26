@props(['kaprodi'])
<div class="py-32 flex justify-center w-[100rem]">
    <x-dosen.kaprodi.kaprodi-header :img="$kaprodi['img']" />
    <x-dosen.kaprodi.kaprodi-body :$kaprodi />
</div>