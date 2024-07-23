@props(['value', 'label'])

<div class="h-32 flex justify-center flex-col text-center  ">
    <x-h3 class="">{{$value}}</x-h3>
    <x-data.label>{{$label}}</x-data.label>
</div>
