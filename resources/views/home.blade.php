@extends('layouts.app')
@section('content')
    <button x-on:click="calculator=!calculator" class="text-white bg-blue-400">
        Klik
    </button>
    <div class="absolute flex items-center justify-center w-full h-full bg-neutral-800/60" x-show="!calculator">
        <div class="relative w-3/4 px-3 py-2 bg-white rounded-lg md:w-1/3">
            <span class="flex justify-center my-3 text-xl font-bold text-center">Silahkan Berinfaq</span>
            <form action="" method="post">
                <label for="name">
                    {{-- <span class="text-base font-semibold">Nama Anda (Optional)</span> --}}
                    <input type="text" name="name" class="w-full rounded" placeholder="Nama Anda (Optional)">
                </label>
                <input type="hidden" name="amount" value="0">
                <div class="flex flex-col my-3">
                    <div class="flex items-center justify-between w-full px-2 py-3 rounded-lg sm:px-4 bg-slate-200">
                        <span class="text-2xl font-bold select-none sm:text-4xl">Rp.</span>
                        <span class="text-2xl font-bold select-none sm:text-4xl amount">0</span>
                    </div>
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
                </div>
                <button type="submit" class="w-full px-3 py-2 text-lg font-bold text-white transition rounded-lg bg-slate-600 hover:bg-slate-800">Transfer Infaq</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('.btn-calc').click(function(){
                var amount = $('input[name="amount"]').val();
                var value = $(this).find('span').text();
                if(value == 'C'){
                    $('input[name="amount"]').val(0);
                    $('.amount').text(0);
                }else{
                    if(amount == 0){
                        $('input[name="amount"]').val(value);
                        $('.amount').text(value);
                    }else{
                        if(amount.length < 12){
                            $('input[name="amount"]').val(amount+value);
                            $('.amount').text((amount+value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
                        }
                    }
                }
            });
        });
    </script>
@endsection