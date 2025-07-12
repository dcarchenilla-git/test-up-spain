<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Src\Inventory\Infrastructure\Controller\ProductController;
use App\Http\Controllers\DemoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/demo', [DemoController::class, 'index']);
#https://test-app.test/api/demo

Route::get('/test', [ProductController::class, 'test']);
Route::post('/products/add', [ProductController::class, 'store']);
Route::get('/products/list', [ProductController::class, 'index']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);
//https://test-app.test/api/test
//https://test-app.test/api//products/add
//https://test-app.test/api//products/list
//https://test-app.test/api//products/1
//https://test-app.test/api/products/7


//Rutas: Registro del endpoint en routes/api.php.