<div class="py-32 flex justify-center dosen">
  <div class="img relative">
      <div class=" pb-2">
          <h1 class="font-bold text-2xl text-center text-gradient">Kepala Prodi</h1>
      </div>
      <div class="relative d-flex items-center justify-center bg-dosen-pict left-10 z-10 " style="width:265px; height:363px;">
          <img src="{{ asset('img/dosen.png') }}" alt="" width=197 height=297 style="object-fit: contain;">
      </div>
  </div>
  <div class="bg-dosen w-1/2 p-20 relative rounded-tr-[150px] rounded-br-[11px]">
      <h1 class="text-blue-900 font-bold text-2xl">{{ $kaprodi['nama'] }}</h1>
      <h3 class="text-xs text-blue-500">{{ $kaprodi['email'] }}</h3>
      <h2 class="text-sm font-medium pb-8">{{ $kaprodi['posisi'] }}</h2>
      <p>keahlian:</p>
      <ul class="list-disc list-inside">
        @foreach($kaprodi['keahlian'] as $keahlian)
          <li>{{ $keahlian }}</li>
        @endforeach
      </ul>

      <div class="mt-20 bg-white w-32 text-center rounded-2xl text-dark p-1 font-bold">
          <button>Profil Dosen</button>
      </div>    
      @if(Request::routeIs('main.index'))
        <div class="absolute bottom-0 right-0">
          <a href="{{ route('main.dosen') }}">
            <div class="flex bg-dosen-link pt-3 px-2">
                <p class="text-2xl">Daftar Dosen</p>
                <div class=" rounded-full w-14 h-7 text-center">
                    <p class="font-bold">></p>
                </div>
            </div>
          </a>
        </div>
      @endif
  </div>
</div>
