@props(['kaprodi'])
<div>
    <h1 class="text-blue-900 font-bold text-2xl">{{ $kaprodi['nama'] }}</h1>
    <h3 class="text-xs text-blue-500">{{ $kaprodi['email'] }}</h3>
    <h2 class="text-sm font-medium pb-8">{{ $kaprodi['posisi'] }}</h2>
    <p>keahlian:</p>
    <x-dosen.kaprodi.kaprodi-list-keahlian :keahlian="$kaprodi['keahlian']" />
    <div class="mt-20 bg-white w-32 text-center rounded-2xl text-dark p-1 font-bold">
        <button>Profil Dosen</button>
    </div>    
</div>