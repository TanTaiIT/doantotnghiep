<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\custommer;
use App\Models\Coupon;
use Carbon\Carbon;
use App\Mail\TestMail;
use Mail;

class MailController extends Controller
{

    public function send_mail($condition ,$number ,$code ,$time){
        $customer = Custommer::where('custommer_vip','=',NULL)->get();

        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
        $coupon = Coupon::where('coupon_code',$code)->where('coupon_status',1)->where('end_day','>',$today)->first();
        if($coupon){
            $start_coupon = $coupon->start_day;
        $end_coupon = $coupon->end_day;

        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');

        $title_mail = "Mã khuyến mãi ngày".' '.$now;
        
        $data = [];
        foreach($customer as $normal){
            $data['customer_email'][] = $normal->customer_email;
        }
        $coupon = array(
            'start_day' => $start_coupon,
            'end_day' => $end_coupon,
            'coupon_time' => $time,
            'coupon_condition' => $condition,
            'coupon_number' => $number,
            'coupon_code' => $code
        );
        Mail::send('admin.mail.send_coupon_vip',['coupon' => $coupon], function($message) use ($title_mail,$data){
            $message->to($data['customer_email'])->subject($title_mail);//send this mail with subject
            $message->from($data['customer_email'],$title_mail);//send from this mail
    });
  
         return redirect()->back()->with('message','Gửi mã khuyến mãi khách thường thành công');
     }else{
        return redirect()->back()->with('message','Mã giảm giá chưa kích hoạt');
     }
        
    }
    public function send_mail_vip($condition ,$number ,$code ,$time){
        $customer = Custommer::where('custommer_vip','=',1)->get();

        $coupon = Coupon::where('coupon_code',$code)->first();
        $start_coupon = $coupon->start_day;
        $end_coupon = $coupon->end_day;

        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');

        $title_mail = "Mã khuyến mãi ngày".' '.$now;
        
        $data = [];
        foreach($customer as $normal){
            $data['customer_email'][] = $normal->customer_email;
        }
        $coupon = array(
            'start_day' => $start_coupon,
            'end_day' => $end_coupon,
            'coupon_time' => $time,
            'coupon_condition' => $condition,
            'coupon_number' => $number,
            'coupon_code' => $code
        );
        Mail::send('admin.mail.send_coupon_vip',['coupon' => $coupon], function($message) use ($title_mail,$data){
                $message->to($data['customer_email'])->subject($title_mail);//send this mail with subject
                $message->from($data['customer_email'],$title_mail);//send from this mail
        });
  
         return redirect()->back()->with('message','Gửi mã khuyến mãi khách vip thành công');
    }
    public function mail_example(){
        return view('admin.mail.send_coupon_vip');
    }
}
