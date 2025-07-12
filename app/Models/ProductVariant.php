<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariant extends Model
{
    protected $fillable = ['product_id', 'size', 'color', 'price', 'stock', 'image_url'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
