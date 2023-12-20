<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class ProductsMongoDB extends Model
{

    use  HasFactory;

    protected  $connection = 'mongodb';

    protected  $collection = 'laracoll';


    protected  $fillable = ['guid','sku','name', 'category', 'description', 'price'];
}
