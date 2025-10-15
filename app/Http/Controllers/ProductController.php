<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $products = Product::all();
            return response()->json($products, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al obtener los productos', 'error' => $e->getMessage()], 500);
        }
    }

   //filter products by category
    public function filterByCategory($category_id)
    {
        try {
            $products = Product::where('categories_id', $category_id)->get();
            return response()->json($products, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al filtrar los productos por categoría', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
