<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ContactConroller extends Controller
{
    public function submit(ProductController $request)
    {
        $product = new ProductController();

        $product -> name = $request -> input('name');
        $product -> email = $request -> input('email');
        $product -> message = $request -> input('message');

        $product->save();

        return redirect()->route('getHome');
    }
    public function updatePostSubmit($id,ProductRequest $request)
    {
        $product =Contact::find($id);

        $product -> name = $request -> input('name');
        $product -> email = $request -> input('email');
        $product -> message = $request -> input('message');

        $product->save();

        return redirect()->route('allData');
    }

    public function allData(){
        $product = new ProductController();
        return view('post',['data' => $product->orderBy('id','desc') ->take(10)->get()]);
    }


    public function post($id){
        $product =new ProductController();
        return view('updatemessage',['data'=>$product->find($id)]);
    }

    public function deletePost($id){
        ProductController::find($id)->delete();
        return redirect()->route('allData');

    }

}
