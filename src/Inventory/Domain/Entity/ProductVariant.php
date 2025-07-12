<?php

namespace Src\Inventory\Domain\Entity;




class ProductVariant
{
    public string $size;
    public string $color;
    public float $price;
    public int $stock;
    public string $imageUrl;

    public function __construct(
        string $size,
        string $color,
        float $price,
        int $stock,
        string $imageUrl
    ) {
        $this->size = $size;
        $this->color = $color;
        $this->price = $price;
        $this->stock = $stock;
        $this->imageUrl = $imageUrl;
    }
}

//Dominio: Definimos las entidades Product y ProductVariant con sus atributos y métodos básicos.