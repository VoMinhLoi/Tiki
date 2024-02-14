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
        $cart = Cart::where('user_id', Auth::user()->id)->whereNull('phone')->get();
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
        $cart->update($request->validated());
        return redirect()->route('cart');
    }

    public function deleteCart(Cart $cart){
        $cart->delete();
        return redirect()->route('cart');
    }

    public function deliveryForm(Cart $cart){
        return view('Cart.Delivery',['cart'=> $cart]);
    }
    
    public function updateCart2(Cart $cart, CartRequest $request){
        // dd($request->validated());
        $cart->update($request->validated());
        session()->flash('success', 'Đặt hàng thành công');
        return redirect()->route('home');
    }

    public function orderInterface(){
        $carts = Cart::where('user_id', Auth::user()->id)->where('phone', '<>', null)->get();
        // $carts = Cart::where('user_id', Auth::user()->id)->whereNotNull('phone')->get(); C2
        return view('Cart.order', ['carts'=> $carts]);
    }
    public function received(Cart $cart){
        // dd($cart);
        $cart->update(['status' => 'Đã nhận']);
        return redirect()->route('orderInterface');
    }
}
