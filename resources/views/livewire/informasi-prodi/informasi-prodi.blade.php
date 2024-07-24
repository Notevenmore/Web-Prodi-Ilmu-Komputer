<section class="w-full information">
  <div class="flex items-center justify-center py-10 bg-sky-800">
    <div class="title">
      <h2 class="text-white font-bold text-lg ">INFORMASI PROGRAM STUDI</h2>
    </div>
  </div>
  {{-- data prodi --}}
  <div class="bg-sky-800 h-36 flex justify-between px-52 gap-3 deskripsi text-white">
    <x-data.item value="128" label="Total Mahasiswa" />
    <x-data.item value="B" label="Akreditasi" />
    <x-data.item value="8" label="Total Pengajar" />
  </div>
  {{-- peminatan --}}
  <div class="text-center pt-28 pb-6">
    <h1 class="text-4xl font-bold">Peminatan</h1>
  </div>
  <div class="  pb-32 peminatan w-full">
    {{-- content peminatan ada di app/Models/Peminatan --}}
    <livewire:peminatan.get-peminatan />
  </div>
</section>
