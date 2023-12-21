<?php

namespace App\Http\Services;
use App\Http\Repositories\ProductRepository;
use App\Models\ProductsMongoDB;
use Illuminate\Http\Request;

class ProductService
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function validateProductData(Request $request)
    {
        return $request->validate([
            'guid' => 'required|string',
            'sku' => 'required|string',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'description' => 'nullable|string',
        ]);
    }

    public function createProduct(array $data)
    {
        return $this->repository->create($data);
    }

    public function updateProduct($id, array $data)
    {
        $product = ProductsMongoDB::findOrFail($id);
        return $this->repository->update($product, $data);
    }

    public function showProduct($id)
    {
        return $this->repository->show($id);
    }

    public function indexProduct()
    {
        return $this->repository->index();
    }

    public function deleteProduct($id)
    {
        $product = ProductsMongoDB::findOrFail($id);

        $this->repository->delete($product);
    }
}
