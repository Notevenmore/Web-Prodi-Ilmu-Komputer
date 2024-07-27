@props(['img'])
<div class="w-full h-[35rem] bg-no-repeat bg-cover relative" style="background-image: url('{{ asset($img) }}')">
    <div class="absolute bottom-[30px] left-[145px] flex flex-col gap-10">
        <x-title :title="'Berita & Agenda'" :textColor="'text-white'"  :line="True" :fontSize="48" />
        <x-title :title="'Prodi Ilmu Komputer'" :textColor="'text-white'" :fontSize="48" />
    </div>
</div>