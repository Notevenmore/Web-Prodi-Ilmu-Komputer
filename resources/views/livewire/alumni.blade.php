<section class="flex flex-col w-full px-5 md:px-9 lg:px-24 gap-10 md:gap-20 justify-center my-20">
    <div class="gap-4 flex flex-col">
        <x-title :title="'Alumni'"  />
        <p class="text-justify">Lulusan Program Studi Ilmu Komputer Universitas Pertamina memiliki peluang karier yang luas di berbagai industri yang memerlukan kompetensi dan keterampilan di bidang ilmu komputer. Mereka dapat berperan sebagai Manajerial TI yang bertanggung jawab atas pengelolaan layanan TI dalam organisasi, Konsultan TI, hingga menjadi Pengusaha di sektor teknologi informasi. Selain itu, mereka juga berpeluang menjadi Software Engineer atau Peneliti, baik di bidang akademis maupun profesional. Prospek karier lainnya meliputi posisi seperti Data Scientist, Data Engineer, Data Analyst, Machine Learning Engineer, Software Architect, Web Apps Developer, hingga Database Administrator, yang semuanya memainkan peran penting dalam mengembangkan dan mengoptimalkan solusi teknologi di berbagai sektor industri.</p>
    </div>
    <div class="flex flex-col gap-10">
        @foreach($alumnis as $alumni)
            <div class="flex flex-col sm:flex-row gap-10 items-center justify-center">
                <img src="{{ asset('img/'.$alumni['img']) }}" alt="" class="rounded-full w-full h-full max-w-44 max-h-44">
                <div class="flex flex-col gap-3 font-bold lg:text-base text-sm sm:text-left text-justify">
                    <p class="text-black">{{ $alumni['quotes'] }}</p>
                    <div class="flex flex-col">
                        <p class="bg-clip-text bg-gradient-to-b from-[#0C82E3] via-[#0E78CF] to-[#005CA8] text-transparent">{{ $alumni['name'] }}</p>
                        <p class="bg-clip-text bg-gradient-to-b from-[#0C82E3] via-[#0E78CF] to-[#005CA8] text-transparent">{{ $alumni['work_position'] }}</p>
                        <p class="bg-clip-text bg-gradient-to-b from-[#0C82E3] via-[#0E78CF] to-[#005CA8] text-transparent">{{ $alumni['studies_position'] }} {{ $alumni['year'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="bg-gradient-to-br from-[#F2F2F2] via-[#CFCFCF] to-[#FFFFFF] flex flex-col md:flex-row gap-5 items-center justify-evenly p-24 rounded-3xl">
        <img src="{{ asset('img/quotes.jpeg') }}" alt="" class="rounded-full w-full h-full max-w-40 max-h-40">
        <div class="flex flex-col gap-2 font-bold text-center">
            <p>Success is not final, failure is not fatal: it is the courage to continue that counts</p>
            <p class="bg-gradient-to-b from-[#0C82E3] via-[#0E78CF] to-[#005CA8] bg-clip-text text-transparent">Maria</p>
        </div>
    </div>
</section>