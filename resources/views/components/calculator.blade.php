<div class="fixed inset-0 flex items-center justify-center w-screen h-screen bg-neutral-800/60" x-show="calculator" x-transition>
    <div class="relative w-3/4 px-3 py-2 bg-white rounded-lg md:w-1/3" x-on:click.away="calculator=false">
        <span class="flex justify-center my-3 text-xl font-bold text-center">Silahkan Berinfaq</span>
        <form action="{{ route('checkout.store') }}" method="post">
            @csrf
            <label for="name">
                <input type="text" name="nama" class="w-full my-4 rounded" placeholder="Nama Anda (Optional)">
            </label>
            <label for="jumlah">
                <input type="number" name="jumlah" class="w-full my-4 rounded" placeholder="Jumlah">
            </label>
            {{-- <input type="hidden" name="jumlah" value="{{ old('jumlah') }}">
            <div class="flex flex-col my-3">
                <div class="flex items-center justify-between w-full px-2 py-3 rounded-lg sm:px-4 bg-slate-200">
                    <span class="text-2xl font-bold select-none sm:text-4xl">Rp.</span>
                    <span class="text-2xl font-bold select-none sm:text-4xl jumlah">{{ old('jumlah',0) }}</span>
                </div>
                @error('jumlah')
                <div class="mt-2 text-xs italic text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <div class="grid grid-cols-3 my-3 gap-x-2 gap-y-3">
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">1</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">2</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">3</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">4</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">5</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">6</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">7</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">8</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">9</span>
                    </div>
                    <div class="flex items-center justify-center col-span-2 py-4 transition shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-slate-500">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">0</span>
                    </div>
                    <div class="flex items-center justify-center col-span-1 py-4 transition bg-red-600 shadow-lg cursor-pointer btn-calc rounded-xl group hover:bg-red-700">
                        <span class="text-2xl font-bold transition select-none sm:text-4xl group-hover:text-white">C</span>
                    </div>
                </div>
            </div> --}}
            <button type="submit" class="w-full px-3 py-2 text-lg font-bold text-white transition rounded-lg select-none bg-slate-600 hover:bg-slate-800">Transfer Infaq</button>
        </form>
    </div>
</div>
