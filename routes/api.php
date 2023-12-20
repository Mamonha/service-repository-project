<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Produc;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('products')->group(function () {
    Route::post('/', [ProductController::class, 'create']); // Rota para criar um produto
    Route::put('/{id}', [ProductController::class, 'update']); // Rota para atualizar um produto
    Route::delete('/{id}', [ProductController::class, 'delete']); // Rota para excluir um produto
});