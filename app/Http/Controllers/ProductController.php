<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //
    function index(){
        $products = Product::get();
        return view('products',compact('products'));
    }
    function show($id){
        
        $product = Product::where('id','=',$id)->first();
        return view('show',compact('product'));
    }
}