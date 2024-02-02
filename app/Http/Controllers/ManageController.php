<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index(){
        return view('Admin.manage',['brand' => Brand::all()]);
    }

    public function insert(BrandRequest $request){
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

    public function updateForm(Brand $brand){
        return view('Admin.update',['item'=> $brand, 'brand' => Brand::all()]);
    }

    public function update(Brand $brand, BrandRequest $brandRequest){
        $brand->update($brandRequest->validated());
        return redirect()->route('admin');
    }

    public function delete(string $id){
        $brand = Brand::where('id', $id)->firstOrFail();
        $brand->delete();
        return redirect()->route('admin');
    }
}
