@extends('layouts.app')
@section('content')
  {{--  Section Hero  --}}
  <livewire:hero />
  {{-- end Section Hero  --}}
  {{-- section informasi program studi --}}
  <section>
    <livewire:informasi-prodi.informasi-prodi />
  </section>
  {{-- endsection informasi program studi --}}
  {{-- section alumni & kemahasiswaan --}}
  <section class="w-full pb-3 alumni">
    <x-alumniMahasiswa.alumni-mahasiswa />
  </section>
  {{-- endsection alumni & kemahasiswaan --}}
  {{-- section dosen --}}
  <section>
    <x-dosen.dosen />
  </section>
  {{-- endsection dosen --}}
  {{-- section news --}}
  <section>
    <livewire:news.news />
  </section>
  {{-- endsection news --}}
  {{-- section event --}}
  <section>
    <livewire:event.event />
  </section>
  {{-- end section event --}}
  {{-- section video profil --}}
  <section>
    <livewire:video-profile.video-profile />
  </section>
  {{-- end section video profil --}}
  {{-- section partnership --}}
  <section>
    <livewire:partnership.partnership />
  </section>
  {{-- end section partnership --}}
  {{-- section footer --}}
  <section>
    <x-footer.footer />
  </section>
  {{-- endsection footer --}}
@endsection
