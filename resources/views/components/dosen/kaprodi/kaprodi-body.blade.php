@props(['kaprodi'])
<div class="w-[350px] h-[363px] sm:h-auto bg-gradient-to-b from-[#C2FF41] to-[#C4D82D]  min-[850px]:w-1/2 sm:w-[60vw] p-10 sm:p-20 relative rounded-[30px] sm:rounded-tr-[150px] sm:rounded-br-[11px]">
    <x-dosen.kaprodi.kaprodi-content :$kaprodi />
    @if(Request::routeIs('main.index'))
      <x-dosen.kaprodi.kaprodi-button />
    @endif
</div>