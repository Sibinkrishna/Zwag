<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductVariant;
use App\Models\ProductImage;
use App\Models\Brand;


class Product extends Model
{
    protected $fillable = [
        'product_name',
        'category_id',
        'subcategory_id',
        'brand_id',
        'weight',
        'gender',
        'description',
        'discount_type',
        'product_discount',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function product_varient()
    {
        return $this->hasMany(ProductVariant::class);
    }
    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
