<section class="flex flex-col items-center justify-center gap-10 p-10">
    <x-title :title="'Partnership'" :textColor="'text-red-500'" :line="True" />
    <div class="flex flex-row items-center justify-center gap-20">
      @foreach($partners as $partner)
        <img src="{{ asset($partner['image']) }}" alt="">
      @endforeach
    </div>
  </section>