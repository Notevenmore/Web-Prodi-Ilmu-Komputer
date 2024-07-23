@extends('layouts.app')
@section('content')
{{--  Section Hero  --}}
<section class="w-full">
  <div class="h-96 bg-slate-400">

  </div>
</section>
{{-- end Section Hero  --}}
{{-- section informasi program studi --}}
<section class="w-full information">
  <div class="flex items-center justify-center py-10 bg-sky-800">
      <div class="title" >
          <h2 class="text-white font-bold text-lg ">INFORMASI PROGRAM STUDI</h2>
      </div>
  </div>
  <div class="bg-sky-800 h-36 flex justify-between px-52 gap-3 deskripsi">
      <div class="h-32 flex justify-center flex-col text-center  ">
          <h2 class=" text-white text-3xl font-bold">128</h2>
          <h3 class="text-white py-1 text-lg font-bold">Total Mahasiswa</h3>
      </div>
      <div class="h-32 flex justify-center flex-col text-center  ">
          <h2 class=" text-white text-3xl font-bold">B</h2>
          <h3 class="text-white py-1 text-lg font-bold">Akreditasi</h3>
      </div>
      <div class="h-32 flex justify-center flex-col text-center  ">
          <h2 class=" text-white text-3xl font-bold">8</h2>
          <h3 class="text-white py-1 text-lg font-bold">Total Pengajar</h3>
      </div>
  </div>
  <div class="text-center pt-28 pb-6">
      <h1 class="text-4xl font-bold">Peminatan</h1>
  </div>
  <div class="pb-32 peminatan w-full">
      <div class="w-full text-white list-peminatan">
          <div class="w-80 h-36 h-80 bg-sky-800 p-6 rounded-2xl overflow-hidden item">
              <h2 class="text-xl leading-10 font-bold">Artificial Intellegence</h2>
              <p class="text-xs overflow-hidden h-24">Tujuan dari Program Studi Ilmu Komputer mengarah kepada pencapaian sebagai berikut: <br>
                Pengembangan kualitas pendidikan untuk menghasilkan lulusan dengan kapasitas intelektual yang tinggi dalam pengetahuan dan keahlian, yang dapat mengkonsolidasikan dan menguatkan integritas nasional. <br>
                Pengembangan kegiatan dan kualitas penelitian mahasiswa dan dosen dalam kemajuan sains dan teknologi, serta untuk mengembangkan dan memasyarakatkan sains dan teknologi yang relevan untuk mencapai kesejahteraan bangsa. <br>
                Pengembangan kegiatan pengabdian masyarakat oleh mahasiswa dan dosen untuk memberdayakan penduduk Indonesia. </p>
              <img src="{{ asset('/img/visi-img.png') }}" alt="" class="ml-16 w-60">
          </div>
          <div class="w-80 h-36 h-80 bg-sky-800 p-6 rounded-2xl  overflow-hidden item">
              <h2 class="text-xl leading-10 font-bold">Data Science</h2>
              <p class="text-xs overflow-hidden h-24">Dalam mencapai visi yang telah dirancang, kami akan mengemban misi: </p>
              <img src="{{ asset('/img/misi-img.png') }}" alt="" class="ml-12 w-60">
          </div>
          <div class="w-80 h-36 h-80 bg-sky-800 p-6 rounded-2xl  overflow-hidden item">
              <h2 class="text-xl leading-10 font-bold">Website Development</h2>
              <p class="text-xs overflow-hidden h-24">Tujuan dari program studi ilmu komputer mengarahkan kepada pencapaian sebagai berikut:</p>
              <img src="{{ asset('/img/tujuan-img.png') }}" alt="" class="ml-14 mt-14 w-60">
          </div>
          <div class="w-80 h-36 h-80 bg-sky-800 p-6 rounded-2xl  overflow-hidden item">
              <h2 class="text-xl leading-10 font-bold">Mobile Development</h2>
              <p class="text-xs overflow-hidden h-24">Terdapat berbagai peminatan yang dapat dikembangkan dalam program studi ilmu komputer universitas Pertamina yaitu sebagai berikut:</p>
              <img src="{{ asset('/img/tujuan-img.png') }}" alt="" class="ml-14 mt-6 w-60">
          </div>
      </div>
  </div>
</section>
{{-- endsection informasi program studi --}}
{{-- section alumni & kemahasiswaan --}}
<section class="w-full pb-3 alumni">
  <div class="w-full bg-sky-800 px-20 py-12">
      <div class="h-[1040px] text-white">
          <div class=" flex justify-between mb-10">
              <div class="w-[2096px]">
                  <img src="{{ asset('img/kemahasiswaan.png') }}" alt="">
              </div>
              <div class="px-20 py-6">
                  <h1 class="text-3xl font-bold pb-10">kemahasiswaan</h1>
                  <p class="pb-8"> pariatur, quasi, quas debitis a eligendi esse, cumque impedit? Veritatis assumenda ut iste, corporis quo laudantium sint officia alias error praesentium magni eligendi ipsa quia cupiditate distinctio architecto mollitia libero facilis rerum numquam perspiciatis illo laboriosam. Harum provident, inventore illum et, laudantium sunt dolores velit neque veniam, cupiditate deleniti magnam! Similique, nam? Porro maiores beatae laboriosam totam ullam, et eum repellat tempore ea, velit temporibus necessitatibus cupiditate culpa recusandae consectetur numquam qui! Nostrum veniam praesentium voluptas alias adipisci libero earum, est exercitationem facilis qui provident!</p>
                  <a href="" class="underline font-bold">Selengkapnya ></a>
              </div>
          </div>
          <div class="  flex justify-between">
              <div class="px-20 py-6">
                  <h1 class="text-3xl font-bold pb-10">Alumni</h1>
                  <p class="pb-8"> pariatur, quasi, quas debitis a eligendi esse, cumque impedit? Veritatis assumenda ut iste, corporis quo laudantium sint officia alias error praesentium magni eligendi ipsa quia cupiditate distinctio architecto mollitia libero facilis rerum numquam perspiciatis illo laboriosam. Harum provident, inventore illum et, laudantium sunt dolores velit neque veniam, cupiditate deleniti magnam! Similique, nam? Porro maiores beatae laboriosam totam ullam, et eum repellat tempore ea, velit temporibus necessitatibus cupiditate culpa recusandae consectetur numquam qui! Nostrum veniam praesentium voluptas alias adipisci libero earum, est exercitationem facilis qui provident!</p>
                  <a href="" class="underline font-bold">Selengkapnya ></a>
              </div>
              <div class="w-[2596px]">
                  <img src="{{ asset('/img/bg-alumni.png') }}" alt="" >
              </div>
          </div>
      </div>
  </div>
</section>
{{-- endsection alumni & kemahasiswaan --}}
{{-- section dosen --}}
<section>
  @include('content.listdosen')
</section>
{{-- endsection dosen --}}
<section id="content-news">
  @include('content.newscontent')
</section>
{{-- section event --}}
<section id="content-event">
  @include('content.eventcontent')
</section>
{{-- end section event --}}
{{-- section video profil --}}
<section id="content-videoprofil">
  <div class="description">
    <h1 class="title">Video Profil Prodi</h1>
    <p>Sekilas Video Profil Program Studi Ilmu Komputer <br> Universitas Pertamina</p>
    <button class="watch">Tonton Video</button>
  </div>
  <div class="video">
    <video width="552" height="277" class="watch">
      <source src="{{ asset('video/video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </div>
</section>
{{-- end section video profil --}}
{{-- section partnership --}}
<section id="content-partnership">
  <h1 class="title">Partnership</h1>
  <div class="partnership-logo">
    <img src="{{ asset('img/Pertamina.png') }}" alt="">
    <img src="{{ asset('img/Pertamina Foundation.png') }}" alt="">
    <img src="{{ asset('img/Universitas Pertamina.png') }}" alt="" width=156 height=106>
  </div>
</section>
{{-- end section partnership --}}
<div class="decoration">
</div>
@endsection