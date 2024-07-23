<div class="flex-wrap flex justify-center w-full gap-y-10 text-white">
  @foreach ($peminatans as $peminatan)
    <x-peminatan.card :title="$peminatan['title']" :description="$peminatan['description']" :image="$peminatan['image']" />
  @endforeach
</div>
