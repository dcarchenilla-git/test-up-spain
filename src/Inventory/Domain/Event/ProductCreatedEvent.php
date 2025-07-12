<?php
namespace Src\Inventory\Domain\Event;

use Src\Inventory\Domain\Entity\Product;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductCreatedEvent
{
    use Dispatchable, SerializesModels;

    public function __construct(public readonly Product $product) {}
}


//Eventos de Dominio: Implementamos ProductCreatedEvent para notificar cuando se crea un producto.