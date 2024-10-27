<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::get();
        if ($products->count() > 0) {
            return ProductResource::collection($products);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|integer'
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Product Created Successfully',
            'data' => new ProductResource($product)
        ], 200);

    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }
    public function update(Request $request, Product $product)
    {
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|integer'
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Product Updated Successfully',
            'data' => new ProductResource($product)
        ], 200);

    }
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => 'Product deleted Successfully'
        ], 200);
    }
}
