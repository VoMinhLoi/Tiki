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
        $validatedData = $request->validated();
        $formatTotalPriceString = preg_replace("/[^0-9]/", "", $validatedData['totalPrice']);
        $validatedData['totalPrice'] = $formatTotalPriceString;
        $existCart = Cart::where('product_id', $validatedData['product_id'])->first();
        if($existCart){
            $existCart->update  (
                                ['quantity' => $existCart->quantity + $validatedData['quantity']],
                                ['totalPrice' => $existCart->totalPrice + $validatedData['totalPrice']]
            );
        }
        else {
            //Cart::create($request->validated()); Nếu dùng biến $validateData thì biến $validateData sẽ thay đổi còn $request sẽ khác bởi vì validateData tạo bản sao của $request->validated() chứ không phải trỏ tới biến $request->validated().
            Cart::create($validatedData);
        }
        return redirect()->route('cart');
    }

    public function addCartToDelivery(CartRequest $request){
        $validatedData = $request->validated();
        $formatTotalPriceString = preg_replace("/[^0-9]/", "", $validatedData['totalPrice']);
        $validatedData['totalPrice'] = $formatTotalPriceString;
        // dd($request->validated());
        // $data = Cart::create($request->validated()); Nếu dùng biến $validateData thì biến $validateData sẽ thay đổi còn $request sẽ khác bởi vì validateData tạo bản sao của $request->validated() chứ không phải trỏ tới biến $request->validated().
        $data = Cart::create($validatedData);
        $idCart = $data->toArray()['id'];
        if($data){
            return redirect()->route('deliveryForm', $idCart);
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }

    public function updateCart(Cart $cart, CartRequest $request){
        $quantity = intval($request->validated()['quantity']);
        //  Update quantity so total price is also updated
        $product = Product::where('id', $cart->product_id)->first();
        $stringPrice = preg_replace("/[^0-9]/", "", $product->price);
        $totalPrice = $quantity * intval($stringPrice);
        $cart->totalPrice = $totalPrice;
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
