@props(['keahlian'])
<div class="ps-8">
    <ul class="font-medium text-black text-sm list-disc">
      @foreach($keahlian as $k)
        <li>{{ $k }}</li>
      @endforeach
    </ul>
  </div>