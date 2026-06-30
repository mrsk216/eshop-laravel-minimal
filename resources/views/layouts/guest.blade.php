<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <title>{{ config('app.name', 'EShop') }}@yield('title' ?? 'Buy product')</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    {{-- Top Header --}}
    <div id="top-header" class="bg-dark text-white py-2 small">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    {{-- Livewire currency --}}
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <span class="marquee-text">
                        <i class="bi bi-truck"></i> Free Shipping on orders over $50!
                    </span>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    {{-- Header --}}
    <header class="bg-white shadow-sm py-3">
        <div class="container">
            <div class="row align-items-center">
                {{-- Branding --}}
                <div class="col-md-3">
                    <a href="/">

                    </a>
                </div>
            </div>
        </div>
    </header>

    <div>
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>
