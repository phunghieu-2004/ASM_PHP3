<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Cart $cart){
        

        return view("client.cart",compact('cart'));
    }

    public function add(Request $request, Cart $cart){
        $product = Product::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product, $quantity);

        return redirect()->route('cart.index');
    }
}
