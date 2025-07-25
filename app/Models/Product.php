<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock'];

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    
}
