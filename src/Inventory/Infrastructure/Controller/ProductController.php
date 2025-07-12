<?php
namespace Src\Inventory\Infrastructure\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Src\Inventory\Application\Service\ProductCreator;
use Src\Inventory\Domain\Repository\ProductRepositoryInterface;

class ProductController extends Controller
{
    public function __construct(
        private ProductCreator $creator,
        private ProductRepositoryInterface $repositoryInterface
    ) {}

    public function test()
    {
        return 'test';
    }

    public function store(Request $request)
    {

        //return 'test add';
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'variants' => 'array',
            'variants.*.size' => 'required_with:variants|string',
            'variants.*.color' => 'required_with:variants|string',
            'variants.*.price' => 'required_with:variants|numeric',
            'variants.*.stock' => 'required_with:variants|integer',
            'variants.*.imageUrl' => 'required_with:variants|string',
        ]);

        $this->creator->create($data);

        return response()->json(['message' => 'Producto creado'], 201);
    }

    public function index()
    {
        $products = $this->repositoryInterface->findAll();

        $result = array_map(function($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'stock' => $product->stock,
                'variants' => array_map(function($variant) {
                    return [
                        'size' => $variant->size,
                        'color' => $variant->color,
                        'price' => $variant->price,
                        'stock' => $variant->stock,
                        'imageUrl' => $variant->imageUrl,
                    ];
                }, $product->variants),
            ];
        }, $products);

        return response()->json($result);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'numeric',
            'stock' => 'integer',
            'variants' => 'array',
            'variants.*.size' => 'string',
            'variants.*.color' => 'string',
            'variants.*.price' => 'numeric',
            'variants.*.stock' => 'integer',
            'variants.*.imageUrl' => 'url',
        ]);

        $product = $this->repositoryInterface->findById($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        // Actualiza campos si vienen en la petición
        $product->name = $request->get('name', $product->name);
        $product->description = $request->get('description', $product->description);
        $product->price = $request->get('price', $product->price);
        $product->stock = $request->get('stock', $product->stock);

        if ($request->has('variants')) {
            $variants = array_map(function ($variant) {
                return new ProductVariant(
                    $variant['size'],
                    $variant['color'],
                    $variant['price'],
                    $variant['stock'],
                    $variant['imageUrl']
                );
            }, $request->variants);

            $product->setVariants($variants);
        }

        $this->repositoryInterface->update($product);

        return response()->json(['message' => 'Producto actualizado'], 200);
    }

    public function delete(int $id)
    {
        $product = $this->repositoryInterface->findById($id);
        //dd($product);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        $this->repositoryInterface->delete($product);

        return response()->json(['message' => 'Producto eliminado'], 200);
    }

}
