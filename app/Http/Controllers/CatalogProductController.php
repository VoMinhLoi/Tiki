<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogProductController extends Controller
{
    //
    protected $catalog, $product;
    protected function __construct(Catalog $catalog, Product $product)
    {
        $this->catalog = $catalog;
        // $this->product = $product;
    }
    public function index(){
        // $catalog = Catalog::all();
        // $product = Product::all();
        // return view('welcome',['catalog'=>$catalog,'product'=>$product]);
        // return view('welcome');
    }
}