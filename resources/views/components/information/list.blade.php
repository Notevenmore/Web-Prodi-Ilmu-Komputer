@props(['prodi_information'])
<div class="bg-gradient-to-b from-[#0E78CF] to-[#005CA8] h-36 flex justify-between px-52 gap-3 deskripsi">
    @foreach($prodi_information as $information)
        <x-information.item 
            :label="$information['label']" 
            :value="$information['value']" 
        />
    @endforeach
</div>