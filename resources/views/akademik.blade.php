@extends('layouts.app')
@section('content')
<section id="akademik">
  <div class="title">
    <h1 class="title">Kurikulum</h1>
    <div class="line"></div>
  </div>
  <div class="list-matkul">
    @php $i = 1; @endphp
    @foreach(array_chunk($semesters, 2) as $semester)
      <div class="row">
        @foreach($semester as $studies)
          <div class="column">
            <h1>Semester {{ $i }}</h1>
            @php $i++; @endphp
            <table>
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Mata Kuliah</th>
                  <th>SKS</th>
                </tr>
              </thead>
              <tbody>
                @foreach($studies as $study)
                  <tr>
                    <td>{{ $study['Kode'] }}</td>
                    <td>{{ $study['MataKuliah'] }}</td>
                    <td>{{ $study['SKS'] }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
</section>
@endsection