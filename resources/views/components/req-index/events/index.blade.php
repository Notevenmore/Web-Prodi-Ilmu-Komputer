@props(['event', 'textColor', 'svgColor',])
<div class="flex flex-col w-full">
    <img src="{{ asset($event['img']) }}" alt="" class="w-full h-28 sm:h-64">
    <x-describe-event :$event :$textColor :$svgColor  />
</div>