@props(['title', 'description', 'link'])
<div class="px-20 py-6">
    <h1 class="text-3xl font-bold pb-10">{{ $title }}</h1>
    <p class="pb-8">{{ $description }}</p>
    <a href="{{ $link }}" class="underline font-bold">Selengkapnya ></a>
</div>