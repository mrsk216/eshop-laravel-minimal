<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        .sidebar{
            width: 250px;
            background: #212529;
        }
        .sidebar .nav-link{
            color: rgba(255,255,255,0.75);
            padding:0.75rem 1rem;
            border-left: 4px solid transparent;
        }
        .sidebar .nav-link:hover{
            background-color: #343a40;
            color:#fff;
        }
        .sidebar .nav-link.active{
            background-color: #343a40;
            color:#fff;
            border-left-color: #0d6efd;
        }
        .sidebar-icon{
            width: 1.5rem;
            display: inline-block;
        }
        .main-wrapper{
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .content-scroll{
            overflow-x: hidden;
            overflow-y: auto;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div id="app" class="d-flex vh-screen overflow-hidden" style="height:100vh;">
        {{-- Sidebar --}}
        <aside class="sidebar d-flex flex-column flex-shrink-0 text-white">
            <div class="p-3 border-bottom border-secondary">
                <h5 class="h5 mb-0 fw-bold">ESHOP ADMIN</h5>
            </div>
            <nav class="nav flex-column mt-2">
                <a href="{{ route('admin.dashboard') }}" class="nav-link d-flex align-items-center {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="bi bi-speedometer sidebar-icon"></i> Dashboard</a>
                <a href="{{ route('admin.product') }}" class="nav-link d-flex align-items-center {{ request()->routeIs('admin.product') ? 'active' : '' }}"><i class="bi bi-box2 sidebar-icon"></i> Products</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-folder sidebar-icon"></i> Categories</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-folder2-open sidebar-icon"></i> Sub Categories</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-cart sidebar-icon"></i> Orders</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-people sidebar-icon"></i> Customers</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-ticket sidebar-icon"></i> Coupons</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-currency-dollar sidebar-icon"></i> Currencies</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-truck sidebar-icon"></i> Shipping</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-star sidebar-icon"></i> Reviews</a>
                <a href="#" class="nav-link d-flex align-items-center"><i class="bi bi-gear sidebar-icon"></i> Settings</a>
            </nav>
        </aside>

        {{-- Main Content Wrapper --}}
        <main class="main-wrapper content-scroll">
            {{-- Header --}}
            <header class="bg-write shadow-sm">
                <div class="d-flex justify-content-between align-items-center px-4 py-3">
                    <h4 class="h4 mb-0 fw-semibold text-dark">@yield('title')</h4>
                    <div class="d-flex align-items-center gap-3">
                        <a href="/" target="_blank" class="text-secondary text-decoration-none"><i class="bi bi-box-arrow-up-right me-1"></i> View Site</a>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-decoration-none d-flex align-items-center gap-2 p-0 text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ auth()->user()->avatar ?? asset('assets/images/user.png') }}" alt="{{ auth()->user()->name }}" class="rounded-circle" style="width: 32px;height:32px;object-fit:cover;">
                                <span>{{ auth()->user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item w-100 text-start">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            {{-- Page Content --}}
            @yield('content')

            @if (session('success'))
                <div class="toast fade show position-fixed bottom-0 end-0 mb-3 me-3" role="alert" aria-live="assertive" aria-atomic="true">
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
                <div class="toast fade show position-fixed bottom-0 end-0 mb-3 me-3" role="alert" aria-live="assertive" aria-atomic="true">
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
        </main>
    </div>
</body>
</html>
