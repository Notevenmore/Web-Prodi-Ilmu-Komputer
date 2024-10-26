@props(['nama', 'email', 'keahlian', 'id'])
<div class="relative flex flex-col px-5 pt-10 pb-14 gap-[8px] bg-[#d9d9d9] z-0 mt-[-20px] h-full w-full">
    <x-dosen.list.header :nama="$nama" :email="$email" />
    <x-dosen.list.ullist :keahlian="$keahlian" />
    <x-dosen.list.button :$id />
</div>