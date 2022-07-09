@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center w-full h-screen">
    <div class="p-6 bg-white rounded-md shadow-md">
        <h2 class="text-lg font-semibold text-gray-700 capitalize">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col gap-y-6">
                <div>
                    <label class="text-gray-700" for="username">Email</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="email" name="email" required autofocus value="{{ old('email') }}">
                </div>

                <div>
                    <label class="text-gray-700" for="password">Password</label>
                    <input class="w-full mt-2 rounded-md form-input focus:border-indigo-600" type="password" name="password" required autocomplete="current-password">
                </div>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember Me</span>
                </label>
            </div>

            <div class="flex justify-end mt-4">
                <button class="w-full px-4 py-2 text-gray-200 bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection