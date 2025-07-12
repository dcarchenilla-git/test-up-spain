1 Estructura de archivos (DDD y Hexagonal):

/src/Inventory/
├── Domain/
│   ├── Entity/
│   │   ├── Product.php
│   │   └── ProductVariant.php
│   ├── Repository/
│   │   └── ProductRepositoryInterface.php
│   ├── Event/
│   │   └── ProductCreatedEvent.php
│   └── Service/
│       └── EmailNotifierInterface.php
│
├── Application/
│   ├── Command/
│   │   ├── CreateProductCommand.php
│   │   └── CreateProductHandler.php
│   ├── Query/
│   │   └── GetProductQueryHandler.php
│   └── Service/
│       └── ProductCreator.php
│
├── Infrastructure/
│   ├── Persistence/
│   │   ├── EloquentProductRepository.php
│   │   └── Models/
│   │       ├── ProductModel.php
│   │       └── ProductVariantModel.php
│   └── Email/
│       ├── SendGridNotifier.php
│       └── SMTPNotifier.php
│
/app/Http/Controllers/Inventory/
│   └── ProductController.php

/routes/api.php


2 Resumen de los pasos seguidos:
Dominio: Definimos las entidades Product y ProductVariant con sus atributos y métodos básicos.
Repositorio: Creamos la interfaz ProductRepositoryInterface para abstraer la persistencia.
Eventos de Dominio: Implementamos ProductCreatedEvent para notificar cuando se crea un producto.
Servicios de Dominio: Interfaz EmailNotifierInterface y dos implementaciones concretas para SMTP y SendGrid.
Aplicación: Comando CreateProductCommand y su handler para manejar la creación del producto con CQRS.
Infraestructura: Modelos Eloquent y el adaptador EloquentProductRepository para persistir en MySQL.
Notificaciones: Servicio para enviar correos al crear un producto.
API REST: Controlador con endpoint POST /inventory/products para crear productos validando datos y retornando JSON.
Extras: ProductSeeder con otro endpoint para listar y borrar productos
Rutas: Registro del endpoint en routes/api.php.
Otros archivos de configuración: cambiar el correo en SMTPNotifier.php, otros ajustes en .env
