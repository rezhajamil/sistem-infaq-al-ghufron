@extends('layouts.dashboard.app')
@section('body')

<div class="flex items-center justify-center w-full h-full">
    <div class="w-full p-6 bg-white rounded-md shadow-md md:w-1/2 h-fit">
        <h2 class="mb-4 text-lg font-semibold text-gray-700 capitalize">Tambah Jadwal Jumat</h2>
        <form method="POST" action="{{ route('jumat.update',$jumat->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="flex flex-col gap-y-6">
                <div>
                    <label class="text-gray-700" for="tamgga;">Tanggal*</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="date" name="tanggal" required autofocus value="{{ old('tanggal',$jumat->tanggal) }}">
                    @error('tanggal')
                    <span class="text-sm font-semibold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700" for="desc">Imam*</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="text" name="imam" required autofocus value="{{ old('imam',$jumat->imam) }}">
                    @error('imam')
                    <span class="text-sm font-semibold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700" for="desc">Khotib*</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="text" name="khotib" required autofocus value="{{ old('khotib',$jumat->khotib) }}">
                    @error('khotib')
                    <span class="text-sm font-semibold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end mt-4">
                <button class="w-full px-4 py-2 text-gray-200 bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
