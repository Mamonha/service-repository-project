<?php

namespace App\Http\Repositories;
use App\Models\ProductsMongoDB;

class ProductRepository
{
    public function create(array $data)
    {
        return ProductsMongoDB::create($data);
    }

    public function update(ProductsMongoDB $product, array $data)
    {
        $product->update($data);
        return $product;
    }

    public function show($id)
    {
        $product = ProductsMongoDB::findOrFail($id);
        return $product;
    }

    public function index(){
        return ProductsMongoDB::all();
    }
    
    public function delete(ProductsMongoDB $product)
    {
        $product->delete();
    }

}