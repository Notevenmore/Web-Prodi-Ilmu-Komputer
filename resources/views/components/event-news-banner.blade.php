@props(['img'])
<div class="w-screen h-[calc(100vh-2rem)] md:h-[calc(100vh-(3rem*2))] bg-no-repeat bg-cover justify-end flex flex-col gap-1 sm:gap-10 sm:px-16 sm:py-5 xl:py-0 px-8 py-24" style="background-image: url('{{ asset($img) }}')">
    <x-title :title="'Berita & Agenda'" :textColor="'text-white max-sm:hidden'"  :line="False" :fontSize="48" />
    <x-title :title="'Prodi Ilmu Komputer'" :textColor="'text-white max-sm:hidden'" :fontSize="48" :hidden="'max-sm:hidden'" :gap="'gap-2'" />
    <x-title :title="'Berita & Agenda'" :textColor="'text-white sm:hidden'"  :line="False" :fontSize="20" />
    <x-title :title="'Prodi Ilmu Komputer'" :textColor="'text-white sm:hidden'" :hidden="'sm:hidden'" :fontSize="20" :gap="'gap-0'" />
</div>