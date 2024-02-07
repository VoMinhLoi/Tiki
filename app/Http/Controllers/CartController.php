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
        
        $products = [];
        $quantitys = [];
        // $pay = 0;
        foreach ($cart as $item){
            $product = Product::where('id', $item->product_id)->first();
            // Check if the product is found before appending to the array
            if ($product) {
                $products[] = $product;
            }
            $quantitys[] = $item->quantity;

            // $quantity = $item->quantity;
            // $price = (float)str_replace('.', '', $product->price);
            // $pay += $quantity * $price;

        }
        return view('Cart.cart',['products' => $products,'quantitys' => $quantitys]);
    }

    public function addCart(CartRequest $request){
        $data = Cart::create($request->validated());
        if($data){
            return redirect()->route('cart');
        }
        return redirect()->back()->with(['message'=>'Dang ky that bai']);
    }
}
