<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
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
        if(!is_null(imgUpload('image', $request))){
           $imgArr = imgUpload('image', $request);
        }else{
           return back()->with('warning', 'Product image NOT uploaded!'); 
        }
             

        //dd($imgName);
        
        // $exisQuery = Product::where('name', $request->post('name'));
        
        // if($exisQuery->exists())  
        //     return back()->with('warning', 'Product already exists!');


        $validate = Validator::make($request->all(), [
            'name'=>'required|string|unique:products',
            'price'=>'required|numeric',
            'pdescribe'=>'required|string',
        ]);

        if($validate->fails()){
            //$request->session()->put('data', 'validation Error!');
            //Session::put('data', 'validation Error!');
            //session()->put('data', ['validation Error!', 'jkwjkwj']);
            //session()->forget('data');
           
            return redirect()->route('product.add')->with('warning', 'Validation error: '.$validate->errors()->first());
        }

        $input = $validate->validated();

        $prodQuery = Product::where('name', $input['name']);
        if($prodQuery->exists()) return back()->with('warning', 'Product already exist!');
        
        $product = new Product;
        $product->name = $input['name'];
        $product->price = $request->post('price');
        $product->img_url = $imgArr['imgUrl'];
        $product->description = $request->input('pdescribe');
        
        if($product->save()){
            return redirect()->route('home')->with('success', 'Product saved successfully!');
        }else{
            return back()->with('warning', 'Product NOT saved!');
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
        
        $imgArr = imgUpload('image', $request);
        

        $product = Product::find($request->post('id'));
        $product->name = $request->post('pname');
        $product->price = $request->post('price');
        if(!is_null($imgArr)){
            $product->img_url = $imgArr['imgUrl'];
        }
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
