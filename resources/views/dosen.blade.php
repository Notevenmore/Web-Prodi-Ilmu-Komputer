@extends('layouts.app')
@section('content')
  <section id="dosen" class="container p-20">
    <div class="heading">
      <div class="title">
        <h1 class="title">Daftar Dosen</h1>
        <div class="line"></div>
      </div>
      <p>Dosen ilmu komputer memiliki banyak pengalaman, terutama dalam rekayasa perangkat lunak, machine learning, dan pemodelan matematika. Dengan kemampuan mengajar hingga tingkat S3, dosen-dosen ilmu komputer mampu memberikan pendidikan yang relevan dengan perkembangan zaman.</p>
    </div>
    <section id="content-dosen">
      @include('content.kaprodi')
    </section>
    <section id="list-dosen">
      @include('content.listdosen')
    </section>
  </section>
@endsection()