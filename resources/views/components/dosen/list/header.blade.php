@props(['nama', 'email', 'jabatan', 'class'])
<h1 class=" @isset($jabatan) font-medium text-black {{ $class }} @else font-semibold text-biru text-2xl @endif">{{ $nama }}</h1>
<p class="@isset($jabatan) text-black font-medium {{ $class }} @else text-biru font-normal text-sm @endif ">{{ $email }}</p>
<p class="@isset($jabatan) {{ $class }} @else text-sm @endif text-black font-medium ">@isset($jabatan) {{ $jabatan }} @else Pengajaran @endif</p>