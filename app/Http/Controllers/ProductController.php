<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingredient;
use App\product_ingredient;

class ProductController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth'); 
    }

    public function create(){
        return view('create');
    }

   public function store(Request $request){        
        dd($request->all()); 
   }
}
