@extends('layouts.dashboard.app')
@section('body')

<div class="flex items-center justify-center w-full h-full">
    <div class="w-full p-6 bg-white rounded-md shadow-md md:w-1/2 h-fit">
        <h2 class="mb-4 text-lg font-semibold text-gray-700 capitalize">Tambah Transaksi Kas</h2>
        <form method="POST" action="{{ route('transaction.store') }}">
            @csrf
            <div class="flex flex-col gap-y-6">
                <div>
                    <label class="text-gray-700" for="name">Deskripsi Transaksi*</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="text" name="deskripsi" required autofocus value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                    <span class="text-sm font-semibold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-y-2">
                    <label class="text-gray-700" for="type">Jenis Transaksi*</label>
                    <select name="jenis" id="jenis" class="rounded-md ">
                        <option value="Pemasukan">Pemasukan</option>
                        <option value="Pengeluaran">Pengeluaran</option>
                    </select>
                    @error('jenis')
                    <span class="text-sm font-semibold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700" for="date">Tanggal*</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="date" name="tanggal" required>
                    @error('tanggal')
                    <span class="text-sm font-semibold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700" for="password">Jumlah*</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="number" name="jumlah" required>
                    @error('jumlah')
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
