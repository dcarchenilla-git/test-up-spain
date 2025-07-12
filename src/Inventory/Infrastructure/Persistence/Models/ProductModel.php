<?php
namespace Src\Inventory\Infrastructure\Persistence\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'stock'];

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariantModel::class, 'product_id');
    }
}

//Infraestructura: Modelos Eloquent y el adaptador EloquentProductRepository para persistir en MySQL.