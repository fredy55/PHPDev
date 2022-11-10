<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
}
