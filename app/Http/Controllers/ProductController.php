<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    protected $product;
    protected function __construct(Product $products)
    {
        $this->product = $products;
    }
    public function index(){
        // $product = Product::all();
        // return view('welcome',['product'=>$product]);
    }
}
