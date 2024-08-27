@props(['news'])
<div class="text-[0.6rem] xl:text-base 2xl:text-lg">
    <p class="font-medium text-black">{{ implode(' ', array_slice(explode(' ', $news['content']), 0, 25)) }}</p>
    <a href="{{ route('detail.berita', ['id' => 1]) }}" class="font-medium text-biru">Selengkapnya</a>
</div>