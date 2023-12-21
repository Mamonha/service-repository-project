<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsMongoDB;
use App\Http\Services\ProductService;


class ProductController extends Controller
{
    protected $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $product = $this->service->indexProduct();
        return response()->json([
            'message' => 'All Products',
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        $validateProduct = $this->service->validateProductData($request); 
        $product = $this->service->createProduct($validateProduct);
        
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ]);
    }

    public function show($id)
    {
        $product = $this->service->showProduct($id);
        return response()->json([
            'message' => 'Product data:',
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $validateProduct = $this->service->validateProductData($request); 
        $product = $this->service->updateProduct($id, $validateProduct);

        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product
        ]);
    }

    public function destroy($id)
    {
        $this->service->deleteProduct($id);

        return response()->json([
            'message' => 'Product deleted successfully'
        ]);
    }
}
