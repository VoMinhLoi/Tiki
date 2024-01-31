<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index(){
        $brand = Brand::all();
        return view('Admin.manage',['brand' => $brand]);
    }

    public function insert(BrandRequest $request){
        $data = Brand::create($request->validated());
        if($data){
            redirect()->intended('/dashboard');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);

    }
}
