@props(['keahlian'])
<ul class="list-disc list-inside">
    @foreach($keahlian as $k)
        <li>{{ $k }}</li>
    @endforeach
</ul>