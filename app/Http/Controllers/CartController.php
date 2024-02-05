<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart(){
        $cart = Cart::all();
        return view('Cart.cart',['cart' => $cart]);
    }

    public function addCart(CartRequest $request){
        $data = Cart::create($request->validated());
        if($data){
            return redirect()->route('cart');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }
}
