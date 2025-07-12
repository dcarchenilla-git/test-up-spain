<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductVariant;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::create([
            'name' => 'Zapatilla Deportiva',
            'description' => 'Zapatilla deportiva ligera y cómoda.',
            'price' => 59.99,
            'stock' => 100,
        ]);

        $variants = [
            [
                'size' => 'M',
                'color' => 'Rojo',
                'price' => 59.99,
                'stock' => 50,
                'image_url' => 'https://via.placeholder.com/150'
            ],
            [
                'size' => 'L',
                'color' => 'Azul',
                'price' => 64.99,
                'stock' => 30,
                'image_url' => 'https://via.placeholder.com/150'
            ]
        ];

        foreach ($variants as $variant) {
            $product->variants()->create($variant);
        }


        $product = Product::create([
            'name' => 'Mochila Urbana',
            'description' => 'Mochila resistente al agua con múltiples compartimentos.',
            'price' => 39.99,
            'stock' => 200,
        ]);

        $variants = [
            [
                'size' => 'Standard',
                'color' => 'Negro',
                'price' => 39.99,
                'stock' => 120,
                'image_url' => 'https://via.placeholder.com/150/000000/FFFFFF/?text=Mochila+Negra'
            ],
            [
                'size' => 'Standard',
                'color' => 'Gris',
                'price' => 42.99,
                'stock' => 80,
                'image_url' => 'https://via.placeholder.com/150/C0C0C0/000000/?text=Mochila+Gris'
            ]
        ];

        foreach ($variants as $variant) {
            $product->variants()->create($variant);
        }

       
    }

    

}


//Extras: ProductSeeder de productos
