@props(['event'])
<div class="flex flex-row w-full gap-10">
    <img src="{{ asset($event['img']) }}" alt="" class="w-1/2 sm:w-full h-48 sm:h-64">
    <x-describe-event :$event :textColor="'text-black'" :svgColor="'black'" :notselfend="true" />
</div>