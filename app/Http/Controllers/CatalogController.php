<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
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
        return view('welcome',['catalog'=>$catalog, 'product'=> $product]);
    }
    public function search(ProductRequest $request){
        $keyWord = $request->validated()['name'];
        $catalogs = Catalog::all();
        $products = Product::where('name', 'LIKE', "%$keyWord%")->get();
        return view('welcome',['catalog'=>$catalogs, 'product'=> $products]);
    }
}
