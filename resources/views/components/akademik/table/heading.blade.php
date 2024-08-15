@props(['key'])
<thead class="bg-biru text-white font-semibold md:text-xl sm:text-[1.1rem] text-sm">
    <tr>
      @foreach($key as $k)
          <th class="px-6 sm:px-12 py-3 border border-black">{{ $k }}</th>
      @endforeach
    </tr>
</thead>