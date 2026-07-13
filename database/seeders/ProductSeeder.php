<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        $subCategoryIds = SubCategory::pluck('id', 'category_id');

        $products = [
            ['name' => 'iPhone 15 Pro Max', 'cat' => 'Electronics', 'price' => 1199.00, 'sale' => 1099.00, 'sku' => 'APL-IP15PM', 'brand' => 'Apple', 'featured' => true, 'popular' => true],
            ['name' => 'Samsung Galaxy S24 Ultra', 'cat' => 'Electronics', 'price' => 1299.99, 'sale' => null, 'sku' => 'SAM-S24U', 'brand' => 'Samsung', 'featured' => true, 'popular' => true],
            ['name' => 'MacBook Air M3', 'cat' => 'Electronics', 'price' => 1099.00, 'sale' => 999.00, 'sku' => 'APL-MBA-M3', 'brand' => 'Apple', 'featured' => true, 'popular' => false],
            ['name' => 'Sony WH-1000XM5 Headphones', 'cat' => 'Electronics', 'price' => 349.99, 'sale' => 299.99, 'sku' => 'SON-WHXM5', 'brand' => 'Sony', 'featured' => true, 'popular' => true],
            ['name' => 'iPad Air 11-inch', 'cat' => 'Electronics', 'price' => 599.00, 'sale' => null, 'sku' => 'APL-IPAIR11', 'brand' => 'Apple', 'featured' => false, 'popular' => false],
            ['name' => 'Wireless Charging Pad', 'cat' => 'Electronics', 'price' => 29.99, 'sale' => 19.99, 'sku' => 'ACC-WCP001', 'brand' => 'Anker', 'featured' => false, 'popular' => true],
            ['name' => 'Classic Denim Jacket', 'cat' => 'Fashion', 'price' => 89.99, 'sale' => 69.99, 'sku' => 'FASH-DJ001', 'brand' => 'Levi\'s', 'featured' => true, 'popular' => true],
            ['name' => 'Summer Floral Dress', 'cat' => 'Fashion', 'price' => 59.99, 'sale' => null, 'sku' => 'FASH-FD001', 'brand' => 'Zara', 'featured' => true, 'popular' => false],
            ['name' => 'Leather Crossbody Bag', 'cat' => 'Fashion', 'price' => 129.99, 'sale' => 99.99, 'sku' => 'FASH-CB001', 'brand' => 'Coach', 'featured' => false, 'popular' => true],
            ['name' => 'Running Sneakers', 'cat' => 'Fashion', 'price' => 119.99, 'sale' => null, 'sku' => 'FASH-RS001', 'brand' => 'Nike', 'featured' => true, 'popular' => true],
            ['name' => 'Cashmere Sweater', 'cat' => 'Fashion', 'price' => 149.99, 'sale' => 99.99, 'sku' => 'FASH-CS001', 'brand' => 'Uniqlo', 'featured' => false, 'popular' => false],
            ['name' => 'Designer Sunglasses', 'cat' => 'Fashion', 'price' => 199.99, 'sale' => 149.99, 'sku' => 'FASH-SG001', 'brand' => 'Ray-Ban', 'featured' => true, 'popular' => true],
            ['name' => 'Modern Sofa Set', 'cat' => 'Home & Living', 'price' => 899.99, 'sale' => 749.99, 'sku' => 'HOME-SF001', 'brand' => 'IKEA', 'featured' => true, 'popular' => true],
            ['name' => 'Queen Bed Frame', 'cat' => 'Home & Living', 'price' => 499.99, 'sale' => null, 'sku' => 'HOME-BF001', 'brand' => 'Ashley', 'featured' => false, 'popular' => false],
            ['name' => 'Stainless Steel Cookware Set', 'cat' => 'Home & Living', 'price' => 249.99, 'sale' => 199.99, 'sku' => 'HOME-CW001', 'brand' => 'Calphalon', 'featured' => true, 'popular' => true],
            ['name' => 'Memory Foam Mattress Topper', 'cat' => 'Home & Living', 'price' => 129.99, 'sale' => 99.99, 'sku' => 'HOME-MT001', 'brand' => 'Tempur-Pedic', 'featured' => false, 'popular' => true],
            ['name' => 'Smart LED Desk Lamp', 'cat' => 'Home & Living', 'price' => 49.99, 'sale' => 34.99, 'sku' => 'HOME-DL001', 'brand' => 'Philips', 'featured' => false, 'popular' => false],
            ['name' => 'Curtain Set - 2 Panels', 'cat' => 'Home & Living', 'price' => 39.99, 'sale' => null, 'sku' => 'HOME-CT001', 'brand' => 'H&M Home', 'featured' => false, 'popular' => false],
            ['name' => 'Yoga Mat Premium', 'cat' => 'Sports', 'price' => 39.99, 'sale' => 29.99, 'sku' => 'SPT-YM001', 'brand' => 'Manduka', 'featured' => true, 'popular' => true],
            ['name' => 'Adjustable Dumbbell Set', 'cat' => 'Sports', 'price' => 299.99, 'sale' => null, 'sku' => 'SPT-DB001', 'brand' => 'Bowflex', 'featured' => true, 'popular' => true],
            ['name' => 'Mountain Bike 26-inch', 'cat' => 'Sports', 'price' => 599.99, 'sale' => 499.99, 'sku' => 'SPT-MB001', 'brand' => 'Trek', 'featured' => true, 'popular' => false],
            ['name' => 'Tennis Racket Pro', 'cat' => 'Sports', 'price' => 189.99, 'sale' => 159.99, 'sku' => 'SPT-TR001', 'brand' => 'Wilson', 'featured' => false, 'popular' => true],
            ['name' => 'Swimming Goggles', 'cat' => 'Sports', 'price' => 24.99, 'sale' => null, 'sku' => 'SPT-SG001', 'brand' => 'Speedo', 'featured' => false, 'popular' => false],
            ['name' => 'Resistance Bands Set', 'cat' => 'Sports', 'price' => 19.99, 'sale' => 14.99, 'sku' => 'SPT-RB001', 'brand' => 'FitSimplify', 'featured' => false, 'popular' => true],
            ['name' => 'Vitamin C Serum', 'cat' => 'Beauty', 'price' => 34.99, 'sale' => null, 'sku' => 'BEA-VC001', 'brand' => 'The Ordinary', 'featured' => true, 'popular' => true],
            ['name' => 'Retinol Anti-Aging Cream', 'cat' => 'Beauty', 'price' => 54.99, 'sale' => 44.99, 'sku' => 'BEA-RC001', 'brand' => 'Neutrogena', 'featured' => false, 'popular' => true],
            ['name' => 'Professional Makeup Brush Set', 'cat' => 'Beauty', 'price' => 49.99, 'sale' => 39.99, 'sku' => 'BEA-MB001', 'brand' => 'Real Techniques', 'featured' => true, 'popular' => false],
            ['name' => 'Hair Straightener & Curler', 'cat' => 'Beauty', 'price' => 79.99, 'sale' => 59.99, 'sku' => 'BEA-HS001', 'brand' => 'Dyson', 'featured' => false, 'popular' => true],
            ['name' => 'Perfume Collection - 50ml', 'cat' => 'Beauty', 'price' => 89.99, 'sale' => null, 'sku' => 'BEA-PF001', 'brand' => 'Chanel', 'featured' => true, 'popular' => true],
            ['name' => 'Organic Face Moisturizer', 'cat' => 'Beauty', 'price' => 28.99, 'sale' => 22.99, 'sku' => 'BEA-FM001', 'brand' => 'CeraVe', 'featured' => false, 'popular' => false],
            ['name' => 'The Great Gatsby', 'cat' => 'Books', 'price' => 14.99, 'sale' => 9.99, 'sku' => 'BOK-GG001', 'brand' => 'Penguin', 'featured' => false, 'popular' => true],
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

        foreach ($products as $i => $p) {
            $category = $categories->firstWhere('name', $p['cat']);
            if(!$category) continue;

            $subCategoryIds = SubCategory::where('category_id', $category->id)->pluck('id');

            $slug = Str::slug($p['name']);

            $product = Product::updateOrCreate(
                ['slug' => $slug],
                [
                    'name' => $p['name'],
                    'sku' => $p['sku'],
                    'description' => "Experience the best with our {$p['name']}. " . fake()->paragraph(5),
                    'short_description' => "Premium {$p['name']}. " . fake()->sentence(),
                    'price' => $p['price'],
                    'sale_price' => $p['sale'],
                    'quantity' => rand(5, 50),
                    'is_featured' => $p['featured'],
                    'is_popular' => $p['popular'],
                    'status' => true,
                    'category_id' => $category->id,
                    'subcategory_id' => $subCategoryIds->isNotEmpty() ? $subCategoryIds->random() : null,
                    'brand' => $p['brand'],
                    'weight' => round(rand(100, 5000) / 1000, 2),
                    'meta_title' => "Buy {$p['name']} Online | E-shop",
                    'meta_description' => "Shop {$p['name']} at the best price | E-shop | " . fake()->sentence(),
                ]
            );

            ProductImage::updateOrCreate(
                ['product_id' => $product->id, 'is_primary' => true],
                ['image_path' => 'images/placeholder-product.jpg', 'sort_order' => 0]
            );
            ProductImage::updateOrCreate(
                ['product_id' => $product->id, 'is_primary' => false],
                ['image_path' => 'images/placeholder-product1.jpg', 'sort_order' => 1]
            );

            if($i % 3 === 0){
                ProductAttribute::updateOrCreate(
                    ['product_id' => $product->id, 'attribute_name' => 'color'],
                    ['attribute_value' => collect(['Black','White','Blue','Red'])->random()]
                );
                ProductAttribute::updateOrCreate(
                    ['product_id' => $product->id, 'attribute_name' => 'size'],
                    ['attribute_value' => collect(['S','M','L','XL'])->random()]
                );
            }
        }
    }
}
