<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
  public function index(){
        $title = "Laravel Crud Apps";
        $description = "learning laravel";
        $data = [
            "host" => "mai khud",
            "public" => "App log"
        ];
        // return view('Products.index',compact('title','description'));
        // return view('Products.index')->with('data',$data);
        return view('Products.index',[
            'data' => $data
        ]);
    }

    public function show($name){
        $data = [
            "host" => "mai khud",
            "public" => "App log"
        ];
        return view('Products.index',[
            'data' => $data[$name] ?? 'product ' .$name. ' does not exist'
        ]);
    }
}
