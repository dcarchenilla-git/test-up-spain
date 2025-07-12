<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Inventory\Domain\Repository\ProductRepositoryInterface;
use Src\Inventory\Infrastructure\Persistence\EloquentProductRepository;
use Src\Inventory\Domain\Service\EmailNotifierInterface;
use Src\Inventory\Infrastructure\Email\SMTPNotifier;
use Src\Inventory\Application\Query\GetProductsHandler;

class InventoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Añade este binding para EloquentProductRepository
        $this->app->bind(ProductRepositoryInterface::class, EloquentProductRepository::class);

        // Cambia a SendGridNotifier si quieres usar SendGrid
        $this->app->bind(EmailNotifierInterface::class, SMTPNotifier::class);

    }

    public function boot(): void
    {
        //
    }
}
