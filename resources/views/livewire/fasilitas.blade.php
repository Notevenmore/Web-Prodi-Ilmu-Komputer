<section class="flex flex-col gap-10 p-20">
    <x-title :title="'Galeri'"  />
    <div class="list-fasilitas gap-5 mt-10 justify-center">
      @foreach($fasilitas as $f) 
        <img src="{{ asset($f) }}" alt="">
      @endforeach
    </div>
</section>