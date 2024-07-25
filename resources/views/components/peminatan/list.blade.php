@props(['prodi_peminatan'])
<div class="pb-32 peminatan w-full">
    <div class="w-full text-white list-peminatan">
        @foreach($prodi_peminatan as $peminatan)
            <x-peminatan.item 
                :nama="$peminatan['nama']" 
                :deskripsi="$peminatan['deskripsi']" 
                :img="$peminatan['img']"
            />
        @endforeach
    </div>
</div>