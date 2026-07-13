<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'desc' => 'Latest gadgets and electronics', 'children' => ['Mobile Phones', 'Laptops & Computers', 'Tablets & iPads', 'Gadgets & Accessories']],
            ['name' => 'Fashion', 'desc' => 'Trendy clothing and accessories', 'children' => ["Men's Clothing", "Women's Clothing", "Kids' Fashion", "Fashion Accessories"]],
            ['name' => 'Home & Living', 'desc' => 'Everything for your home', 'children' => ['Furniture', 'Kitchen & Dining', 'Home Decor', 'Bedding & Bath']],
            ['name' => 'Sports', 'desc' => 'Sports equipment and activewear', 'children' => ['Fitness Equipment', 'Outdoor Sports', 'Team Sports Gear', 'Active Sportswear']],
            ['name' => 'Beauty', 'desc' => 'Beauty and personal care', 'children' => ['Skincare Products', 'Makeup & Cosmetics', 'Hair Care', 'Fragrance & Perfumes']],
            ['name' => 'Books', 'desc' => 'Books and stationery', 'children' => ['Fiction & Novels', 'Non-Fiction Books', 'Educational Resources', 'Magazines & Journals']],
        ];

        foreach ($categories as $key => $value) {
            $catSlug = Str::slug($value['name']);
            $category = Category::updateOrCreate(
                ['slug' => $catSlug],
                [
                    'name' => $value['name'],
                    'description' => $value['desc'],
                    'status' => true,
                    'sort_order' => ($key + 1) * 10
                ]
            );

            SubCategory::where('category_id', $category->id)->delete();

            foreach ($value['children'] as $i => $children) {
                $slug = Str::slug($category->name . '-' . $children);
                SubCategory::create([
                    'name' => $children,
                    'slug' => $slug,
                    'description' => 'Shop {$children}',
                    'category_id' => $category->id,
                    'status' => true,
                    'sort_order' => ($i + 1) * 10
                ]);
            }
        }
    }
}
