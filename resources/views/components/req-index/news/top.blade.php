@props(['news'])
<div class="flex flex-col justify-around">
    <img src="{{ asset($news['img']) }}" alt="" class="rounded-3xl mb-[8px]">
    <x-heading 
        :title="$news['title']" 
        :date="$news['date']" 
        :h1Color="'text-biru'"
        :textColor="'text-biru'"
        :svgColor="'red'"
    />
    <x-req-index.news.description :$news />
</div>