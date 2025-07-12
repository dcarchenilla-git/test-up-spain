<?php
namespace Src\Inventory\Domain\Entity;

class Product
{
    public ?int $id;
    public string $name;
    public string $description;
    public float $price;
    public int $stock;
    /** @var ProductVariant[] */
    public array $variants;

    public function __construct(
        string $name,
        string $description,
        float $price,
        int $stock,
        array $variants = [],
        ?int $id = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->variants = $variants;
    }

    public function addVariant(ProductVariant $variant): void
    {
        $this->variants[] = $variant;
    }
}

//Dominio: Definimos las entidades Product y ProductVariant con sus atributos y métodos básicos.