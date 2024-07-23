@extends('layouts.app')
@section('content')
  <section id="berita-utama">
    <div class="image" style="background-image: url('{{ asset($news[0]['img']) }}')">
      <div class="title-container">
        <h1 class="title">Berita & Agenda</h1>
        <h1 class="title">Prodi Ilmu Komputer</h1>
        <div class="line"></div>
      </div>
    </div>
    <section id="content-news">
      @include('content.newscontent')
    </section>
    <section id="content-event">
      @include('content.eventcontent')
    </section>
  </section>
@endsection()