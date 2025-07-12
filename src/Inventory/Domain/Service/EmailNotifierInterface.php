<?php
namespace Src\Inventory\Domain\Service;

use Src\Inventory\Domain\Entity\Product;

interface EmailNotifierInterface
{
    public function notify(Product $product): void;
}

//Servicios de Dominio: Interfaz EmailNotifierInterface
