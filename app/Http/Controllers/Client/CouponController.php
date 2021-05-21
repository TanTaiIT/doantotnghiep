<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\coupon;
use Session;
class CouponController extends Controller
{
    public function unset_coupon(){
		$coupon = Session::get('coupon');
        if($coupon==true){
          
            Session::forget('coupon');
            return redirect()->back()->with('message','Xóa mã khuyến mãi thành công');
        }
	}
    public function insert_coupon(){
    	return view('admin.magiamgia.insert_coupon');
    }
    public function delete_coupon($coupon_id){
    	$coupon = coupon::find($coupon_id);
    	$coupon->delete();
    	Session::put('message','Xóa mã giảm giá thành công');
        return redirect()->route('list_coupon');
    }
    public function list_coupon(){
    	$coupon = Coupon::orderby('coupon_id','DESC')->get();
    	return view('admin.magiamgia.list_coupon')->with(compact('coupon'));
    }
    public function insert_coupon_code(Request $request){
    	$data = $request->all();

    	$coupon = new Coupon;

    	$coupon->coupon_name = $data['coupon_name'];
    	$coupon->coupon_number = $data['coupon_number'];
    	$coupon->coupon_code = $data['coupon_code'];
    	$coupon->coupon_time = $data['coupon_time'];
    	$coupon->coupon_condition = $data['coupon_condition'];
    	$coupon->save();

    	Session::put('message','Thêm mã giảm giá thành công');
        return redirect()->route('insert_coupon');


    }
}
