@props(['studies'])
<tbody class="sm:text-base text-sm">
    @foreach($studies as $study)
      <x-akademik.table.data :$study />
    @endforeach
</tbody>