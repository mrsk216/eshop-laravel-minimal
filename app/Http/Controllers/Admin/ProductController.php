<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'subCategory','primaryImage')->latest()->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function create(){
        return 'create';
    }

    public function store(){
        return 'create';
    }

    public function edit(){
        return 'create';
    }

    public function update(){
        return 'create';
    }

    public function delete(){
        return 'create';
    }

    public function status(){
        return 'create';
    }
}
