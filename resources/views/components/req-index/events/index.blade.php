@props(['event', 'textColor', 'svgColor',])
<div class="flex flex-col">
    <img src="{{ asset($event['img']) }}" alt="" class="w-full h-64">
    <x-describe-event :$event :$textColor :$svgColor  />
</div>