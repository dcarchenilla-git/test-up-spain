<?php
namespace Src\Inventory\Application\Service;

use Src\Inventory\Application\Command\CreateProductCommand;
use Src\Inventory\Application\Command\CreateProductHandler;

class ProductCreator
{
    public function __construct(private CreateProductHandler $handler) {}

    public function create(array $data): void
    {
        $command = new CreateProductCommand(
            name: $data['name'],
            description: $data['description'],
            price: $data['price'],
            stock: $data['stock'],
            variants: $data['variants'] ?? []
        );

        $this->handler->handle($command);
    }


    
}
