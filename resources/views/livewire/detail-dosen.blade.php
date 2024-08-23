<div class="grid grid-cols-1 sm:grid-cols-3 sm:grid-rows-5 sm:gap-5 md:gap-12 p-3 lg:p-14 xl:p-32">
    <div class="sm:col-start-1 sm:col-end-2 sm:row-start-1 sm:row-end-3 lg:row-end-4 w-full h-full">
        <x-dosen.list.img :img="$lecture['img']" />
    </div>
    <div class="sm:col-start-2 sm:col-end-4 sm:row-start-1 sm:row-end-2 w-full h-full flex flex-col gap-1 sm:gap-4 py-10 text-center sm:text-start">
        <x-dosen.list.header 
            :nama="'Nama : '.$lecture['nama']"
            :email="'Email : '.$lecture['email']"
            :jabatan="'Jabatan : '.$lecture['posisi']"
            :class="'text-xs sm:text-base lg:text-xl'"
        />
    </div>
    <div class="sm:col-start-1 sm:col-end-4 sm:row-start-3 lg:row-start-4 sm:row-end-6 bg-[#4280B3] text-white px-2 sm:px-10 pt-1 pb-5 sm:py-5 rounded-2xl w-full h-full">
        <x-dosen.detail.description-item :datas="$lecture['biografi']" :title="'Biografi'" />
        <x-dosen.detail.description-item :datas="$lecture['pendidikan']" :title="'Pendidikan'" />
        <x-dosen.detail.description-item :datas="$lecture['keahlian']" :title="'Pengajaran'" />
    </div>
</div>
