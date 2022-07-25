<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    {{-- <link rel="canonical" href="{{ $page->getUrl() }}"> --}}

    <meta name="description" content="Sistem Informasi Infaq Masjid Al-Ghufron">

    <title>Sistem Informasi Infaq Masjid Al-Ghufron</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/mosque.svg') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b2ba1193ce.js" crossorigin="anonymous"></script>
</head>
<body>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">

        <div class="flex flex-col flex-1 overflow-hidden">

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container px-6 py-8 mx-auto">
                    <h3 class="text-3xl font-medium text-gray-700">Laporan Kas Mesjid Al Ghufron</h3>
                    {{-- <div class="mt-4">
                        <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                    <div class="p-3 bg-indigo-600 bg-opacity-75 rounded-full">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>

                                    @if (count($transactions)>0)
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">{{ number_format($transactions[0]->saldo,0,",",".") }}</h4>
                    <div class="text-gray-500">Saldo Kas</div>
                </div>
                @else
                <div class="mx-5">
                    <h4 class="text-2xl font-semibold text-gray-700">0</h4>
                    <div class="text-gray-500">Saldo Kas</div>
                </div>
                @endif
        </div>
    </div>

    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
            <div class="p-3 bg-red-800 bg-opacity-75 rounded-full">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z"></path>
                </svg>
            </div>

            <div class="mx-5">
                <h4 class="text-2xl font-semibold text-gray-700">{{ number_format($totalOut,0,",",".") }}</h4>
                <div class="text-gray-500">Jumlah Pengeluaran Bulan Ini</div>
            </div>
        </div>
    </div>

    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
            <div class="p-3 bg-green-800 bg-opacity-75 rounded-full">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                </svg>
            </div>

            <div class="mx-5">
                <h4 class="text-2xl font-semibold text-gray-700">{{ number_format($totalIn,0,",",".") }}</h4>
                <div class="text-gray-500">Jumlah Pemasukan Bulan Ini</div>
            </div>
        </div>
    </div>
    </div>
    </div> --}}

    <div class="flex flex-col mt-4">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="flex justify-center inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                <table class="">
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
                        <td colspan="7" class="mb-3 text-lg font-bold text-center">Tidak Ada Hasil Ditemukan</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    </main>
    </div>
    </div>
    <script>
        window.print();

    </script>
</body>
</html>
