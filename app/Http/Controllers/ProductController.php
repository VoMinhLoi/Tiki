<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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

        $brand = Brand::where('id', $product->brand_id)->get();
        if(Auth::check()){
            $cart = Cart::where('user_id', Auth::user()->id)->get()->count();
            return view('DetailProduct.container',['product'=> $product, 'brandName'=> $brand->toArray()[0]['name'], 'cart' => $cart]);
        }
        return view('DetailProduct.container',['product'=> $product, 'brandName'=> $brand->toArray()[0]['name'], 'cart' => 0]);
    }
}
