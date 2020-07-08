<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_ingredient;

class IngredientController extends Controller
{
   public function create()
    {
        $product_ingredients = product_ingredient::all();
        return view('/registerProduct', compact('product_ingredient'));
    }
}
