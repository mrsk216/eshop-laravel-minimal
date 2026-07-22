<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'subCategory','primaryImage')->latest()->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function create(){
        $categories = Category::where('status', true)->orderBy('name', 'asc')->get();
        $subCategories = SubCategory::where('status', true)->orderBy('name', 'asc')->get();

        return view('admin.product.create', compact('categories', 'subCategories'));
    }

    public function store(Request $request){
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0|lt:price',
            'sku' => 'required|string|max:255|unique:products',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:sub_categories,id',
            'stock' => 'required|integer|min:0',
            'status' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        Product::create($validation);

        return redirect()->route('admin.product')->with('success', ' Product created successfully.');
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::where('status', true)->orderBy('name', 'asc')->get();
        $subCategories = SubCategory::where('status', true)->orderBy('name', 'asc')->get();

        return view('admin.product.edit', compact('product', 'categories', 'subCategories'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0|lt:price',
            'sku' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:sub_categories,id',
            'stock' => 'required|integer|min:0',
            'status' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        Product::where('id', $id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'sku' => $request->sku,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'quantity' => $request->stock,
            'status' => $request->status,
            'is_featured' => $request->is_featured,
        ]);

        return redirect()->route('admin.product')->with('success', 'Product updated successfully.');
    }

    public function delete($id){
        Product::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Product deletion successful');
    }
}
