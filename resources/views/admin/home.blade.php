@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="row g-4 mb-4">
        {{-- Total Order --}}
        <div class="col-12 colmd-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1">Total Orders</p>
                        <p class="fs-3 fw-bold text-dark mb-0">0</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height:50px;">
                        <i class="bi bi-cart text-primary fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- Total Revenue --}}
        <div class="col-12 colmd-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1">Total Revenue</p>
                        <p class="fs-3 fw-bold text-dark mb-0">$0.00</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height:50px;">
                        <i class="bi bi-currency-dollar text-primary fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- Total Products --}}
        <div class="col-12 colmd-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1">Total Products</p>
                        <p class="fs-3 fw-bold text-dark mb-0">0</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height:50px;">
                        <i class="bi bi-box2 text-primary fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- Total Customers --}}
        <div class="col-12 colmd-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1">Total Customers</p>
                        <p class="fs-3 fw-bold text-dark mb-0">12</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height:50px;">
                        <i class="bi bi-people text-primary fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mb-4">
        {{-- Order Status --}}
        <div class="col-12 col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h3 class="card-title fs-5 fw-semibold text-dark mb-4">Order by Status</h3>
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="text-secondary text-capitalize">Pending</span>
                                <span class="fw-semibold text-dark">5</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="text-secondary text-capitalize">Processing</span>
                                <span class="fw-semibold text-dark">5</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="text-secondary text-capitalize">Shipped</span>
                                <span class="fw-semibold text-dark">5</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="text-secondary text-capitalize">Delivered</span>
                                <span class="fw-semibold text-dark">5</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="text-secondary text-capitalize">Cancelled</span>
                                <span class="fw-semibold text-dark">5</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Top Products --}}
        <div class="col-12 col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h3 class="card-title fs-5 fw-semibold text-dark mb-4">Top Products</h3>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <span class="text-muted fw-semibold">#1</span>
                                <span class="text-dark">Iphone 15 Pro Max</span>
                            </div>
                            <span class="text-secondary">10 sales</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
