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

{{-- section event & news--}}
<livewire:event-news />

{{-- section video profil --}}
<livewire:profile-video-prodi />

{{-- section partnership --}}
<livewire:partnership />

<div class="decoration"></div>
@endsection
