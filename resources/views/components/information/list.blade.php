@props(['prodi_information'])
<div class="bg-gradient-to-b from-[#0E78CF] to-[#005CA8] h-36 flex justify-center gap-5 sm:gap-20 md:gap-40">
    @foreach($prodi_information as $information)
        <x-information.item 
            :label="$information['label']" 
            :value="$information['value']" 
        />
    @endforeach
</div>