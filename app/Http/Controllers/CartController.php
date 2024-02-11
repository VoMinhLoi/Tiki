<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function cart(){
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        // $pay = 0;

        return view('Cart.cart',['carts' => $cart]);
    }

    public function addCart(CartRequest $request){
        $data = Cart::create($request->validated());
        if($data){
            return redirect()->route('cart');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }

    public function updateCart(Cart $cart, CartRequest $request){
        // dd($cart, $request->validated());
        $cart->update($request->validated());
        return redirect()->route('cart');
    }

    public function deleteCart(Cart $cart){
        $cart->delete();
        return redirect()->route('cart');
    }

    public function deliveryForm(){
        return view('Cart.Delivery');
    }
}
