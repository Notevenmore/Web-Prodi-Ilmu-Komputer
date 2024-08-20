@props(['event', 'textColor', 'svgColor', 'notselfend'])
<div class="flex flex-col gap-2 sm:gap-4 lg:gap-2 my-4 w-full">
    <x-title :title="$event['title']" :$textColor :line="True" :responsive="'sm:text-3xl text-lg'" />
    <x-date :date="$event['date']" :$textColor :$svgColor />
    <x-date :date="$event['started'].' - '.$event['ended']" :$textColor :$svgColor :svg="'clock'" />
    <x-date :date="$event['location']" :$textColor :$svgColor :svg="'location'" />
    <a href="" class="flex @isset($notselfend) @else lg:self-end @endif  items-center justify-center text-white bg-biru md:rounded-xl rounded-md w-30 h-7 text-[0.6rem] sm:text-xs md:w-44 md:h-9 md:text-sm mt-2 sm:mt-14">Registrasi Sekarang</a>
</div>