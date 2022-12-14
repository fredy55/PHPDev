<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Product;


class ProductApiController extends Controller
{
    /**
     * List of products
     *
     *@return JsonResponse
     */
    public function list():JsonResponse
    {
        try {
            $product = Product::paginate(2);

             return response()->json([
                'status' => 'success',
                'message' => 'Product List retrieved.',
                'data' => $product
             ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product List NOT retrieved.',
                'data' => null
            ], 400);
        }
    }

    /**
     * Single product details
     * 
     * @param int $id
     * 
     * @return JsonResponse
     */
    public function details(int $id):JsonResponse
    {
       try {
            $product = Product::find($id);

             return response()->json([
                'status' => 'success',
                'message' => 'Product details retrieved.',
                'data' => $product
             ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product details NOT retrieved.',
                'data' => null
            ], 400);
        }
    }

    /**
     * Add new product
     * 
     * @param Illuminate\Http\Request $request
     * 
     * @return JsonResponse
     */
    public function saveProduct(Request $request):JsonResponse
    {
       try {
         
          $validate = Validator::make($request->all(), [
             'name'=>'required|string|unique:products', 	
             'catId'=>'required|numeric',
             'price'=>'required|numeric',
             'pdescribe'=>'required|string',
          ]);
 
         if($validate->fails()){
            return response()->json([
                'status' => 'warning',
                'message' => 'Input validation failed: '.$validate->errors()->first(),
                'data' => null
             ], 412);
         }
 
         $input = $validate->validated();
 
         $prodQuery = Product::where('name', $input['name']);
         if($prodQuery->exists()){
            return response()->json([
                'status' => 'warning',
                'message' => 'Product already exist!',
                'data' => null
            ], 400);
         }
         
         $product = new Product;
         $product->category_id = $input['catId'];
         $product->name = $input['name'];
         $product->price = $request->post('price');
         $product->description = $request->input('pdescribe');
         
         if($product->save()){
             return response()->json([
                'status' => 'success',
                'message' => 'Product saved successfully!',
                'data' => $product
             ], 201);
         }else{
             return response()->json([
                'status' => 'error',
                'message' => 'Product NOT saved!',
                'data' => null
            ], 400);
         }

             
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product NOT saved: '.$e->getMessage(),
                'data' => null
            ], 400);
        }
    }

    /**
     * Updated product
     * 
     * @param Illuminate\Http\Request $request
     * @param int $id
     * 
     * @return JsonResponse
     */
    public function updateProduct(Request $request, int $id):JsonResponse
    {
       try {
         
          $validate = Validator::make($request->all(), [
             'name'=>'required|string|unique:products', 
             'catId'=>'required|numeric',
             'price'=>'required|numeric',
             'pdescribe'=>'required|string',
          ]);
 
         if($validate->fails()){
            return response()->json([
                'status' => 'warning',
                'message' => 'Input validation failed: '.$validate->errors()->first(),
                'data' => null
             ], 412);
         }
 
         $input = $validate->validated();
 
         $prodQuery = Product::where('product_id', $id);
         if(!$prodQuery->exists()){
            return response()->json([
                'status' => 'warning',
                'message' => 'Product does NOT exist!',
                'data' => null
            ], 400);
             
         }
         
         $data = [
            'category_id' => $input['catId'],
            'name' => $input['name'],
            'price' => $request->post('price'),
            'description' => $request->input('pdescribe')
         ];

         $prodQuery->update($data);

         if($product){
             return response()->json([
                'status' => 'success',
                'message' => 'Product updated successfully!',
                'data' => $data
             ], 200);
         }else{
             return response()->json([
                'status' => 'error',
                'message' => 'Product NOT updated!',
                'data' => null
            ], 400);
         }

             
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product NOT updated: '.$e->getMessage(),
                'data' => null
            ], 400);
        }
    }

    /**
     * Delete product
     * 
     * @param int $id
     * 
     * @return JsonResponse
     */
    public function deleteProduct(int $id):JsonResponse
    {
        try {
            $prodQuery = Product::where('product_id', $id);

           if($prodQuery->exists()){
                $prodQuery->delete();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Product deleted successfully!'
                 ], 200);
            }else{
                return response()->json([
                    'status' => 'warning',
                    'message' => 'Product does NOT exist!'
                ], 400);
           }
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error occured:'.$e->getMessage()
            ], 400);
        }
    }

}
