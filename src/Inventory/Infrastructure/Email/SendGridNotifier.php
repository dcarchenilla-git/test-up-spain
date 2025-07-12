<?php
namespace Src\Inventory\Infrastructure\Email;

use Src\Inventory\Domain\Entity\Product;
use Src\Inventory\Domain\Service\EmailNotifierInterface;
use SendGrid;
use SendGrid\Mail\Mail as SendGridMail;

class SendGridNotifier implements EmailNotifierInterface
{
    public function notify(Product $product): void
    {
        $email = new SendGridMail();
        $email->setFrom("no-reply@tuapp.com", "Tu App");
        $email->setSubject("Nuevo producto creado");
        $email->addTo("pepe@up-spain.com");
        $email->addContent("text/plain", "Se ha creado el producto: {$product->name}");

        $sendgrid = new SendGrid(env('SENDGRID_API_KEY'));

        try {
            $sendgrid->send($email);
        } catch (\Exception $e) {
            error_log("Error enviando email SendGrid: " . $e->getMessage());
        }
    }
}


//Servicios de Dominio: Interfaz EmailNotifierInterface y para SendGrid.