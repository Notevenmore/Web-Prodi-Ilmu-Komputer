@props(['event'])
<div class="flex flex-row w-[40vw] gap-10">
    <img src="{{ asset($event['img']) }}" alt="" class="w-full h-64">
    <x-describe-event :$event :textColor="'text-black'" :svgColor="'black'" />
</div>