@props(['news'])
<div class=" w-[28rem] ">
    <p class="font-medium text-black text-xs">{{ implode(' ', array_slice(explode(' ', $news['content']), 0, 18)) }}</p>
    <p class="font-medium text-biru text-xs">Selengkapnya</p>
</div>