<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', true)->take(6)->get();

        $featureProducts = Product::where('status', true)->where('is_featured', true)->take(8)->get();
        $popularProducts = Product::where('status', true)->where('is_popular', true)->take(8)->get();

        return view('pages.index', compact('categories', 'featureProducts', 'popularProducts'));
    }
}
