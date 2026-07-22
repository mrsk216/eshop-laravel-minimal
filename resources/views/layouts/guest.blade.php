<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <title>{{ config('app.name', 'EShop') }} - @yield('title' ?? 'Buy product')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    {{-- Top Header --}}
    <div id="top-header" class="bg-dark text-white py-2 small">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <span class="marquee-text">
                        <i class="bi bi-truck"></i> Free Shipping on orders over $50!
                    </span>
                </div>
                <div class="col-md-3 text-center text-md-end">
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
                    <a href="/" class="text-decoration-none">
                        <h1 class="h3 fw-bold mb-0"><i class="bi bi-shop"></i> ESHOP</h1>
                    </a>
                </div>

                <div class="col-md-6 mb-3 mb-md-0">
                    {{-- Liveware Search-bar --}}
                </div>

                <div class="col-md-3 text-end">
                    {{-- Liveware Cart --}}
                </div>
            </div>
        </div>
    </header>

    <nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @if (auth()->check())
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ url('admin/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ url('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ url('register') }}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @if (session('success'))
        <div class="toast fade show position-fixed bottom-0 insert-e-0 mb-3 me-3" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="bi bi-exclamation-triangle-fill text-success me-2"></i>
                <strong class="text-success me-auto">Success</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="toast fade show position-fixed bottom-0 insert-e-0 mb-3 me-3" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="bi bi-exclamation-triangle-fill text-danger me-2"></i>
                <strong class="text-danger me-auto">Error</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-white pt-5 pb-3 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-3 text-primary"><i class="bi bi-shop"></i> ESHOP</h5>
                    <p class="small text-secondary">Your one-stop destination for quality products at unbeatable prices.
                    We offer fast shipping, easy returns, and 24/7 customer support.</p>
                    <div class="mb-3">
                        <a href="#" class="text-white me-2 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-2 fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-2 fs-5"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white me-2 fs-5"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-uppercase small mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small">Products</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small">Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-uppercase small mb-3">Customer Service</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small">FAQ</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small">Shipping Info</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small">Returns Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none small">Track Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-uppercase small mb-3">Newsletter</h6>
                    <p class="small text-secondary">Subscribe for exclusive deals!</p>
                    <input type="email" placeholder="Enter your email address" class="form-control form-control-lg">
                </div>
            </div>
            <hr class="mt-5 pb-3 mb-0">
            <div class="row">
                <p class="small text-center text-secondary mb-0">&copy; {{ date('Y') }} ESHOP all rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScripts
</body>
</html>
