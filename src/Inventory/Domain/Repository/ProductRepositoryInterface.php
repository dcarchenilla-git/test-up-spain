<?php
namespace Src\Inventory\Domain\Repository;

use Src\Inventory\Domain\Entity\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product): void;

    public function findById(int $id): ?Product;

    //public function delete(int $id): void;

    /** @return Product[] */
    public function findAll(): array;


    public function update(Product $product): void;
    public function delete(Product $product): void;

}
