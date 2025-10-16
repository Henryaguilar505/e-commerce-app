<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//formulario de productos
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

//alamcenar productos
Route::post('/products', [ProductController::class, 'store']);

//mostrar todos los productos (ruta alternativa)
Route::get('/products/all', [ProductController::class, 'indexAll'])->name('products.all');

// Listado principal de productos usando indexAll
Route::get('/products', [ProductController::class, 'indexAll'])->name('products.index');
