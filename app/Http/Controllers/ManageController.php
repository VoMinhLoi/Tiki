<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\CatalogRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\User;
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

    public function insertProduct(ProductRequest $request){
        dd($request);
        $data = Product::create($request->validated());
        if($data){
            return redirect()->route('product');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }
    public function deleteProduct(Product $product){
        $product->delete();
        return redirect()->route('product');
    }



    public function user(){
        return view('Admin.user',['user' => User::all()]);
    }
    public function addUser(RegisterRequest $request){
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $dataShow = User::create($data);
        if($dataShow){
            // return view('welcome');
            return redirect()->route('user');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }

    public function deleteUser(User $user){
        $user->delete();
        return redirect()->route('user');
    }
    public function order(){
        $order = Cart::whereNotNull('phone')->get();
        $noPayingCarts = Cart::where('status','=','Chưa thanh toán')->get();
        // $cartsNoPay = Cart::where(['status' => 'Chưa thanh toán'])->get(); dùng cho nhiều điều kiện
        $paidCarts = Cart::where('status','<>','Chưa thanh toán')->get();
        $revenue = 0;
        foreach($noPayingCarts as $tiem){
            $revenue += intval($tiem->totalPrice);
        }
        $received = 0;
        foreach($paidCarts as $tiem){
            $received += intval($tiem->totalPrice);
        }
        return view('Admin.order',['order' => $order, 'revenue' => $revenue, 'received' => $received]);
    }
}
