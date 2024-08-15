<section class="bg-[#005CA8] flex items-center justify-center p-8 sm:p-16 md:p-24 gap-4 sm:gap-5 md:gap-20 mt-40 w-screen">
    <div class="flex flex-col gap-2 sm:gap-4">
      <x-title :responsive="'md:text-3xl sm:text-lg text-xs'" :title="'Video Profil Prodi'" :textColor="'text-white'" :line="True" />
      <p class="lg:text-base md:text-sm sm:text-xs text-[0.4rem] text-white">Sekilas Video Profil Program Studi Ilmu Komputer <br> Universitas Pertamina</p>
      <button class="watch bg-[#C4D82D] text-[#05335A] rounded-xl sm:w-36 md:w-52 sm:h-10 w-20 h-7 sm:text-base text-[0.5rem] font-bold">Tonton Video</button>
    </div>
    <div class="w-[14rem] h-[8rem] sm:w-[17.5rem] sm:h-[8.65rem] lg:w-[35rem] lg:h-[17.31rem] rounded-3xl drop-shadow-video overflow-hidden">
      <video  class=" w-full h-full object-cover watch">
        <source src="{{ asset('video/video.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
      </video>
    </div>
  </section>