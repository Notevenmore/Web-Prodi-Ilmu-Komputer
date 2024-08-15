<section class="flex flex-col items-center justify-center gap-5 sm:gap-10 p-10">
    <x-title :responsive="'text-xl md:text-3xl'" :title="'PARTNERSHIP'" :line="True" />
    @foreach(array_chunk($partners, 3) as $partner)
    <div class="grid @if(count($partner) > 3) grid-cols-3 @else grid-cols-{{ count($partner) }} @endif items-center justify-center gap-10 md:gap-20">
      @foreach($partner as $p)
        <img src="{{ asset($p['image']) }}" alt="">
      @endforeach
    </div>
    @endforeach
  </section>