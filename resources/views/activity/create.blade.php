@extends('layouts.dashboard.app')
@section('body')

<div class="flex items-center justify-center w-full h-full">
    <div class="w-full p-6 bg-white rounded-md shadow-md md:w-1/2 h-fit">
        <h2 class="mb-4 text-lg font-semibold text-gray-700 capitalize">Tambah Kegiatan Mesjid</h2>
        <form method="POST" action="{{ route('activity.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-y-6">
                <label class="w-full">
                    <div class="relative group">
                        <img alt="avatar" class="object-cover w-full rounded-md h-36 avatar-img">
                        <div class="absolute inset-0 flex flex-col items-center justify-center w-full h-full transition bg-indigo-600 rounded-md group-hover:flex group-hover:bg-indigo-800 flex-nowrap">
                            <label for="avatar" class="w-full pt-6 my-auto font-semibold text-center text-white">Upload Foto</label>
                            <input type="file" class="opacity-0 -z-10" name="gambar" id="avatar" accept="image/*" onchange="previewImage()">
                        </div>
                    </div>
                    @error('gambar')
                    <span class="text-red-500 dark:text-red-500">{{ $message }}</span>
                    @enderror
                </label>
                <div>
                    <label class="text-gray-700" for="name">Nama Kegiatan*</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="text" name="nama" required autofocus value="{{ old('nama') }}">
                    @error('nama')
                    <span class="text-sm font-semibold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700" for="desc">Deskripsi Kegiatan*</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="text" name="deskripsi" required autofocus value="{{ old('deskripsi') }}">
                    @error('deskripsi')
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
@section('script')
<script>
    function previewImage() {
        const input = document.querySelector('input[name=gambar]');
        const preview = document.querySelector('.avatar-img');
        const file = input.files[0];
        const reader = new FileReader();
        reader.addEventListener('load', function() {
            preview.src = reader.result;
            input.parentNode.classList.add('hidden')
        });
        if (file) {
            reader.readAsDataURL(file);
        }
    }

</script>
@endsection
