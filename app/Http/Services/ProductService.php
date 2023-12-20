<?php

namespace App\Http\Services;
use App\Http\Repositories\ProductRepository;
use App\Models\ProductsMongoDB;

class ProductService
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
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
