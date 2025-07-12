<?php
namespace Src\Inventory\Infrastructure\Persistence;

use Src\Inventory\Domain\Entity\Product;
use Src\Inventory\Domain\Entity\ProductVariant;
use Src\Inventory\Domain\Repository\ProductRepositoryInterface;
use Src\Inventory\Infrastructure\Persistence\Models\ProductModel;
use Src\Inventory\Infrastructure\Persistence\Models\ProductVariantModel;

class EloquentProductRepository implements ProductRepositoryInterface
{
    public function save(Product $product): void
    {
        $productModel = ProductModel::updateOrCreate(
            ['id' => $product->id ?? null],
            [
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'stock' => $product->stock,
            ]
        );

        foreach ($product->variants as $variant) {
            ProductVariantModel::updateOrCreate(
                [
                    'product_id' => $productModel->id,
                    'size' => $variant->size,
                    'color' => $variant->color,
                ],
                [
                    'price' => $variant->price,
                    'stock' => $variant->stock,
                    'image_url' => $variant->imageUrl,
                ]
            );
        }
    }

    public function findById(int $id): ?Product
    {
        $productModel = ProductModel::with('variants')->find($id);

        if (!$productModel) return null;

        $variants = [];
        foreach ($productModel->variants as $variantModel) {
            $variants[] = new ProductVariant(
                $variantModel->size,
                $variantModel->color,
                $variantModel->price,
                $variantModel->stock,
                $variantModel->image_url
            );
        }

        return new Product(
            $productModel->name,
            $productModel->description,
            $productModel->price,
            $productModel->stock,
            $variants,
            $productModel->id
        );
    }



    public function update0(Product $product): void
    {
        $model = ProductModel::find($product->id);
        $model->fill([
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'stock' => $product->stock,
        ]);
        $model->save();

        // Sincronizar variantes si corresponde
    }


    public function update(Product $product): void
    {
        $model = ProductModel::findOrFail($product->id);

        $model->update([
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'stock' => $product->stock,
        ]);

        // Opcional: Borrar variantes antiguas y recrearlas
        $model->variants()->delete();

        foreach ($product->getVariants() as $variant) {
            $model->variants()->create([
                'size' => $variant->size,
                'color' => $variant->color,
                'price' => $variant->price,
                'stock' => $variant->stock,
                'image_url' => $variant->imageUrl,
            ]);
        }
    }


    public function delete1(Product $product): void
    {
        ProductModel::destroy($product->id);
    }

    public function delete(Product $product): void
    {
        $model = ProductModel::findOrFail($product->id);
        $model->delete(); // Eloquent se encarga de variantes si la relación tiene `onDelete('cascade')`
    }    

    public function delete0(int $id): void
    {
        $productModel = ProductModel::find($id);
        if ($productModel) {
            $productModel->variants()->delete();
            $productModel->delete();
        }
    }

    public function findAll(): array
    {
        $products = ProductModel::with('variants')->get();

        $result = [];
        foreach ($products as $productModel) {
            $variants = [];
            foreach ($productModel->variants as $variantModel) {
                $variants[] = new ProductVariant(
                    $variantModel->size,
                    $variantModel->color,
                    $variantModel->price,
                    $variantModel->stock,
                    $variantModel->image_url
                );
            }
            $result[] = new Product(
                $productModel->name,
                $productModel->description,
                $productModel->price,
                $productModel->stock,
                $variants,
                $productModel->id
            );
        }

        return $result;
    }
}
