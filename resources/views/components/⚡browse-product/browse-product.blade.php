<div>
    <div class="row">
        <div class="col-12 col-md-4 col-lg-3 mb-4">
            <input type="text" class="form-control" placeholder="Search Products..." wire:model.live.debounce.500ms="search">
        </div>
    </div>
    <div class="row">
        @forelse ($this->product as $product)
            <div class="col-12 col-md-4 col-lg-3 col-xl-2 mb-3">
                <x-product-card :$product/>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-box-seam fs-1 text-muted"></i>
                <p class="text-muted mt-2">No products found</p>
            </div>
        @endforelse

        @if($this->product->hasMorePages())
            <div class="text-center mt-4">
                <button class="btn btn-outline-primary btn-lg rounded-pill px-5" wire:click="loadMore">
                    <span wire:loading.remove>Load More <i class="bi bi-arrow-down"></i></span>
                    <span wire:loading><span class="spinner-border spinner-border-sm"></span> Loading...</span>
                </button>
            </div>
        @endif
    </div>
</div>
