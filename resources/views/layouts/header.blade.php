<section class="flex items-center justify-between px-8 py-4 bg-white shadow-md navbar">
    <div class="flex items-center gap-x-3">
        <img src="{{ asset('images/mosque.svg') }}" alt="logo" class="w-10 h-10">
        <span class="text-xl font-bold text-slate-800">Masjid Al Ghufron</span>
    </div>
    <div class="items-center hidden md:flex gap-x-3">
        <a href="#" class="px-3 py-2 text-base font-semibold transition text-slate-600 hover:bg-slate-600 hover:text-white">Home</a>
        <a href="#activity" class="px-3 py-2 text-base font-semibold transition text-slate-600 hover:bg-slate-600 hover:text-white">Tentang</a>
        {{-- <a href="#activity" class="px-3 py-2 text-base font-semibold transition text-slate-600 hover:bg-slate-600 hover:text-white">Kegiatan</a> --}}
        <a href="#infaq" class="px-3 py-2 text-base font-semibold transition text-slate-600 hover:bg-slate-600 hover:text-white">Infaq</a>
        <a href="#report" class="px-3 py-2 text-base font-semibold transition text-slate-600 hover:bg-slate-600 hover:text-white">Laporan Kas</a>
        <a href="#contact" class="px-3 py-2 text-base font-semibold transition text-slate-600 hover:bg-slate-600 hover:text-white">Kontak</a>
    </div>
    <button class="block px-3 py-2 rounded-md md:hidden bg-slate-600" x-on:click="navbar=!navbar">
        <i class="text-white bi bi-list"></i>
    </button>
    <div class="fixed inset-0 w-screen h-screen bg-black/70" x-show="navbar" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-x-full" x-transition:enter-end="opacity-100 translate-x-0">
        <div class="fixed left-0 flex flex-col w-1/2 h-screen py-5 bg-white shadow-md gap-y-2 drop-shadow-lg" x-on:click.away="navbar=false">
            <span class="text-base font-bold text-center text-slate-800">Masjid Al Ghufron</span>
            <a href="#" class="w-full px-3 py-2 text-base font-semibold underline transition text-slate-600 hover:bg-slate-600 hover:text-white">Home</a>
            <a href="#about" class="px-3 py-2 text-base font-semibold underline transition text-slate-600 hover:bg-slate-600 hover:text-white">Tentang</a>
            <a href="#activity" class="px-3 py-2 text-base font-semibold underline transition text-slate-600 hover:bg-slate-600 hover:text-white">Kegiatan</a>
            <a href="#infaq" class="px-3 py-2 text-base font-semibold underline transition text-slate-600 hover:bg-slate-600 hover:text-white">Infaq</a>
            <a href="#report" class="px-3 py-2 text-base font-semibold underline transition text-slate-600 hover:bg-slate-600 hover:text-white">Laporan Kas</a>
            <a href="#contact" class="px-3 py-2 text-base font-semibold underline transition text-slate-600 hover:bg-slate-600 hover:text-white">Kontak</a>
        </div>
    </div>
</section>
