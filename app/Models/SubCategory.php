<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';

    protected $fillable = ['name', 'slug', 'image', 'description',' status', 'sort_order', 'category_id'];

    protected $casts = [
        'status' => 'boolean',
        'sort_order' => 'integer'
    ];

    protected static function boot()
    {
        parent::boot();
        Static::creating(function($subCategory){
            if(empty($subCategory->slug)){
                $subCategory->slug == Str::slug($subCategory->name);
            }
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function products(){
        return $this->hasMany(Product::class, 'subcategory_id');
    }
}
