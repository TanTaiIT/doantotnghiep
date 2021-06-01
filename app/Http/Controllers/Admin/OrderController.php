<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\custommer;
use App\Models\Coupon;
use App\Models\product;

use Carbon\Carbon;
use PDF;
// use Mail;
use Session;
use DB;
class OrderController extends Controller
{
	
    public function view_order($order_code){
		$order_details = OrderDetail::with('product')->where('order_code',$order_code)->get();
		$getorder = Order::where('order_code',$order_code)->get();
		foreach($getorder as $key => $ord){
			$customer_id = $ord->customer_id;
			$shipping_id = $ord->shipping_id;
			$order_status = $ord->order_status;
		}
		$customer = custommer::where('customer_id',$customer_id)->first();
		$shipping = shipping::where('shipping_id',$shipping_id)->first();

		$order_details_product = OrderDetail::with('product')->where('order_code', $order_code)->get();

		foreach($order_details_product as $key => $order_d){

			$product_coupon = $order_d->product_coupon;
		}
		if($product_coupon != 'no'){
			$coupon = Coupon::where('coupon_code',$product_coupon)->first();
			$coupon_condition = $coupon->coupon_condition;
			$coupon_number = $coupon->coupon_number;
		}else{
			$coupon_condition = 2;
			$coupon_number = 0;
		}
		
		return view('admin.Order.view_order')->with(compact('order_details','customer','shipping','coupon_condition','coupon_number','getorder','order_status'));

	}
	public function manage_order(){
    	$order = Order::orderby('created_at','DESC')->get();
    	return view('admin.Order.manage_order')->with(compact('order'));
    }
    public function update_qty(Request $request){
		$data = $request->all();
		$order_details = OrderDetail::where('product_id',$data['order_product_id'])->where('order_code',$data['order_code'])->first();
		$order_details->product_sales_quantity = $data['order_qty'];
		$order_details->save();
	}
    public function update_order_qty(Request $request){
			//update order
			$data = $request->all();
			$order = Order::find($data['order_id']);
			$order->order_status = $data['order_status'];
			$order->save();
			if($order->order_status==2){
				foreach($data['order_product_id'] as $key => $product_id){

					$product = Product::find($product_id);
					$product_quantity = $product->soluong;
					$product_sold = $product->product_sold;
					foreach($data['quantity'] as $key2 => $qty){

						if($key==$key2){
							$pro_remain = $product_quantity - $qty;
							$product->soluong = $pro_remain;
							$product->product_sold = $product_sold + $qty;
							$product->save();
						}
					}
			}
			}elseif($order->order_status!=2 && $order->order_status!=3){
				foreach($data['order_product_id'] as $key => $product_id){
					$product = Product::find($product_id);
					$product_quantity = $product->soluong;
					$product_sold = $product->product_sold;
					foreach($data['quantity'] as $key2 => $qty){

						if($key==$key2){
							$pro_remain = $product_quantity + $qty;
							$product->soluong = $pro_remain;
							$product->product_sold = $product_sold - $qty;
							$product->save();
						}
					}
				}
			}


		}
}
