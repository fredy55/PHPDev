<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    private array $data;
    
    public function index(){
        //$title = env("APP_NAME");
        $title = 'Today\'s Class';
        $list = [
            'John Mark',
            'Jenny Kiels',
            'Mike Burner'
        ];

        //dd($title);

        return view('hello', ['title'=>$title, 'students'=>$list]);
    }

    public function homepage(){
        // $data['products'] = Product::select('products.*', 'cat.category', 'cat.category_id')
        //                     ->join('categories as cat', 'cat.category_id', '=', 'products.category_id')
        //                     ->get();
        $data['products'] = Product::all();

        //dd($data['products']);

        return view('home', $data);
    }

    public function about(){
        

        return view('about');
    }

    public function error404(){
        

        return view('error404');
    }
}
