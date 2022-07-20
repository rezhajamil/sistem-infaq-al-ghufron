<section id="report" class="w-full px-8 pb-6 my-6 bg-slate-800" onclick="runAnimations()">
    <span class="inline-block w-full mt-6 text-4xl font-bold text-center text-white wow slideInLeft">Laporan Kas BKM Al-Ghufron</span>
    <span class="block w-full mt-3 text-2xl font-semibold text-center capitalize text-slate-300 wow slideInLeft">Bulan Ini</span>
    @if (count($transactions)>0)
    <span class="inline-block w-full mt-6 text-4xl font-bold text-center text-white wow slideInLeft"><span class="span" id="total">Rp. {{ number_format($transactions[0]->saldo,0,",",".") }}</span></span>
    @else
    <span class="inline-block w-full mt-6 text-4xl font-bold text-center text-white wow slideInLeft"><span class="span" id="total">Rp. 0</span></span>
    @endif
    <div class="flex flex-col mt-4">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full overflow-auto max-h-80">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">No</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Keterangan</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Jenis</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Jumlah</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Tanggal</th>
                            <th class="px-6 py-3 text-xs font-bold leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Saldo</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        <tr class="bg-slate-500">
                            <td colspan="4" class="text-center"><span class="text-lg font-bold text-center text-white">Saldo Akhir Bulan Lalu</span></td>
                            <td colspan="2" class="text-center"><span class="text-lg font-bold text-center text-white">{{ number_format($lastMonthBalance,0,",",".") }}</span></td>
                        </tr>
                        @forelse ($transactions as $key=>$data)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm font-medium leading-5 text-gray-900">{{ $key+1 }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $data->deskripsi }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="inline-flex px-2 text-xs font-semibold leading-5 {{ $data->jenis=='Pemasukan'? "text-green-800 bg-green-100":"text-red-800 bg-red-100 " }} rounded-full">{{ $data->jenis }}</span>
                            </td>

                            <td class="px-6 py-4 text-sm font-semibold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ number_format($data->jumlah,0,",",".") }}</td>

                            <td class="px-6 py-4 text-sm font-semibold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ date("d-M-Y",strtotime($data->tanggal)) }}</td>

                            <td class="px-6 py-4 text-sm font-bold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ number_format($data->saldo,0,",",".") }}</td>
                        </tr>
                        @empty
                        <td colspan="6" class="mb-3 text-lg font-bold text-center">Tidak Ada Hasil Ditemukan</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <span class="inline-block w-full mt-12 text-4xl font-bold text-center text-white wow slideInLeft">Daftar Infaq Mesjid Al-Ghufron</span>
    <div class="flex flex-col mt-4">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full overflow-auto max-h-80">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">No</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Tanggal</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Nama</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Jumlah</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @forelse ($infaq as $key=>$data)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm font-medium leading-5 text-gray-900">{{ $key+1 }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm font-semibold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ date("d-M-Y",strtotime($data->created_at)) }}</td>

                            <td class="px-6 py-4 text-sm font-semibold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $data->nama }}</td>

                            <td class="px-6 py-4 text-sm font-bold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $data->jumlah }}</td>
                        </tr>
                        @empty
                        <span class="inline-block mb-3 text-lg font-bold text-center">Tidak Ada Hasil Ditemukan</span>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <span class="inline-block w-full mt-12 text-4xl font-bold text-center text-white wow slideInLeft">Petugas Jumat BKM Al-Ghufron</span>
    <span class="block w-full mt-3 text-2xl font-semibold text-center capitalize text-slate-300 wow slideInLeft">Bulan Ini</span>
    <div class="flex flex-col mt-4">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full overflow-auto max-h-80">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">No</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Tanggal</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Imam</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Khotib</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @forelse ($jumat as $key=>$data)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm font-medium leading-5 text-gray-900">{{ $key+1 }}</div>
                            </td>

                            <td class="px-6 py-4 text-sm font-semibold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ date("d-M-Y",strtotime($data->tanggal)) }}</td>

                            <td class="px-6 py-4 text-sm font-semibold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $data->imam }}</td>

                            <td class="px-6 py-4 text-sm font-bold leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $data->khotib }}</td>
                        </tr>
                        @empty
                        <span class="inline-block mb-3 text-lg font-bold text-center">Tidak Ada Hasil Ditemukan</span>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
