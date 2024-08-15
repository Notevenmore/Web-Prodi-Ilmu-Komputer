@props(['event', 'textColor', 'svgColor',])
<div class="flex flex-col gap-2 sm:gap-4 lg:gap-2 my-4">
    <x-title :title="$event['title']" :$textColor :line="True" />
    <x-date :date="$event['date']" :$textColor :$svgColor />
    <x-date :date="$event['started'].' - '.$event['ended']" :$textColor :$svgColor :svg="'clock'" />
    <x-date :date="$event['location']" :$textColor :$svgColor :svg="'location'" />
    <a href="" class="flex lg:self-end items-center justify-center text-white bg-biru md:rounded-xl rounded-md w-30 h-7 text-[0.6rem] sm:text-xs md:w-44 md:h-9 md:text-sm">Registrasi Sekarang</a>
</div>