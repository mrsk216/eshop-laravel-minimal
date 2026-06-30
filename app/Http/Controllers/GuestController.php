<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function categories()
    {
        $categories = [
            ['img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJCwMJ7Y-ToWROz1h3B6Ms_CVHPMUd1S6sUWTogGNAPRrtXo2TrFGG02ye&s=10','name' => 'Electronics', 'desc' => 'Latest gadgets and electronics', 'children' => ['Mobile Phones', 'Laptops & Computers', 'Tablets & iPads', 'Gadgets & Accessories']],
            ['img' => 'https://media.istockphoto.com/id/1304961937/vector/clothes-hanger-garment-rack-showroom-and-clothing-organization-concept-clothes-hangers-shoes.jpg?s=612x612&w=0&k=20&c=5iTgI-T5BwzAp59ZHPT6kMKGh37wND2dXp4gTBErxqE=','name' => 'Fashion', 'desc' => 'Trendy clothing and accessories', 'children' => ["Men's Clothing", "Women's Clothing", "Kids' Fashion", "Fashion Accessories"]],
            ['img' => 'https://i.pinimg.com/originals/b4/ce/6d/b4ce6d3c86e6dc9518153e401f12280b.jpg','name' => 'Home & Living', 'desc' => 'Everything for your home', 'children' => ['Furniture', 'Kitchen & Dining', 'Home Decor', 'Bedding & Bath']],
            ['img' => 'https://media.istockphoto.com/id/1355687160/photo/various-sport-equipment-gear.jpg?s=612x612&w=0&k=20&c=NMA7dXMtGLJAin0z6N2uqrnwLXCRCXSw306SYfS49nI=','name' => 'Sports', 'desc' => 'Sports equipment and activewear', 'children' => ['Fitness Equipment', 'Outdoor Sports', 'Team Sports Gear', 'Active Sportswear']],
            ['img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3Ygbrly2FrEMCt5ZnFtDdcqGp-1QUAbI1iaDCelnyiQ&s=10','name' => 'Beauty', 'desc' => 'Beauty and personal care', 'children' => ['Skincare Products', 'Makeup & Cosmetics', 'Hair Care', 'Fragrance & Perfumes']],
            ['img' => 'https://img.magnific.com/free-vector/hand-drawn-flat-design-stack-books_23-2149334864.jpg?semt=ais_hybrid&w=740&q=80','name' => 'Books', 'desc' => 'Books and stationery', 'children' => ['Fiction & Novels', 'Non-Fiction Books', 'Educational Resources', 'Magazines & Journals']],
        ];

        return $categories;
    }

    public function products()
    {
        $products = [
            ['name' => 'iPhone 15 Pro Max', 'cat' => 'Electronics', 'price' => 1199.00, 'sale' => 1099.00, 'sku' => 'APL-IP15PM', 'brand' => 'Apple', 'featured' => true, 'popular' => true],
            ['name' => 'Samsung Galaxy S24 Ultra', 'cat' => 'Electronics', 'price' => 1299.99, 'sale' => null, 'sku' => 'SAM-S24U', 'brand' => 'Samsung', 'featured' => true, 'popular' => true],
            ['name' => 'MacBook Air M3', 'cat' => 'Electronics', 'price' => 1099.00, 'sale' => 999.00, 'sku' => 'APL-MBA-M3', 'brand' => 'Apple', 'featured' => true, 'popular' => false],
            ['name' => 'Sony WH-1000XM5 Headphones', 'cat' => 'Electronics', 'price' => 349.99, 'sale' => 299.99, 'sku' => 'SON-WHXM5', 'brand' => 'Sony', 'featured' => true, 'popular' => true],
            ['name' => 'Atomic Habits', 'cat' => 'Books', 'price' => 16.99, 'sale' => null, 'sku' => 'BOK-AH001', 'brand' => 'Penguin', 'featured' => true, 'popular' => true],
            ['name' => 'The Art of War', 'cat' => 'Books', 'price' => 9.99, 'sale' => null, 'sku' => 'BOK-AW001', 'brand' => 'Oxford Press', 'featured' => false, 'popular' => false],
            ['name' => 'Data Structures & Algorithms', 'cat' => 'Books', 'price' => 49.99, 'sale' => 39.99, 'sku' => 'BOK-DSA001', 'brand' => 'MIT Press', 'featured' => true, 'popular' => false],
            ['name' => 'World Map Poster', 'cat' => 'Books', 'price' => 12.99, 'sale' => 8.99, 'sku' => 'BOK-WM001', 'brand' => 'National Geographic', 'featured' => false, 'popular' => true],
            ['name' => 'Bluetooth Portable Speaker', 'cat' => 'Electronics', 'price' => 79.99, 'sale' => 59.99, 'sku' => 'ACC-BS001', 'brand' => 'JBL', 'featured' => false, 'popular' => true],
            ['name' => 'USB-C Hub 7-in-1', 'cat' => 'Electronics', 'price' => 34.99, 'sale' => null, 'sku' => 'ACC-UH001', 'brand' => 'Anker', 'featured' => false, 'popular' => false],
            ['name' => 'Smart Watch Series 9', 'cat' => 'Electronics', 'price' => 399.00, 'sale' => 349.00, 'sku' => 'APL-SW9', 'brand' => 'Apple', 'featured' => true, 'popular' => true],
            ['name' => 'Wireless Earbuds Pro', 'cat' => 'Electronics', 'price' => 249.99, 'sale' => 199.99, 'sku' => 'APL-AIRP', 'brand' => 'Apple', 'featured' => true, 'popular' => true],
            ['name' => '4K Webcam for Streaming', 'cat' => 'Electronics', 'price' => 129.99, 'sale' => 99.99, 'sku' => 'LOG-WC4K', 'brand' => 'Logitech', 'featured' => false, 'popular' => true],
        ];

        return $products;
    }

    public function index()
    {
        $categories = collect($this->categories())->take(6);

        $featureProducts = collect($this->products())->where('featured', true)->take(8);
        $popularProducts = collect($this->products())->where('popular', true)->take(8);

        $products = collect($this->products())->take(12);

        return view('pages.index', compact('categories', 'featureProducts', 'popularProducts', 'products'));
    }
}
