@props(['data', 'width'])
<div class=" flex justify-between">
    @if($data['title'] == 'Kemahasiswaan')
        <x-kemahasiswaan-alumni.image :image="$data['img']" :width="$width" :title="$data['title']" />
        <x-kemahasiswaan-alumni.description :title="$data['title']" :description="$data['description']" :link="$data['link']" />
    @elseif($data['title'] == 'Alumni')
        <x-kemahasiswaan-alumni.description :title="$data['title']" :description="$data['description']" :link="$data['link']" />
        <x-kemahasiswaan-alumni.image :image="$data['img']" :width="$width" :title="$data['title']" />
    @endif
</div>