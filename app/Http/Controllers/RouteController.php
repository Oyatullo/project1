<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function getHome(){return view('layouts/home');}

    public function getAbout(){return view('layouts/about');}

    public function getContact(){return view('layouts/contact');}

    public function getProduct(){return view('layouts/product');}

    public function getPost(){return view('layouts/post');}
    public function addProduct(){return view('editable/productAdd');}
}
