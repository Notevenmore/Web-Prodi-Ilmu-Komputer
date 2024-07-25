@props(['dosen'])
<div class="grid justify-items-center w-[70rem] grid-cols-3 gap-6 mb-20">
    @foreach($dosen as $d)
      <div class="flex flex-col">
        <x-dosen.list.img :img="$d['img']" />
        <x-dosen.list.description 
            :nama="$d['nama']"
            :email="$d['email']"
            :keahlian="$d['keahlian']" 
        />
      </div>
    @endforeach
</div>