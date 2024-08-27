<div class="w-screen flex flex-col mb-20 items-center justify-center py-10 gap-10 sm:gap-20">
    <x-title :position="'items-center justify-center'" :title="'Tentang Kami'" :gap="'gap-1 sm:gap-5'" :responsive="'text-2xl sm:text-5xl'" />
    <a href="" class="fixed left-0 top-[33rem] w-16"><img src="{{ asset('img/button-daftar.png') }}" alt=""></a>
    <div class="grid grid-cols-1 md:grid-cols-5 grid-rows-[repeat(3,minmax(0,1fr))] gap-14 px-7 lg:px-10 xl:px-20 text-xl">
        <x-profile-description :content="$profile[0]" class="md:col-start-1 md:col-end-4 row-start-1 row-end-2" />
        <x-profile-description :content="$profile[1]" class="md:col-start-2 md:col-end-6 row-start-2 row-end-3" />
        <x-profile-description :content="$profile[2]" class="md:col-start-1 md:col-end-5 row-start-3 row-end-4" />
    </div>
</div>
