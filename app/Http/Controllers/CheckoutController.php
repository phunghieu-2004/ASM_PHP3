<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Mail\OderMail;
use App\Models\Order;
use App\Models\OrderDetails;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function checkout(Cart $cart)
    {
        return view('client.checkout', ['cart' => $cart]);
    }

    public function post_checkout(Request $request, Cart $cart)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);

        $data['user_id'] = Auth::user()->id;

        if ($order = Order::create($data)) {
            $token = \Str::random(40);
            foreach ($cart->list() as $cartItem) {
                $data1 = [
                    'order_id' => $order->id,
                    'products_id' => $cartItem['productId'],
                    'quantity' => $cartItem['quantity'],
                    'price' => $cartItem['price'],
                ];

                OrderDetails::create($data1);
            }
            
            // $cart->clear();
            //gui mail xac nhan
            $order ->token =$token;
            $order ->save();
            Mail::to(Auth::user()->email)->send(new OderMail($order,$token));

            
        }
        return redirect()->route('client.index')->with('ok','Something orror, please try again');
       
    }

    public function verify($token){
        $order =Order::where('token',$token)->first();
        if($order){
            $order->status=1;
            $order->token=null;
            $order->save();
            return redirect()->route('client.index')->with('ok','Order verify successfully');
        }
        return abort(404);
    }
}
