<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

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
}
