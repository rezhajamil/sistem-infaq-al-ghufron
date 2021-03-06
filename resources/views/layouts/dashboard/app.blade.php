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
            @include('layouts.dashboard.sidebar')
            
            <div class="flex flex-col flex-1 overflow-hidden">
                @include('layouts.dashboard.header')

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container px-6 py-8 mx-auto">
                        @yield('body')
                    </div>
                </main>
            </div>
        </div>
        @yield('script')
    </body>
</html>
