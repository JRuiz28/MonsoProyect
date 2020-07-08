<?php

namespace App\Http\Controllers;
use App\product;

use Illuminate\Http\Request;

class catalogueController extends Controller
{
    public function index(){
        $products = product::paginate(9);
        return view("catalogue", compact('products'));
    }
    
    public function list(){
        $products = product::all();
        return view("catalogue", compact('products'));
    }
}
