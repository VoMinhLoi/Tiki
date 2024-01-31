<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index(){
        $brand = Brand::all();
        return view('Admin.manage',['brand' => $brand]);
    }
}
