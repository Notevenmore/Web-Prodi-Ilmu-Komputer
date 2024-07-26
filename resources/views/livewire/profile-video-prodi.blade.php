<section class="bg-[#F8FCDA] flex items-center justify-center p-24 gap-20 mt-40">
    <div class="flex flex-col gap-4">
      <x-title :title="'Video Profil Prodi'" :textColor="'text-biru'" :line="True" />
      <p>Sekilas Video Profil Program Studi Ilmu Komputer <br> Universitas Pertamina</p>
      <button class="watch bg-biru text-white rounded-xl w-40 h-8">Tonton Video</button>
    </div>
    <div class="">
      <video width="552" height="277" class="watch rounded-3xl drop-shadow-video">
        <source src="{{ asset('video/video.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
      </video>
    </div>
  </section>