<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        try {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'required|image|max:2048',
            'categories_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/products');
            $validatedData['image'] = basename($path);
        }

        // Asignar el usuario propietario del producto.
        // Si hay un usuario autenticado, usar su id. Si no, usar 1 como fallback.
        $validatedData['users_id'] = Auth::check() ? Auth::id() : 1;

        $product = Product::create($validatedData);
            return response()->json($product, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al almacenar el producto', 'error' => $e->getMessage()], 500);
        }
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

    //formulario de productos
    public function create(){
        $categories = \App\Models\Category::all();
        return view('products.create', compact('categories'));
    }

    //mostrar todos los productos en una vista
    public function indexAll(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }
}
