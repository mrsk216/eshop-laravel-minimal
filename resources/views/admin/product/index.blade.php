@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container-fluid py-4">
    <div class="mb-4">
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add Product</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase">Name</th>
                                <th class="text-uppercase">SKU</th>
                                <th class="text-uppercase">Price</th>
                                <th class="text-uppercase">Stock</th>
                                <th class="text-uppercase">Status</th>
                                <th class="text-uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->sku }}</td>
                                    <td>
                                        @if (!$product->sale_price)
                                            {{ number_format($product->price, 2) }}
                                        @else
                                            {{ number_format($product->sale_price, 2) }}
                                        @endif
                                    </td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>
                                        <span class="badge {{ $product->status ? 'bg-success' : 'bg-danger' }}">{{ $product->status ? 'Active' : 'Inactive' }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                        <a href="{{ route('admin.product.delete', $product->id) }}" onclick='return confirm(`Are you sure to delete "{{ $product->name }}"?`)' class="btn btn-sm btn-outline-danger me-1">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
