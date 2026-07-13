<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'sku', 'description', 'short_description', 'price', 'sale_price', 'quantity', 'is_featured', 'is_popular', 'status', 'category_id', 'subcategory_id', 'brand', 'weight', 'meta_title', 'meta_description'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'quantity' => 'integer',
        'is_featured' => 'boolean',
        'is_popular' => 'boolean',
        'status' => 'boolean',
        'weight' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();
        Static::creating(function($product){
            if(empty($product->slug)){
                $product->slug == Str::slug($product->name);
            }
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class)->orderBy('sort_order');
    }

    public function primaryImage(){
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }

    public function attribute(){
        return $this->hasMany(ProductAttribute::class);
    }
}
