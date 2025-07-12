<?php
namespace Src\Inventory\Infrastructure\Email;

use Src\Inventory\Domain\Entity\Product;
use Src\Inventory\Domain\Service\EmailNotifierInterface;
use Illuminate\Support\Facades\Mail;

class SMTPNotifier implements EmailNotifierInterface
{
    public function notify(Product $product): void
    {
        $to = 'pepe@up-spain.com';

        Mail::raw("Se ha creado el producto: {$product->name}", function ($message) use ($to) {
            $message->to($to)
                    ->subject('Nuevo producto creado');
        });
    }
}


//Servicios de Dominio: Interfaz EmailNotifierInterface y para SMTP - mailtrap.io.