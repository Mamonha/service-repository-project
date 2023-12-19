<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsMongoDB;

class ProductController extends Controller
{
    public function store(){  
        $product = new ProductsMongoDB([
            'guid'=> 'cust_1111',
            'sku' => '55',
            'name'=> 'Vassoura',
            'category' => 'ferramentas',
            'description' => 'Teste apenas',
        ]);
       
        return to_route('store.product', $product);
    }
}
