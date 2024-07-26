@props(['event', 'textColor', 'svgColor',])
<div class="flex flex-col gap-2 my-4">
    <x-title :title="$event['title']" :$textColor :line="True" />
    <x-date :date="$event['date']" :$textColor :$svgColor />
    <x-date :date="$event['started'].' - '.$event['ended']" :$textColor :$svgColor :svg="'clock'" />
    <x-date :date="$event['location']" :$textColor :$svgColor :svg="'location'" />
    <a href="" class="flex self-end items-center justify-center text-white bg-biru rounded-xl w-44 h-9 text-sm">Registrasi Sekarang</a>
</div>