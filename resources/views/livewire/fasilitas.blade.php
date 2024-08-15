<section class="flex flex-col gap-10 px-10 sm:px-24 md:px-36 xl:px-56 py-10 lg:py-20">
  <div class="flex flex-col">
    <x-title :title="'Galeri'"  />
    <div class="list-fasilitas gap-3 lg:gap-5 mt-10 justify-center w-full">
      @foreach($fasilitas as $f) 
      <img src="{{ asset($f) }}" alt="" class="w-full h-full">
      @endforeach
    </div>
  </div>
</section>