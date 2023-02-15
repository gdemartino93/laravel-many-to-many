<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\Product;
use App\Models\Category;
use App\Models\Typology;

class MainController extends Controller
{
    public function home(){
        $categories = Category :: all();
        // dd($categories);
        return view('pages.home', compact("categories"));
    }

    public function products(){
       
        $products = Product :: all();
        // dd($products);
        return view('pages.products', compact('products'));
    }
    public function createNew(){
        $categories = Category :: all();
        $typologies = Typology :: all();
        return view('pages.createnew',compact('categories', 'typologies'));
    }
}
