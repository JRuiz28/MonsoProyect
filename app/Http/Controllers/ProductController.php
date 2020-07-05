<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingredient;

class ProductController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth'); 
    }
    
    public function create()
    {
        $ingredients = ingredient::all();
        return view('/registerProduct', compact('ingredients'));
    }
    
    public function store(Request $request){
        
         dd($request->all()); 
    }
}
