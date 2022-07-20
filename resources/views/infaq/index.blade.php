@extends('layouts.dashboard.app')

@section('body')
<h3 class="text-3xl font-medium text-gray-700">Daftar Infaq</h3>
{{-- <div class="mt-8">
    <a href="{{ route('jumat.create') }}" class="px-4 py-2 font-bold text-white transition bg-indigo-600 rounded-md hover:bg-indigo-800">+ Tambah Jadwal Jumat</a>
</div> --}}

<div class="flex flex-col mt-4">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">No</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Tanggal</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Nama</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Jumlah</th>
                        {{-- <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th> --}}
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @if ($infaq->count()<=0) <tr>
                        <td class="px-6 py-4 text-center whitespace-no-wrap border-b border-gray-200" colspan="5">Tidak Ada Infaq</td>
                        </tr>
                        @endif
                        @forelse ($infaq as $key=>$data)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm font-medium leading-5 text-gray-900">{{ $key+1 }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ date('d-M-Y',strtotime($data->created_at)) }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $data->nama }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $data->jumlah }}</div>
                            </td>

                            {{-- <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="{{ route('infaq.edit',$data->id) }}" class="mr-3 font-semibold text-indigo-600 hover:text-indigo-900">Ubah</a>
                            <form action="{{ route('infaq.destroy',$data->id) }}" method="post" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-semibold text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                            </td> --}}
                        </tr>
                        @empty
                        <span class="inline-block mb-3 text-lg font-bold text-center">Tidak Ada Hasil Ditemukan</span>
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    const toggleImage = (id) => {
        let image = document.getElementById(id);
        image.classList.remove('hidden');
        image.classList.add('flex');
    }

    const closeImage = (id) => {
        let image = document.getElementById(id);
        image.classList.remove('flex');
        image.classList.add('hidden');
    }

</script>
@endsection
