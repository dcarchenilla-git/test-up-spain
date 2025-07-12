<?php
namespace Src\Inventory\Application\Command;

class CreateProductCommand
{
    public function __construct(
        public string $name,
        public string $description,
        public float $price,
        public int $stock,
        public array $variants
    ) {}
}
