<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\CatalogRequest;
use App\Models\Brand;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index(){
        return view('Admin.brand',['brand' => Brand::all()]);
    }

    public function insertBrand(BrandRequest $request){
        $data = Brand::create($request->validated());
        if($data){
            return redirect()->route('admin');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }

    // public function updateForm(string $id){
    //     $brand = Brand::where('id', $id)->firstOrFail();
    //     return view('Admin.update',['item'=> $brand, 'brand' => Brand::all()]);
    // }

    public function updateFormBrand(Brand $brand){
        return view('Admin.update',['item'=> $brand, 'brand' => Brand::all()]);
    }

    public function updateBrand(Brand $brand, BrandRequest $brandRequest){
        $brand->update($brandRequest->validated());
        return redirect()->route('admin');
    }

    public function deleteBrand(string $id){
        $brand = Brand::where('id', $id)->firstOrFail();
        $brand->delete();
        return redirect()->route('admin');
    }

    

    public function catalog(){
        return view('Admin.catalog',['catalog' => Catalog::all()]);
    }

    
    public function insertCatalog(CatalogRequest $request){
        $data = Catalog::create($request->validated());
        if($data){
            return redirect()->route('catalog');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }
    public function deleteCatalog(Catalog $catalog){
        $catalog->delete();
        return redirect()->route('catalog');
    }

    public function product(){
        return view('Admin.product',['product' => Product::all(), 'brand' => Brand::all(), 'catalog' => Catalog::all()]);
    }
}
