@props(['title', 'description', 'image'])

<div {{ $attributes->merge(['class' => 'w-80 h-80 bg-sky-800 p-6 static rounded-2xl overflow-hidden item relative']) }}>
  <h2 class="text-xl leading-10 font-bold">{{ $title }}</h2>
  <p class="text-xs">{{ $description }}</p>
  <img src="{{ $image }}" alt="" {{ $attributes->merge(['class' => 'w-60 absolute bottom-0 right-0']) }}>
</div>
