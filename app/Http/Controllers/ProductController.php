<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;


class ProductController extends Controller
{
    //
    protected $product;
    public function __construct(Product $products)
    {
        $this->product = $products;
    }
    public function index(){
        $product = Product::all();
        return view('welcome',['product'=>$product]);
    }
    public function detail(Product $product){
        return view('DetailProduct.container',['product'=> $product]);
    }


    
}