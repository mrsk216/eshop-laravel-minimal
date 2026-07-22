@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label fw-medium">Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
                            @error('name')
                                <span class="text-danger small mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Slug --}}
                        <div class="mb-3">
                            <label for="slug" class="form-label fw-medium">Slug</label>
                            <input type="text" name="slug" value="{{ $product->slug }}" class="form-control" required>
                            @error('slug')
                                <span class="text-danger small mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Short Description --}}
                        <div class="mb-3">
                            <label for="short_description" class="form-label fw-medium">Short Description</label>
                            <textarea name="short_description" class="form-control" cols="30" rows="4" maxlength="255" required>{{ $product->short_description }}</textarea>
                            @error('short_description')
                                <span class="text-danger small mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label fw-medium">Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="4">{{ $product->description }}</textarea>
                            @error('description')
                                <span class="text-danger small mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Price --}}
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="price" class="form-label fw-medium">Price</label>
                                <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="form-control" required>
                                @error('price')
                                    <span class="text-danger small mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="sale_price" class="form-label fw-medium">Sale Price</label>
                                <input type="number" step="0.01" name="sale_price" value="{{ $product->sale_price }}" class="form-control">
                                @error('sale_price')
                                    <span class="text-danger small mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- SKU --}}
                        <div class="mb-3">
                            <label for="sku" class="form-label fw-medium">SKU</label>
                            <input type="text" name="sku" value="{{ $product->sku }}" class="form-control" required>
                            @error('sku')
                                <span class="text-danger small mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Category --}}
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="category_id" class="form-label fw-medium">Category</label>
                                <select name="category_id" class="form-select" required>
                                    <option value="">Select Caategory</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger small mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="subcategory_id" class="form-label fw-medium">Sub Category</label>
                                <select name="subcategory_id" class="form-select">
                                    <option value="">Select Caategory</option>
                                    @foreach ($subCategories as $category)
                                        <option value="{{ $category->id }}" {{ $product->subcategory_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('subcategory_id')
                                    <span class="text-danger small mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{-- Stock --}}
                        <div class="mb-3">
                            <label for="stock" class="form-label fw-medium">Stock</label>
                            <input type="number" name="stock" value="{{ $product->quantity }}" class="form-control" required>
                            @error('stock')
                                <span class="text-danger small mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Status --}}
                        <div class="form-check mb-3">
                            <input type="checkbox" name="status" value="1" class="form-check-input" {{ $product->status ? 'checked' : '' }}>
                            <label for="status" class="form-check-label">Active</label>
                            @error('status')
                                <span class="text-danger small mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Featured --}}
                        <div class="form-check mb-3">
                            <input type="checkbox" name="is_featured" value="1" class="form-check-input" {{ $product->is_featured ? 'checked' : '' }}>
                            <label for="is_featured" class="form-check-label">Featured</label>
                            @error('is_featured')
                                <span class="text-danger small mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.product') }}" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
