<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function addd(){
        return view('product');
    }

    public function addproduct(Request $request){
        Category::create([
            'name'=>$request->name,

     ]);
        return redirect()->back();
    }

    public function product(){
        $category=Category::get();
        return view('category',['categories'=>$category]);
    }

    public function products(Request $request){
        Product::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'category_id'=>$request->category_id

        ]);
        return redirect()->back();

    }
    public function drop(){
        $product=Product::where('category_id',2)->get();
        $product=Product::find(1);
        $product=Category::find(2);
        dd($product->products) ;
    }
}
