@props(['key'])
<thead class="bg-biru text-white font-semibold text-xl">
    <tr>
      @foreach($key as $k)
          <th class="px-12 py-3 border border-black">{{ $k }}</th>
      @endforeach
    </tr>
</thead>