<div class="grid justify-items-center w-[70rem] grid-cols-3 gap-6">
  @foreach($dosen as $d)
    <div class="flex flex-col">
      <div class="img bg-dosen-pict items-center justify-center w-80 h-105 z-20">
        <img src="{{ asset($d['img']) }}" alt="" class="w-64 h-97" >
      </div>
      <div class="relative flex flex-col w-80 px-5 pt-10 pb-14 gap-[8px] bg-[#d9d9d9] z-0 mt-[-20px]">
        <h1 class="font-semibold text-2xl text-biru">{{ $d['nama'] }}</h1>
        <p class="text-biru font-normal text-sm">{{ $d['email'] }}</p>
        <p class="font-medium text-black text-sm">Pengajaran</p>
        <div class="ps-8">
          <ul class="font-medium text-black text-sm list-disc">
            @foreach($d['keahlian'] as $keahlian)
              <li>{{ $keahlian }}</li>
            @endforeach
          </ul>
        </div>
        <div class="absolute bottom-0 right-0">
          <a href="{{ route('main.dosen') }}">
            <div class="flex items-center bg-white rounded-tl-xl pt-3 px-2 w-[111px]">
                <p class="text-xs font-medium">Detail Dosen</p>
                <div class="w-20 h-12 rounded-full text-center flex items-center justify-center bg-biru">
                    <p class="text-[15px] text-white">></p>
                </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>