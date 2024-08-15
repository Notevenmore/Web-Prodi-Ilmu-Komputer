@props(['prodi_peminatan'])
<div class="pb-32 text-white list-peminatan grid grid-cols-[repeat(2,10rem)] grid-rows-3 sm:grid-cols-[repeat(2,17rem)] sm:grid-rows-5  justify-items-center items-center gap-6 sm:gap-12 justify-center">
    @foreach($prodi_peminatan as $index => $peminatan)
        <x-peminatan.item 
            :nama="$peminatan['title']" 
            :deskripsi="$peminatan['description']" 
            :img="$peminatan['image']"
            :$index
        />
    @endforeach
</div>