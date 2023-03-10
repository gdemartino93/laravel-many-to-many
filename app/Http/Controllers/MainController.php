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
       
        $products = Product :: orderBy('created_at', 'DESC') -> get();
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
            'typology' => 'required|integer',
            'categories' => 'required|array'
        ]);
        $code = rand(10000,99999);
        $data['code'] = $code;

        $product = Product :: make($data);
        $typology = Typology :: find($data['typology']);

        $product -> typology() -> associate($typology);
        $product -> save();

        $categories = Category :: find($data['categories']);
        $product -> categories() -> attach($categories); 
        // dd($categories);
        return redirect() -> route('products-home');
    }
    // redirect to edit page
    public function edit(Product $product){

        $categories = Category :: all();
        $typologies = Typology :: all();

        return view('pages.editproduct',compact('categories','typologies','product'));
    }
    public function update(Request $request, Product $product){
            $data = $request -> validate([
                'name' => 'required|max:32',
                'description' => 'required|max:200',
                'price' => 'numeric|between:1,5000',
                'weight' => 'numeric',
                'typology' => 'required|integer',
                'categories' => 'required|array'
            ]);
            $product -> update($data);

            $typology = Typology :: find($data['typology']);
            $product -> typology() -> associate($typology);
            $product -> save();

            $categories = Category :: find($data['categories']);
            $product -> categories() -> sync($categories);

            return redirect() -> route('pages.home');
    }
}
