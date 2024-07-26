<header>
  <nav class="flex justify-between items-center px-24 bg-white ">
      <div class="py-4">
          <img src="{{ asset("/img/logo-navbar.png") }}" alt="" class="w-72">
      </div>
      <div class="px-4 text-lg missing">
          <ul class="flex items-center gap-[2vw]">
              <li><a href="{{ route('main.index') }}" class="group @if(Request::routeIs('main.index')) text-red-600 @else text-blue-700 @endif hover:text-sky-500">Beranda</a></li>
              <li><a href="{{ route('main.akademik') }}" class="group @if(Request::routeIs('main.akademik')) text-red-600 @else text-blue-700 @endif hover:text-sky-500">Akademik</a></li>
              <li><a href="{{ route('main.fasilitas') }}" class="group @if(Request::routeIs('main.fasilitas')) text-red-600 @else text-blue-700 @endif hover:text-sky-500">Fasilitas</a></li>
              <li><a href="{{ route('main.berita') }}" class="group @if(Request::routeIs('main.berita')) text-red-600 @else text-blue-700 @endif hover:text-sky-500">Agenda & Berita</a></li>
              <li><a href="" class="group hover:text-sky-500 text-blue-700">Kontak</a></li>
          </ul>
      </div>
  </nav>
</header>