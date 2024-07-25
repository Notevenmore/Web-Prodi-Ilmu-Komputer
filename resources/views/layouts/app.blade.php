<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Odor+Mean+Chey&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>{{ $title }}</title>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/output.css') }}">
</head>
<body>
  @include('layouts.nav')
  <section id="content">
    @yield('content')
    @if(Request::routeIs(['main.dosen', 'main.berita']))
      {{ $slot }}
    @endif
  </section>
  @include('layouts.footer')
  @if(Request::routeIs('main.index'))
    <script src="{{ asset('js/script.js') }}"></script>
  @endif
</body>
</html>