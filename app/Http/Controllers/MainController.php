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
    public function store(Request $request){
        $data = $request -> validate([
            'name' => 'required|max:32',
            'description' => 'required|max:200',
            'price' => 'numeric|between:1,5000',
            'weight' => 'numeric',
            'typology' => 'required|integer'
        ]);
        $code = rand(10000,99999);
        $data['code'] = $code;
       
        $product = Product :: make($data);

        $typology = Typology :: find($data['typology']);

        $product -> typology() -> associate($typology);
        $product -> save();

        return redirect() -> route('products-home');
    }
}
