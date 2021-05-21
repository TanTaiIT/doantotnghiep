<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\custommer;
use App\Models\category;
use App\Models\city;
use App\Models\province;
use App\Models\wards;
use App\Models\brand;
use DB;
class CheckoutController extends Controller
{
    public function dangky(Request $req){
    	$cus=array();
    	$cus['customer_name']=$req->name;
    	$cus['customer_email']=$req->email;
    	$cus['customer_password']=md5($req->password);
    	$cus['customer_phone']=$req->sdt;
    	$cus_id=DB::table('tbl_customers')->insertGetId($cus);
    	Session::put('customer_id',$cus_id);
    	Session::put('customer_name',$req->customer_name);
    	return redirect()->route('cli_index');

    }
    public function dangnhap(Request $req){
    	$email=$req->email;
    	$password=md5($req->password);
    	$result=DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
    	if($result){
    		Session::put('customer_id',$result->customer_id);
    		Session::put('customer_name',$result->customer_name);
    		Session::flash('message','thanh cong');
    		return redirect()->route('cli_index');
    		
    	}else{
    		return redirect()->route('cart');
    		
    	}

    }
    public function payment(){
    	 $cate=category::all();
    	 $com='cart';
         $brand=brand::all();
         $city = city::orderby('matp','ASC')->get();
    	 return view('client.payment',compact('cate','brand','city','com'));
    }



    public function select_delivery(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="city"){
                $select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                    $output.='<option>---Chọn quận huyện---</option>';
                foreach($select_province as $key => $province){
                    $output.='<option value="'.$province->maqh.'">'.$province->name_quanhuyen.'</option>';
                }

            }else{

                $select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
                $output.='<option>---Chọn xã phường---</option>';
                foreach($select_wards as $key => $ward){
                    $output.='<option value="'.$ward->xaid.'">'.$ward->name_xaphuong.'</option>';
                }
            }
            echo $output;
        }
    }
        public function delivery_home(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="city"){
                $select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                    $output.='<option>---Chọn quận huyện---</option>';
                foreach($select_province as $key => $province){
                    $output.='<option value="'.$province->maqh.'">'.$province->name_quanhuyen.'</option>';
                }

            }else{

                $select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
                $output.='<option>---Chọn xã phường---</option>';
                foreach($select_wards as $key => $ward){
                    $output.='<option value="'.$ward->xaid.'">'.$ward->name_xaphuong.'</option>';
                }
            }
            echo $output;
        }
    }
    public function checkout(Request $request){
        $brand=brand::all();
        $cate=category::all();
        $com='cart';
        // $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
     //    $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
        $city = city::orderby('matp','ASC')->get();
        return view('client/cart',compact('cate','brand','com'))->with('city',$city);
    }
}
