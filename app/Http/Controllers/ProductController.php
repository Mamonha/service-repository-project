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

    public function create(Request $request)
    {
        $product = $this->service->createProduct($request->all());

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = $this->service->updateProduct($id, $request->all());

        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product
        ]);
    }

    public function delete($id)
    {
        $this->service->deleteProduct($id);

        return response()->json([
            'message' => 'Product deleted successfully'
        ]);
    }
}
