<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    public function submitProduct(ProductRequest $request){
        $product = new ProductController();

        $product ->name = $request -> input('name');
        $product -> cost = $request -> input('cost');
        $product->save();



        return '123';
    }
    public function allCard(){
        $product = new ProductController();
        return view('product',['card' => $product->orderBy('id','desc')->get()]);
    }

}
