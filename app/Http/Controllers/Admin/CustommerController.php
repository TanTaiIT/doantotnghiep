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
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
        $code=coupon::where('coupon_status',1)->where('end_day','>=',$today)->paginate(10);
        return view('manager.custommer.index',compact('cus','code','today'));
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
    public function list_view(Request $req){
        
    }
    // public function view_list(Request $req){
    //     $id=$req->cus_id;
    //     $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
    //     $code=coupon::where('coupon_status',1)->where('end_day','>=',$today)->paginate(10);
    //     $cus=custommer::where('customer_id',$id)->first();
    //     $output='';
    //     $output.='
    //     <table class="table table-striped table-bordered" >
    //     <thead>
    //     <tr>
    //     <th>STT</th>
    //     <th>tên mã</th>
    //     <th>mã giảm giá</th>
    //     <th>số lượng mã</th>
    //     <th>điều kiện giảm</th>
    //     <th>ngày bắt đầu</th>
    //     <th>ngày kết thúc</th>
    //     <th>tình trạng</th>
    //     <th>Gửi mã</th>
    //     </tr>
    //     </thead>
    //     <tbody>';
    //     $i=0;
    //     foreach($code as $key => $co){
    //     $i++;
    //     $output.='<tr>
    //     <td>'.$i.'</td>
    //     <td>'. $co->coupon_name .'</td>
    //     <td>'. $co->coupon_code .'</td>
    //     <td>'. $co->coupon_number .'</td>';
        
    //     if($co->coupon_condition==1){
                                
    //     $output.='<td>Giảm theo tiền</td>';
                              
    //     }else{
                              
    //     $output.='<td>Giảm theo %</td>';
                               
    //     }

        
    //     $output.='<td>'. $co->start_day.'</td>
    //     <td>'. $co->end_day.'</td>';
    //     if($co->coupon_status==1){
    //     $output.='<td>hoạt động</td>';
    //     }
    //     $output.='<td><button type="button" class="khuyenmai" data-cou_id="'.$co->coupon_id.'" data-cus_id="'.$cus->customer_id.'"><i class="glyphicon glyphicon-gift"></i></button></td>
                                    
    //     </tr>';

    //     }
    //         $output.='</tbody>
    //         </table>
    //     ';

    //     echo $output;
    // }
}
