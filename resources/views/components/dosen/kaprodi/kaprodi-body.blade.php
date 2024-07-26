@props(['kaprodi'])
<div class="bg-gradient-to-b from-[#C2FF41] to-[#C4D82D] w-1/2 p-20 relative rounded-tr-[150px] rounded-br-[11px]">
    <x-dosen.kaprodi.kaprodi-content :$kaprodi />
    @if(Request::routeIs('main.index'))
      <x-dosen.kaprodi.kaprodi-button />
    @endif
</div>