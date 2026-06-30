@extends('layouts.guest')

@section('title', 'Home')

@section('content')
{{-- Hero Section --}}
<section class="hero-section">
    <div id="heroSlider" class="swiper w-100 h-100 bg-dark">
        <div class="parallax-bg" data-swiper-parallax="-23%">
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex align-items-center justify-content-center text-white text-center">
                <div>
                    <div class="display-5 fw-bold mb-3" data-swiper-parallax="-300">Summer Sale Extravaganza</div>
                    <div class="h5 fw-normal mb-4" data-swiper-parallax="-200">Up to 50% off on selected items. Limited time offer!</div>
                    <a href="#" class="btn btn-lg btn-primary fw-semibold">Shop Now</a>
                </div>
            </div>
            <div class="swiper-slide d-flex align-items-center justify-content-center text-white text-center">
                <div>
                    <div class="display-5 fw-bold mb-3" data-swiper-parallax="-300">New Arrivals</div>
                    <div class="h5 fw-normal mb-4" data-swiper-parallax="-200">Checkout our latest collection</div>
                    <a href="#" class="btn btn-lg btn-primary fw-semibold">Explore</a>
                </div>
            </div>
            <div class="swiper-slide d-flex align-items-center justify-content-center text-white text-center">
                <div>
                    <div class="display-5 fw-bold mb-3" data-swiper-parallax="-300">Free Shipping</div>
                    <div class="h5 fw-normal mb-4" data-swiper-parallax="-200">Free shipping on orders over $50 nationwide</div>
                    <a href="#" class="btn btn-lg btn-primary fw-semibold">Learn More</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next text-white" style="width: 25px;height:25px;"></div>
        <div class="swiper-button-prev text-white" style="width: 25px;height:25px;"></div>
    </div>
</section>
{{-- Feature Bar --}}
<section class="features-bar bg-white py-4 shadow-sm">
    <div class="container">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <i class="bi bi-truck fs-1 text-primary"></i>
                    <h6 class="fw-bold mt-2 mb-1">Free Shipping</h6>
                    <small class="text-muted">On orders over $50</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <i class="bi bi-arrow-return-left fs-1 text-primary"></i>
                    <h6 class="fw-bold mt-2 mb-1">Easy Return</h6>
                    <small class="text-muted">30-day return policy</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <i class="bi bi-headset fs-1 text-primary"></i>
                    <h6 class="fw-bold mt-2 mb-1">24/7 Support</h6>
                    <small class="text-muted">Always here to help</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <i class="bi bi-shield-check fs-1 text-primary"></i>
                    <h6 class="fw-bold mt-2 mb-1">Secure Payment</h6>
                    <small class="text-muted">100% secure checkout</small>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Popular Categories --}}
<section class="categories py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Shop by Category</h2>
            <p class="text-muted">Browse our wide selection of categories</p>
        </div>
        <div class="row g-3">
            @foreach ($categories as $category)
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card">
                        <img src="{{ $category['img'] }}" alt="{{ $category['name'] }}" class="img-fluid" style="height: 150px;">
                        <div class="card-body">
                            <h6 class="fw-bold mb-1">{{ $category['name'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Featured Products --}}
<section class="featured py-5 bg-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Featured Products</h2>
                <p class="text-muted mb-0">Handpicked just for you</p>
            </div>
            <a href="#" class="btn btn-outline-primary rounded-pill">View All</a>
        </div>
        <div id="featuredProducts" class="swiper">
            <div class="swiper-wrapper">
                @foreach ($featureProducts as $product)
                    <div class="swiper-slide">
                        <x-product-card :$product/>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next featured-product-next"></div>
            <div class="swiper-button-prev featured-product-prev"></div>
        </div>
    </div>
</section>
{{-- Banner --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card banner-card-1 border-0 rounded-4 overflow-hidden position-relative">
                    <div class="p-5 text-white">
                        <h3 class="fw-bold">Summer Sale</h3>
                        <p class="mb-3">Up to 50% off on selected items</p>
                        <a href="#" class="btn btn-light fw-bold rounded-pill">Shop Sale</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card banner-card-2 border-0 rounded-4 overflow-hidden position-relative">
                    <div class="p-5 text-white">
                        <h3 class="fw-bold">Summer Sale</h3>
                        <p class="mb-3">Up to 50% off on selected items</p>
                        <a href="#" class="btn btn-light fw-bold rounded-pill">Shop Sale</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Popular Products --}}
<section class="featured py-5 bg-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Popular Products</h2>
                <p class="text-muted mb-0">Most love by our customers</p>
            </div>
            <a href="#" class="btn btn-outline-primary rounded-pill">View All</a>
        </div>
        <div id="featuredProducts" class="swiper">
            <div class="swiper-wrapper">
                @foreach ($popularProducts as $product)
                    <div class="swiper-slide">
                        <x-product-card :$product/>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next featured-product-next"></div>
            <div class="swiper-button-prev featured-product-prev"></div>
        </div>
    </div>
</section>
{{-- Browse All Product --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Browse All Products</h2>
            <p class="text-muted">Discover everthing we have to offer</p>
        </div>

        {{-- LiveWire --}}
    </div>
</section>
@endsection
