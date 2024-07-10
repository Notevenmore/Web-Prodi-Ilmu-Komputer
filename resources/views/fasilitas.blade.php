@extends('layouts.app')
@section('content')
<section id="fasilitas">
  <div class="title">
    <h1 class="title">Galeri</h1>
    <div class="line"></div>
  </div>
  <div class="list-fasilitas">
    <img src="{{ asset('img/Card.png') }}" alt="">
    <img src="{{ asset('img/Card-horizontal1.png') }}" alt="">
    <img src="{{ asset('img/Card.png') }}" alt="">
    <img src="{{ asset('img/Card-horizontal2.png') }}" alt="">
    <img src="{{ asset('img/card-vertical.png') }}" alt="">
    <img src="{{ asset('img/Card-horizontal3.png') }}" alt="">
    <img src="{{ asset('img/iphone.png') }}" alt="">
    <img src="{{ asset('img/Card-horizontal4.png') }}" alt="">
  </div>
</section>
@endsection