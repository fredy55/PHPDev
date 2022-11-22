<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;


class ProductsController extends Controller
{
    private array $data;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::all();

        //dd($data['products']);

        return view("products.index", $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['product'] = Product::find($id);

        //dd($data['product']);

        return view("products.details", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());

        $validate = Validator::make($request->all(), [
            'name'=>'required|string|unique:products',
            'price'=>'required|numeric',
            'description'=>'required|string',
        ]);

        if($validate->fails()){
            return redirect()->route('product.add');
        }

        $input = $validate->validated();
        
        $product = new Product;
        $product->name = $input['name'];
        $product->price = $request->post('price');
        $product->description = $request->input('pdescribe');

        $exisQuery = Product::where('name', $request->post('name'));
        
        if($exisQuery->doesntExist()){
            if($product->save()){
                return redirect()->route('home');
            }else{
                return redirect()->route('product.add');
            }
        }else {
            return redirect()->route('product.add');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = Product::find($id);

        //dd($data['product']);

        return view("products.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);

        $product = Product::find($request->post('id'));
        $product->name = $request->post('pname');
        $product->price = $request->post('price');
        $product->description = $request->post('pdescribe');
        
        if($product->save()){
            return redirect()->route('home');
        }else{
            return redirect()->route('product.add');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        if($product->delete()){
            return redirect()->route('home');
        }else{
            return redirect()->route('home');
        }
    }
}
