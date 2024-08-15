@props(['data'])
<div class=" w-full h-[calc(100vh/2)] flex gap-7 sm:gap-30 justify-center">
    @if($data['title'] == 'Kemahasiswaan')
        <x-kemahasiswaan-alumni.image :image="$data['img']" :title="$data['title']" />
        <x-kemahasiswaan-alumni.description :title="$data['title']" :description="$data['description']" :link="$data['link']" />
    @elseif($data['title'] == 'Alumni')
        <x-kemahasiswaan-alumni.description :title="$data['title']" :description="$data['description']" :link="$data['link']" />
        <x-kemahasiswaan-alumni.image :image="$data['img']" :title="$data['title']" />
    @endif
</div>