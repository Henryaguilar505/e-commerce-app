<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::post('/login', [Authcontroller::class, 'login'])->name('login');

//rutas protegidas con sanctum
Route::middleware('auth:sanctum')->group(function () {
    //mostrar todos los productos
    Route::get('products', [ProductController::class, 'index']);
    //filtrar productos por categoria
    Route::get('products/category/{category_id}', [ProductController::class, 'filterByCategory']);
    //alamcenar productos
    Route::post('products', [ProductController::class, 'store']);
});

