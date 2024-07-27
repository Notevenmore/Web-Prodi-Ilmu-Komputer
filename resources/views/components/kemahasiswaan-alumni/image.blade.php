@props(['image', 'width', 'title'])
<div class="{{ $width }} relative bg-no-repeat bg-cover rounded-3xl" style="background-image: url('{{ asset($image) }}')">
    <h1 class="font-bold text-2xl absolute top-[54px] left-[24px] text-black">{{ $title }}</h1>
</div>