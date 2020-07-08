<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingredient;
use App\product;

class ProductController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth'); 
    }

    public function create(){
        
        $ingredients = ingredient::all();
        return view('create', compact('ingredients'));
    }

   public function store(Request $request){   

    //$request->file('image_path')->store('public');      
    //dd($request->all()); 

        $product =new product(); 

        $product->name = $request->nameProduct;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->image_path = $request->file('image_path')->store('public');
        
        $product->save();
        
        $status = "¡Usuario registrado de manera exitosa!";
        return back()->with(compact('status'));
   }
}
