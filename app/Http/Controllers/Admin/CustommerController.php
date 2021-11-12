<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\custommer;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Session;
use Carbon\Carbon;
class CustommerController extends Controller
{
    public function custommer_view(){
        $cus=custommer::where('status',1)->paginate(10);
        return view('manager.custommer.index',compact('cus'));
    }
    public function cus_del($cus_id){
        $cus=custommer::where('customer_id',$cus_id)->update(['status'=>0]);
        return redirect()->back();
    }
    public function recover_view(){
        $cus_re=custommer::where('status',0)->paginate(10);
        return view('manager.custommer.cus_re',compact('cus_re'));
    }
    public function cus_recover($cus_id){
        $cus_re=custommer::where('customer_id',$cus_id)->update(['status'=>1]);
        return redirect()->back()->with('message','khách hàng đã được khôi phục');
    }
    public function send_code(Request $req,$cus_id){
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
        $code=coupon::where('coupon_status',1)->where('end_day','>=',$today)->paginate(10);
        $cus=custommer::where('customer_id',$cus_id)->get();
        return view('manager.custommer.list_code',compact('code','today','cus'));
    }
}
