@props(['dosen'])
<div class="grid justify-items-center justify-stretch items-center w-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 sm:gap-6 mb-20">
    @foreach($dosen as $key => $d)
      <div class="flex flex-col w-full h-full">
        <x-dosen.list.img :img="$d['img']" />
        <x-dosen.list.description 
            :nama="$d['nama']"
            :email="$d['email']"
            :keahlian="$d['keahlian']"
            :id="$key+1"
        />
      </div>
    @endforeach
</div>