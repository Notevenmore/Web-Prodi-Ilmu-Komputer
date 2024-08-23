@props(['datas', 'title'])
<div class="flex flex-col w-full border-b-2 border-white p-5 gap-3">
    <h1 class="font-bold text-2xl">{{ $title }}</h1>
    @if(is_array($datas))
        <ul class="list-disc px-8 text-xs sm:text-base text-justify">
            @foreach($datas as $data)
                <li>{{ $data }}</li>
            @endforeach
        </ul>
    @elseif(is_string($datas))
        <p class="text-xs sm:text-base text-justify">{{ $datas }}</p>
    @endif
</div>