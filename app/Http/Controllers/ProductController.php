<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('DetailProduct.container',['product'=> $product, 'brandName'=> $brand->toArray()[0]['name']]);
    }

    public function filter(Request $request){
        $formatTotalPriceString = preg_replace("/[^0-9]/", "", $request['price']);
        $price = intval($formatTotalPriceString);
        // dd($price);
        // DB::enableQueryLog();
        $product = Product::whereRaw('CAST(price AS UNSIGNED) <= ?',[$price])->get();
        // dd(DB::getQueryLog());
        return view('welcome',['catalog'=>Catalog::all(), 'product'=> $product, 'price'=>$price]);
    }
}
