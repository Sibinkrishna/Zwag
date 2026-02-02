<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
        'product_id',
        'product_associate',
        'tag_number',
        'stock',
        'tag',
        'price',
        'total_price',
        'discount',
        'selling_price',
    ];

    protected $casts = [
        'tag' => 'array',
        'product_associate' => 'array',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
