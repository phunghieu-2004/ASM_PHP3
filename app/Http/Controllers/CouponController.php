<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function insert_coupon(){
        return view('admin.coupon.insert_coupon');
    }

    public function insert_coupon_code(Request $request){
        $data = $request ->all();
        $coupon = new Coupon;
        $coupon ->coupon_name = $data['coupon_name'];
        $coupon ->coupon_number = $data['coupon_number'];
        $coupon ->coupon_code = $data['coupon_code'];
        $coupon ->coupon_time = $data['coupon_time'];
        $coupon ->coupon_condition = $data['coupon_condition'];
        $coupon ->save();
        
        Session::put('message', 'thêm mã giảm giá thành công');        
        return Redirect::to('insert-coupon');
    }

    public function list_coupon(){
        $data = Coupon::query()->get();
        // dd($data);
        return view('admin.coupon.list_coupon', compact('data'));
    }
    public function delete(string $id)
    {
        DB::table('tbl_coupon')->where('id', $id)->delete();
        return back();
    }
}
