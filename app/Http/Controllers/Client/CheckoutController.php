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
use App\Models\Feeship;
use DB;
use App\Models\shipping;
use App\Models\Order;
use App\Models\OrderDetail;
use PDF;
class CheckoutController extends Controller
{
    public function print_order($checkout_code){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($checkout_code));
        
        return $pdf->stream();
    }
    public function print_order_convert($checkout_code){
        $order_details = OrderDetail::where('order_code',$checkout_code)->get();
        $order = Order::where('order_code',$checkout_code)->get();
        foreach($order as $key => $ord){
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
        }
        $customer = custommer::where('customer_id',$customer_id)->first();
        $shipping = shipping::where('shipping_id',$shipping_id)->first();

        $order_details_product = OrderDetail::with('product')->where('order_code', $checkout_code)->get();

        foreach($order_details_product as $key => $order_d){

            $product_coupon = $order_d->product_coupon;
        }
        if($product_coupon != 'no'){
            $coupon = coupon::where('coupon_code',$product_coupon)->first();

            $coupon_condition = $coupon->coupon_condition;
            $coupon_number = $coupon->coupon_number;

            if($coupon_condition==1){
                $coupon_echo = $coupon_number.'%';
            }elseif($coupon_condition==2){
                $coupon_echo = number_format($coupon_number,0,',','.').'đ';
            }
        }else{
            $coupon_condition = 2;
            $coupon_number = 0;

            $coupon_echo = '0';

        }

        $output = '';

        $output.='<style>body{
            font-family: DejaVu Sans;
        }
        .table-styling{
            border:1px solid #000;
        }
        .table-styling tbody tr td{
            border:1px solid #000;
        }
        </style>
        <h1><centerCông ty TNHH một thành viên ABCD</center></h1>
        <h4><center>Độc lập - Tự do - Hạnh phúc</center></h4>
        <p>Người đặt hàng</p>
        <table class="table-styling">
        <thead>
        <tr>
        <th>Tên khách đặt</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        </tr>
        </thead>
        <tbody>';

        $output.='      
        <tr>
        <td>'.$customer->customer_name.'</td>
        <td>'.$customer->customer_phone.'</td>
        <td>'.$customer->customer_email.'</td>

        </tr>';


        $output.='              
        </tbody>

        </table>

        <p>Ship hàng tới</p>
        <table class="table-styling">
        <thead>
        <tr>
        <th>Tên người nhận</th>
        <th>Địa chỉ</th>
        <th>Sdt</th>
        <th>Email</th>
        <th>Ghi chú</th>
        </tr>
        </thead>
        <tbody>';

        $output.='      
        <tr>
        <td>'.$shipping->shipping_name.'</td>
        <td>'.$shipping->shipping_address.'</td>
        <td>'.$shipping->shipping_phone.'</td>
        <td>'.$shipping->shipping_email.'</td>
        <td>'.$shipping->shipping_notes.'</td>

        </tr>';


        $output.='              
        </tbody>

        </table>

        <p>Đơn hàng đặt</p>
        <table class="table-styling">
        <thead>
        <tr>
        <th>Tên sản phẩm</th>
        <th>Mã giảm giá</th>
        <th>Phí ship</th>
        <th>Số lượng</th>
        <th>Giá sản phẩm</th>
        <th>Thành tiền</th>
        </tr>
        </thead>
        <tbody>';

        $total = 0;

        foreach($order_details_product as $key => $product){

            $subtotal = $product->product_price*$product->product_sales_quantity;
            $total+=$subtotal;

            if($product->product_coupon!='no'){
                $product_coupon = $product->product_coupon;
            }else{
                $product_coupon = 'không mã';
            }       

            $output.='      
            <tr>
            <td>'.$product->product_name.'</td>
            <td>'.$product_coupon.'</td>
            <td>'.number_format($product->product_feeship,0,',','.').'đ'.'</td>
            <td>'.$product->product_sales_quantity.'</td>
            <td>'.number_format($product->product_price,0,',','.').'đ'.'</td>
            <td>'.number_format($subtotal,0,',','.').'đ'.'</td>

            </tr>';
        }

        if($coupon_condition==1){
            $total_after_coupon = ($total*$coupon_number)/100;
            $total_coupon = $total - $total_after_coupon;
        }else{
            $total_coupon = $total - $coupon_number;
        }

        $output.= '<tr>
        <td colspan="2">
        <p>Tổng giảm: '.$coupon_echo.'</p>
        <p>Phí ship: '.number_format($product->product_feeship,0,',','.').'đ'.'</p>
        <p>Thanh toán : '.number_format($total_coupon + $product->product_feeship,0,',','.').'đ'.'</p>
        </td>
        </tr>';
        $output.='              
        </tbody>

        </table>

        <p>Ký tên</p>
        <table>
        <thead>
        <tr>
        <th width="200px">Người lập phiếu</th>
        <th width="800px">Người nhận</th>

        </tr>
        </thead>
        <tbody>';

        $output.='              
        </tbody>

        </table>

        ';


        return $output;

    }
    public function confirm_order(Request $request){
        $url_canonical = $request->url();  
         $cate=category::all();
         $brand=brand::all();
         $com='detail';
         $data = $request->all();

         $shipping = new Shipping();
         $shipping->shipping_name = $data['shipping_name'];
         $shipping->shipping_email = $data['shipping_email'];
         $shipping->shipping_phone = $data['shipping_phone'];
         $shipping->shipping_address = $data['shipping_address'];
         $shipping->shipping_notes = $data['shipping_notes'];
         $shipping->shipping_method = $data['shipping_method'];
         $shipping->save();
         $shipping_id = $shipping->shipping_id;

         $checkout_code = substr(md5(microtime()),rand(0,26),5);

  
         $order = new Order();
         $order->customer_id = Session::get('customer_id');
         $order->shipping_id = $shipping_id;
         $order->order_status = 1;
         $order->order_code = $checkout_code;

         date_default_timezone_set('Asia/Ho_Chi_Minh');
         $order->created_at = now();
         $order->save();

         if(Session::get('cart')==true){
            foreach(Session::get('cart') as $key => $cart){
                $order_details = new OrderDetail();
                $order_details->order_code = $checkout_code;
                $order_details->product_id = 1; /*$cart['product_id']*/
                $order_details->product_name = $cart['name'];
                $order_details->product_price = $cart['price'];
                $order_details->product_sales_quantity = $cart['quantity'];
                $order_details->product_coupon =  $data['order_coupon'];
                $order_details->product_feeship = $data['order_fee'];
                $order_details->save();
            }
         }
         Session::forget('coupon');
         Session::forget('fee');
         Session::forget('cart');
         return view('client/thankyou',compact('cate','brand','com','url_canonical'));
    }
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
    public function del_fee(){
        Session::forget('fee');
        return redirect()->back();
    }
    public function payment(Request $request){
        $url_canonical = $request->url();  
    	 $cate=category::all();
    	 $com='cart';
         $brand=brand::all();
         $city = city::orderby('matp','ASC')->get();
    	 return view('client.payment',compact('cate','brand','city','com','url_canonical'));
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
        $url_canonical = $request->url();  
        $brand=brand::all();
        $cate=category::all();
        $com='cart';
        // $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
     //    $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
        $city = city::orderby('matp','ASC')->get();
        return view('client/cart',compact('cate','brand','com','url_canonical'))->with('city',$city);
    }
    public function calculate_fee(Request $request){
        $data = $request->all();
        if($data['matp']){
            $feeship = Feeship::where('fee_matp',$data['matp'])->where('fee_maqh',$data['maqh'])->where('fee_xaid',$data['xaid'])->get();
            if($feeship){
                $count_feeship = $feeship->count();
                if($count_feeship>0){
                     foreach($feeship as $key => $fee){
                        Session::put('fee',$fee->fee_feeship);
                        Session::save();
                    }
                }else{ 
                    Session::put('fee',25000);
                    Session::save();
                }
            }
           
        }
    }
}
