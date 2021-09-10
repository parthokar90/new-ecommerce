<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function index(){
        $product=Product::where('status',1)->get();
        return view('frontend.home',compact('product'));
    }

    public function productDetails($id){
        $product=Product::findOrFail($id);
        return view('frontend.product_details',compact('product'));
    }
}
