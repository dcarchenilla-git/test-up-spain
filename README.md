<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta name="generator" content="" />
        <title></title>
        <style type="text/css">
            body {
                font-family: "Times New Roman";
                font-size: 12pt;
            }
            p {
                margin: 0pt;
            }
            li {
                margin-top: 0pt;
                margin-bottom: 0pt;
            }
        </style>
    </head>
    <body>
        <div>
            <ol type="1" style="margin: 0pt; padding-left: 0pt;">
                <li style="margin-left: 17.6pt; padding-left: 1.3pt; font-family: 'Courier New'; font-size: 10.5pt;"><span>Estructura de archivos (DDD y Hexagonal):</span></li>
            </ol>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New'; -aw-import: ignore;">&#xa0;</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">/src/Inventory/</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">├── Domain/</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── Entity/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── Product.php</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── ProductVariant.php</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── Repository/</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── ProductRepositoryInterface.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── Event/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── ProductCreatedEvent.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── Service/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span>
                <span style="font-family: 'Courier New';">└── EmailNotifierInterface.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">├── Application/</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── Command/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── CreateProductCommand.php</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── CreateProductHandler.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── Query/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── GetProductQueryHandler.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── Service/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span>
                <span style="font-family: 'Courier New';">└── ProductCreator.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">├── Infrastructure/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── Persistence/</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── EloquentProductRepository.php</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── Models/</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">├── ProductModel.php</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">│</span>
                <span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── ProductVariantModel.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── Email/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span>
                <span style="font-family: 'Courier New';">├── SendGridNotifier.php</span>
            </p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span>
                <span style="font-family: 'Courier New';">└── SMTPNotifier.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">│</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">/app/Http/Controllers/Inventory/</span></p>
            <p style="font-size: 10.5pt;">
                <span style="font-family: 'Courier New';">│</span><span style="font-family: 'Courier New'; -aw-import: spaces;">&#xa0;&#xa0; </span><span style="font-family: 'Courier New';">└── ProductController.php</span>
            </p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New'; -aw-import: ignore;">&#xa0;</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">/routes/api.php</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New'; -aw-import: ignore;">&#xa0;</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New'; -aw-import: ignore;">&#xa0;</span></p>
            <ol start="2" type="1" style="margin: 0pt; padding-left: 0pt;">
                <li style="margin-left: 17.6pt; padding-left: 1.3pt; font-family: 'Courier New'; font-size: 10.5pt;"><span>Resumen de los pasos seguidos:</span></li>
            </ol>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Dominio: Definimos las entidades Product y ProductVariant con sus atributos y métodos básicos.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Repositorio: Creamos la interfaz ProductRepositoryInterface para abstraer la persistencia.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Eventos de Dominio: Implementamos ProductCreatedEvent para notificar cuando se crea un producto.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Servicios de Dominio: Interfaz EmailNotifierInterface y dos implementaciones concretas para SMTP y SendGrid.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Aplicación: Comando CreateProductCommand y su handler para manejar la creación del producto con CQRS.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Infraestructura: Modelos Eloquent y el adaptador EloquentProductRepository para persistir en MySQL.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Notificaciones: Servicio para enviar correos al crear un producto.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">API REST: Controlador con endpoint POST /inventory/products para crear productos validando datos y retornando JSON.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Extras: ProductSeeder con otro endpoint para listar y borrar productos</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Rutas: Registro del endpoint en routes/api.php.</span></p>
            <p style="font-size: 10.5pt;"><span style="font-family: 'Courier New';">Otros archivos de configuración: cambiar el correo en SMTPNotifier.php, otros ajustes en .env</span></p>
        </div>
    </body>
</html>
