@props(['prodi_peminatan'])
<div class="pb-32 w-full">
    <div class="w-full text-white list-peminatan grid grid-cols-peminatan auto-rows-peminatan gap-8 justify-center">
        @foreach($prodi_peminatan as $peminatan)
            <x-peminatan.item 
                :nama="$peminatan['title']" 
                :deskripsi="$peminatan['description']" 
                :img="$peminatan['image']"
            />
        @endforeach
    </div>
</div>