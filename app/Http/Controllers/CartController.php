<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function check_coupon(Request $request){
        $data = $request->all();
       print_r($data);
    }
    public function index(Cart $cart){
        

        return view("client.cart",compact('cart'));
    }

    public function add(Request $request, Cart $cart){
        $product = Product::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product, $quantity);

        return redirect()->route('cart.index')->with('success',' Thêm sản phẩm vào giỏ hàng thành công');
    }

    public function delete($id, Cart $cart){
        $cart->delete($id);
        return redirect()->route('cart.index')->with('warning',' Xóa sản phẩm khỏi giỏ hàng thành công');

    }
    public function update($id, Cart $cart){
        $quantity = request('quantity',1);
        $cart->update($id,$quantity);
        return redirect()->route('cart.index')->with('ok',' Cập nhật số lượng sản phẩm vào giỏ hàng thành công');
    }

    public function clear(Cart $cart){
        $cart->clear();
        return redirect()->route('cart.index')->with('warning',' Xóa sản phẩm khỏi giỏ hàng thành công');;
    }
}
