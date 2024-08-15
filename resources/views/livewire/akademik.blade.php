<section  class="flex flex-col gap-10 p-8 sm:p-20">
    <x-title :title="'Kurikulum'" />
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center sm:justify-center gap-10">
      @php $i = 1; @endphp
      @foreach($semesters as $studies)
            <div class="flex flex-col gap-3">
              <h1>Semester {{ $i }}</h1>
              @php $i++; @endphp
              <x-akademik.table.index :$key :$studies/>
            </div>
      @endforeach
    </div>
</section>