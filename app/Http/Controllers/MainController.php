<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\Product;

class MainController extends Controller
{
    public function home(){
       
        $products = Product :: all();
        // dd($products);
        return view('pages.home', compact('products'));
    }
}
