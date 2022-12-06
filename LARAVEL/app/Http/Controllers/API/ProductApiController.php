<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductApiController extends Controller
{
    /**
     * List of products
     * 
     */
    public function list()
    {
        $product = Product::paginate(2);

        return response()->json($product, 200);
    }

    /**
     * Single product details
     * 
     */
    public function details(int $id)
    {
        $product = Product::find($id);

        return response()->json($product, 200);
    }
}
