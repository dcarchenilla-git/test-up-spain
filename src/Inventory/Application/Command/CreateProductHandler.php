<?php
namespace Src\Inventory\Application\Command;

use Src\Inventory\Domain\Entity\Product;
use Src\Inventory\Domain\Entity\ProductVariant;
use Src\Inventory\Domain\Repository\ProductRepositoryInterface;
use Src\Inventory\Domain\Service\EmailNotifierInterface;
use Src\Inventory\Domain\Event\ProductCreatedEvent;

class CreateProductHandler
{
    public function __construct(
        private ProductRepositoryInterface $repository,
        private EmailNotifierInterface $notifier
    ) {}

    public function handle(CreateProductCommand $command): void
    {
        $product = new Product(
            name: $command->name,
            description: $command->description,
            price: $command->price,
            stock: $command->stock,
            variants: []
        );

        foreach ($command->variants as $variantData) {
            $variant = new ProductVariant(
                size: $variantData['size'],
                color: $variantData['color'],
                price: $variantData['price'],
                stock: $variantData['stock'],
                imageUrl: $variantData['imageUrl']
            );
            $product->addVariant($variant);
        }

        $this->repository->save($product);

        //Eventos de Dominio: Implementamos ProductCreatedEvent para notificar cuando se crea un producto.
        event(new ProductCreatedEvent($product));

        //Notificaciones: Servicio para enviar correos al crear un producto.
        $this->notifier->notify($product);
    }
}


//Aplicación: Comando CreateProductCommand y su handler para manejar la creación del producto con CQRS.