<div class="card h-100 position-relative border-light-subtle rounded-3 shadow-sm overflow-hidden">
    <div class="product-badge">
        <span class="badge bg-danger">-10%</span>
    </div>
    <div class="wishlist-btn">
        <button type="button" class="btn btn-sm btn-light rounded-circle"><i class="bi bi-heart"></i></button>
    </div>
    <div class="product-image-wrapper">
        <img src="https://baseus.com.bd/wp-content/uploads/2026/03/4.80H%E8%B6%85%E9%95%BF%E7%BB%AD%E8%88%AA10min10H.jpg" alt="Headphone" class="img-fluid">
    </div>
    <div class="card-body d-flex flex-column">
        <small class="text-muted text-uppercase mb-1">{{ $product['cat'] }}</small>
        <a href="#" class="text-decoration-none">
            <h6 class="fw-bold mb-2">{{ \Illuminate\Support\Str::limit($product['name'], 40) }}</h6>
        </a>
        <div class="mb-2">
            <span class="text-muted text-decoration-line-through me-2">${{ $product['price'] }}</span>
            <span class="fs-5 fw-bold">${{ $product['sale'] }}</span>
        </div>
        <div class="mb-2">
            <small class="text-success"><i class="bi bi-check-fill"></i> In Stock</small>
        </div>
        <div class="mt-auto d-flex gap-2">
            {{-- Add to cart button using Livewire --}}
            <button type="button" class="btn btn-primary rounded-pill w-100"><i class="bi bi-cart"></i> Add to Cart</button>
        </div>
    </div>
</div>