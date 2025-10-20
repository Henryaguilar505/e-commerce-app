<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

//rutas publicas
Route::post('/login', [Authcontroller::class, 'login'])->name('login');
  //mostrar todos los productos
Route::get('products', [ProductController::class, 'index']);
    //filtrar productos por categoria
Route::get('products/category/{category_id}', [ProductController::class, 'filterByCategory']);


//rutas protegidas con sanctum
Route::middleware('auth:sanctum')->group(function () {
    //almacenar productos
    Route::post('products', [ProductController::class, 'store']);
    //eliminar producto
    Route::delete('products/{id}', [ProductController::class, 'destroy']);
    //actualizar producto
    Route::put('products/{id}', [ProductController::class, 'update']);

    //Categorias
    Route::get('categories', [CategoryController::class, 'index']);



    //cerrar sesion
    Route::post('/logout', [Authcontroller::class, 'logout'])->name('logout');
});

