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
        return view('product.create', compact('ingredients'));
    }
    
    public function list(){
        $products = product::all();
        return view('product.list', compact("products"));
    }

    public function edit(product $product){
        return view('product.edit', compact("product"));
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
            
            $status = "Producto registrado de manera exitosa!";
            return back()->with(compact('status'));
    }
       
    public function update(Request $request, product $product){   
 
            $product->name = $request->nameProduct;
            $product->description = $request->description;
            $product->stock = $request->stock;
            $product->price = $request->price;
            $product->image_path = $request->file('image_path')->store('public');
            
            $product->save();
            
            $status = "Producto se ha actualizado de manera exitosa!";
            return back()->with(compact('status'));
    }
    
       
    public function delete($id){   
        
        product::find($id)->delete();
        
        $status = "¡Producto se ha eliminado de manera exitosa!";
        return back()->with(compact('status'));
}
}
