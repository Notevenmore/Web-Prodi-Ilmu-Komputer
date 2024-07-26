@props(['studies'])
<tbody>
    @foreach($studies as $study)
      <x-akademik.table.data :$study />
    @endforeach
</tbody>