<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{

    protected $catalog;
    public function __construct(Catalog $catalogs)
    {
        $this->catalog = $catalogs;
    }
    //
    public function index(){
        $catalog = Catalog::all();
        $product = Product::all();
        if(Auth::check()){
            $cart = Cart::where('user_id', Auth::user()->id)->get()->count();
            return view('welcome',['catalog'=>$catalog, 'product'=> $product, 'cart' => $cart]);
        }
        return view('welcome',['catalog'=>$catalog, 'product'=> $product, 'cart' => 0]);
    }
}
