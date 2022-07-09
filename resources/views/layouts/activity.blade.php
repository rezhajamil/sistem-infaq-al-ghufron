<section id="activity" class="w-full px-8 my-6 bg-slate-600">
    <span class="inline-block w-full my-6 text-4xl font-bold text-center text-white wow slideInLeft">Kegiatan Masjid Kami</span>
    <div class="w-full py-6 mx-auto md:px-8">
        <div class="flex justify-center activity-slider gap-x-4 h-fit">
            @foreach ($activities as $data)
            <div class="overflow-hidden bg-white rounded-lg h-fit lg:w-1/2">
                <div class="overflow-hidden max-h-80">
                    <img src="{{ asset('storage/'.$data->gambar) }}" class="object-cover object-center max-w-full max-h-full">
                </div>
                <div class="px-4 py-5">
                    <span class="text-xl font-bold text-black">{{ $data->nama }}</span>
                    <p class="text-base font-semibold text-slate-700">{{ $data->deskripsi }}</p>
                </div>
            </div>
            @endforeach
            {{-- <div class="overflow-hidden bg-white rounded-lg lg:w-1/2">
                <div class="overflow-hidden max-h-64">
                    <img src="{{ asset('images/ghufron1.jpeg') }}" class="object-fill">
        </div>
        <div class="px-4 py-5">
            <span class="text-xl font-bold text-black">Isra' Miraj2</span>
            <p class="text-base font-semibold text-slate-700">Kegiatan Isra' Miraj</p>
        </div>
    </div>
    <div class="overflow-hidden bg-white rounded-lg lg:w-1/2">
        <div class="overflow-hidden max-h-64">
            <img src="{{ asset('images/ghufron1.jpeg') }}" class="object-fill">
        </div>
        <div class="px-4 py-5">
            <span class="text-xl font-bold text-black">Isra' Miraj3</span>
            <p class="text-base font-semibold text-slate-700">Kegiatan Isra' Miraj</p>
        </div>
    </div>
    <div class="overflow-hidden bg-white rounded-lg lg:w-1/2">
        <div class="overflow-hidden max-h-64">
            <img src="{{ asset('images/ghufron1.jpeg') }}" class="object-fill">
        </div>
        <div class="px-4 py-5">
            <span class="text-xl font-bold text-black">Isra' Miraj4</span>
            <p class="text-base font-semibold text-slate-700">Kegiatan Isra' Miraj</p>
        </div>
    </div> --}}
    </div>
    <div class="flex justify-center mt-4 nav-container">
        <button class="px-3 py-2 mx-3 font-semibold capitalize bg-white rounded text-slate-800"><i class="bi bi-caret-left-fill"></i></button>
        <button class="px-3 py-2 mx-3 font-semibold capitalize bg-white rounded text-slate-800"><i class="bi bi-caret-right-fill"></i></button>
    </div>
    </div>
</section>
