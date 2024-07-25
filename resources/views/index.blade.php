@extends('layouts.app')
@section('content')
{{--  Section Hero  --}}
<livewire:hero />

{{-- section informasi program studi --}}
<livewire:prodi-information />

{{-- section alumni & kemahasiswaan --}}
<livewire:prodi-public-information />

{{-- section dosen --}}
<livewire:dosen />

<section id="content-news">
  @include('content.newscontent')
</section>

{{-- section event --}}
<section id="content-event">
  @include('content.eventcontent')
</section>

{{-- section video profil --}}
<livewire:profile-video-prodi />

{{-- section partnership --}}
<livewire:partnership />

<div class="decoration">
</div>
@endsection