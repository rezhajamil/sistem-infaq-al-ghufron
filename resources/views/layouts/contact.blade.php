<section class="w-full px-8 my-6 " id="contact">
    <div class="grid grid-cols-2 py-5 gap-x-4">
        <div class="flex items-center justify-center col-span-1 -my-8 border-r-4 border-slate-800">
            <i class="text-[200px] bi bi-telephone-forward-fill text-slate-800"></i>
        </div>
        <div class="w-full col-span-1 ml-4">
            <form action="{{ route('contact') }}" method="post" class="flex flex-col justify-center">
                @csrf
                <div class="flex gap-x-3">
                    <input type="text" class="w-full px-4 py-2 font-semibold capitalize border-2 rounded text-slate-800 border-slate-800" placeholder="Nama Anda" name="name" required>
                    <input type="number" class="w-full px-4 py-2 font-semibold capitalize border-2 rounded text-slate-800 border-slate-800" placeholder="Nomor Telepon Anda" name="phone">
                </div>
                <textarea name="message" id="message" cols="30" rows="10" class="w-full px-4 py-2 my-4 font-semibold border-2 rounded border-slate-800 text-slate-800" placeholder="Pesan Anda..." required></textarea>
                <button type="submit" class="px-4 py-2 font-bold text-white transition-all border-2 rounded bg-slate-800 hover:bg-white border-slate-800 hover:text-slate-800">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>
