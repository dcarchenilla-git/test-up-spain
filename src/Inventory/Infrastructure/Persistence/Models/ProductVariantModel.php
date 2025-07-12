<?php
namespace Src\Inventory\Infrastructure\Persistence\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantModel extends Model
{
    protected $table = 'product_variants';
    protected $fillable = ['product_id', 'size', 'color', 'price', 'stock', 'image_url'];

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}

//Infraestructura: Modelos Eloquent y el adaptador EloquentProductRepository para persistir en MySQL.