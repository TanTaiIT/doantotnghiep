<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Session;
use App\Models\category;
use App\Models\pro_img;
use App\Models\rating;
use App\Models\attribute;
use App\Models\product_attr;
use App\Models\slider;
use App\Models\CatePost;
use App\Models\binhluan;
use App\Models\Post;
use App\Models\quangcao;
use App\Models\intro;
use App\Models\thuoctinh;
use App\Models\custommer;
use App\Models\chinhsach;
use DB;
use Auth;
class ClientController extends Controller
{
    public function error_page(){
        return view('errors.404');
    }
    public function fetch_data(Request $req){
        $product=product::whereNotIn('category_id',[10])->where('product_status',1)->orderBy('product_id','desc')->paginate(6);
        return view('client.paginate_index',compact('product'))->render();
    }
    public function giohang(){
           $output='';
           $total = 0 ;
           if(count((array)session::get('cart'))==0){
            $output.='<a href="#" title="View your shopping cart" class="cart-link">
              <span class="amount"> 0 VNĐ</span>
              <span class="contents"><span class="badge badge-pill badge-danger">0</span><span class="lai">loại sản phẩm</span></span>';
           }else{
            foreach(session::get('cart') as $id => $details){
                $si=$details['size'];
                $km=$details['price']-$details['price_pro'];
                if($si=="Lớn")
                {
                    $sub=($km+(($km*20)/100))*$details['quantity'];
                }elseif($si=="Nhỏ"){
                     $sub=($km-(($km*20)/100))*$details['quantity'];
                }else{
                    $sub=$km*$details['quantity'];
                }
                      $total += $sub; 
                }
        $output.='<a href="#" title="View your shopping cart" class="cart-link">
      <span class="amount">'. number_format($total,0,',','.').' VNĐ</span>
      <span class="contents"><span class="badge badge-pill badge-danger">'.count((array)session::get('cart')) .'</span><span class="lai">loại sản phẩm</span></span>';
     }
      echo $output;

    }
    public function show(Request $req){
        $output='';
        
        $output.='<div class="cart">
                  <img class=" left1" width="70px" height="60px" src="../web/images/so.jpg" alt="">
                  <div class="cart-items">';
            $output.= '<ul>';
            if(session::get('cart')){
            foreach(session::get('cart') as $id => $details){
                $si=$details['size'];
                $km=$details['price']-$details['price_pro'];
                if($si=="Lớn")
                {
                    $sub=($km+(($km*20)/100))*$details['quantity'];
                }elseif($si=="Nhỏ"){
                     $sub=($km-(($km*20)/100))*$details['quantity'];
                }else{
                    $sub=$km*$details['quantity'];
                }
                // $gia=$details['price']-$details['price_pro'];
                $tien=$sub;               
            

          $output.='<li class="clearfix">
            <div class="img-con">';
                   if($details['price_pro']!=""){ 
                    $output.='<span class="badge badge-pill badge-danger ban2">-'.number_format($details['price_pro'],0,',','.').'</span>';
                   } 
                
            $output.='<img width="70px" height="150px" class="productimg img-thumbnail" src="../images/'.$details['image'].'" />
            <div class="bu" style="margin-left:20px">
                <button title="xóa khỏi giỏ hàng" style="font-size: 10px;" class="btn btn-danger btn remove-from-cart" data-id="'. $id .'"><i class="fas fa-trash"></i></button> 
            </div>
            </div>
            <div class="detail">
            <h5 style="text-transform: uppercase;color: steelblue;">'. $details['name'] .'</h5>
            <span class="item-price"><span class="giaca">Giá:<span style="font-size: 20px; color: brown;">'.number_format($tien,0,',','.').' VNĐ</span><br>
            <span  class="quantity1">Số lượng: <span style="font-size: 20px; color: brown;">'. $details['quantity'] .'</span></span><br>';
            if($details['size']==""){
                $output.='<span>Size:<span style="font-size: 20px; color: brown;">Mặc Định</span></span></span>';
            }else{ 
            $output.='<span >Size:<span style="font-size: 20px; color: brown;">'.$details['size'].'</span></span><br><span>';
             } 

            
            $output.='</div>
            

          </li>';
      }
  }
  
        $output.='</ul>
      </div>
      <a href="../cli/checkout" class="checkout">ĐI ĐẾN GIỎ HÀNG→</a>

      
     
    </div>';
    echo $output;

    }

    public function shopping(){
     $output='';
      $total=0;                           
      $i=1;

      $output.='
                    <table class="timetable_sub">
                        <thead class="car">
                            <tr>
                                <th>STT</th>
                                <th>Hình</th>
                                <th>Số lượng</th>
                                <th>Tên sản phẩm</th>
                                <th style="text-transform: lowercase;">Giá</th>
                                <th>Tổng</th>
                                <th>Size</th>
                                <th>Action</th>
                            </tr>
                        </thead><tbody>';
      if(session::get('cart')){
         foreach(session::get('cart') as $id => $details){
                    $si=$details['size'];
                    $km=$details['price']-$details['price_pro'];


                    if($si=="Lớn")
                    {
                        $sub1=($km+($km*20)/100);
                        $sub=($km+(($km*20)/100))*$details['quantity'];
                    }elseif($si=="Nhỏ"){
                        $sub1=($km-($km*20)/100);
                         $sub=($km-(($km*20)/100))*$details['quantity'];
                    }else{
                        $sub1=$km;
                        $sub=$km*$details['quantity'];
                    }
               $tien=$sub;               
               $totalitem = $tien;
               $total+=$totalitem;
        $output.='                 
        <tr class="rem1">
        <td class="invert">'.$i++.'</td>
        <td class="invert-image">
        <a href="../detail/'.$details['pro_id'].'">
        <img src="../images/'.$details['image'].'" alt=" " class="img-responsive">
        </a>
        </td>
          <td data-th="Quantity">
                                    
        <div class="quantity-select">
           <input type="number" min="1" class="quantity" data-id="'. $id .'" value="'.$details['quantity'].'">
           <!-- <input type="number" id="tien" value="'.$details['quantity'].'"> -->

        </div>
                                    
        </td>

        <td class="invert" style="text-transform: uppercase">'. $details['name'] .'</td>
        <td class="invert">'.number_format($sub1,0,',','.').'VND</td>
        <td class="invert">'.number_format($totalitem,0,',','.') .' VNĐ</td>
        <td class="invert">'.$details['size'].'</td>
                                
        <td class="actions" data-th="">
        <button class="btn btn-primary btn update-cart" data-id="'. $id .'"><i class="fas fa-sync-alt"></i></button>
                                
        <button class="btn btn-danger btn remove-from-cart" data-id="'. $id .'"><i class="fas fa-trash"></i></button>
        </td>
        </tr>';
            }
        }
        $output.='</tbody></table>
                </div>   
            </div>
        </div>
    </div>

    <div class="tongtien">
        <p><span class="bold">Tổng tiền:</span><span class="tongt">&nbsp;'.number_format($total,0,'.','.').' VNĐ</span></p>';
        
           if((Auth::guard('khachhang')->check()) && Session('cart')!=NULL){ 
            $output.='<a href="../cli/index" class="continute">Tiếp tục mua hàng</a>
            <a href="../cli_check/payment"  class="process">Tiến hành thanh toán</a>';
            }elseif(!Auth::guard('khachhang')->check()){  
                $output.='<a href="../cli/index" class="continute">Tiếp tục mua hàng</a>
                <a href="../cli_check/payment" data-toggle="modal" class="process" data-target="#exampleModal">Tiến hành thanh toán</a>';
            
            } else {
            $output.='<a href="../cli/index" class="continute">Tiếp tục mua hàng</a>';
            
            
           
            } 
        
        
        
    $output.='</div>';
        echo $output;
    }
    public function index(Request $request){
        $cate_post1=CatePost::where('cate_post_status',1)->get();
        $url_canonical = $request->url();
        $slide=slider::orderBy('slider_id','desc')->where('slider_status',0)->get();  
        $size=attribute::where('name','size')->get();
        $color=attribute::where('name','color')->get();
        $hot=attribute::where('name','hot')->get();
        $cate=category::where('category_status',1)->get();
        $chinh=chinhsach::limit(3)->get();
        $quangcao=quangcao::where('quangcao_status',0)->orderBy('quangcao_id','desc')->get();
        $bestsell=product::orderBy('product_sold','DESC')->paginate(3);
        $sp=Product::where('product_status',1)->orderBy('product_sold','DESC')->limit(6)->get();
        $toping=product::where('category_id',10)->where('product_status',1)->get();
        $com='index';
        $product=Product::where('product_status',1)->orderBy('product_id','DESC')->paginate(6);
        $meta_title="trang chủ";
        $meta_desc="trang chủ";
        $post=Post::orderBy('post_id','desc')->where('post_status',0)->get();
        return view('client/index',compact('product','com','cate','url_canonical','size','color','hot','slide','bestsell','meta_title','meta_desc','cate_post1','post','quangcao','sp','toping','chinh'));

    }
    public function profile(Request $request){
        $com='';
        $cate=category::orderby('category_id','desc')->get();
        $cate_post1=CatePost::where('cate_post_status',1)->get();
        $cus_id=Auth::guard('khachhang')->user()->customer_id;
        $cus=custommer::where('customer_id',$cus_id)->get();
        $chinh=chinhsach::limit(3)->get();
            //seo 
            $meta_desc ="Thông tin khách hàng"; 
            $meta_title ="thông tin khách hàng";
            $url_canonical = $request->url();
        return view('client.profile',compact('meta_title','meta_desc','url_canonical','com','cate','cate_post1','chinh','cus'));
    }
    public function update_pro(Request $req,$id){
        $this->validate($req, [
            'name'=>'required',
            'email'=>'required|email',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            
        ],[
            'name.required'=>'Ban chưa nhập tên',
            'email.required'=>'Ban chưa nhập email',
            'email.email'=>'Email chưa đúng định dạng',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'phone.regex'=>'Số Điện thoại chưa đúng định dạng',
            
        ]);
        
        
        
        $cus=custommer::Find($id);
        $cus->customer_name=$req->name;
        $cus->customer_email=$req->email;
        $cus->customer_phone=$req->phone;
        $email=$cus->customer_email;
        // // $cus->save();
        // // $data=$req->all();
        $cus->update(['customer_name'=>$req->name,'customer_email'=>$req->email,'customer_phone'=>$req->phone]);
        return redirect()->back()->with('message','Cập nhật thông tin thành công');
    }
    public function chinhsach(Request $request,$id){
        $com='';
        $chinh1=chinhsach::FindOrFail($id);
        $cate=category::orderby('category_id','desc')->where('category_status',1)->get();
        $cate_post1=CatePost::where('cate_post_status',1)->get();
        $chinh=chinhsach::limit(3)->get();
            //seo 
            $meta_desc =""; 
            $meta_title = $chinh1->title;
            $url_canonical = $request->url();
            $share_image = url('public/uploads/chinhsach/'.$chinh1->image);
            //--seo
        
        return view('client.chinhsach',compact('meta_title','meta_desc','url_canonical','com','cate','cate_post1','chinh1','chinh'));
    }
    public function gioithieu(Request $request){
        $com='';
        $gioithieu=intro::all();
        $cate=category::orderby('category_id','desc')->where('category_status',1)->get();
        $cate_post1=CatePost::where('cate_post_status',1)->get();
        $meta_title="giới thiệu";
        $meta_desc="về chúng tôi";
        $chinh=chinhsach::limit(3)->get();
        $url_canonical=$request->url();
        return view('client.gioithieu',compact('meta_title','meta_desc','url_canonical','com','cate','cate_post1','gioithieu','chinh'));
    }
    public function detail(Request $request,$id){
        $size=product_attr::with('attribute')->where('product_id',$id)->get();
        $hot=attribute::where('name','hot')->get();
        $cate_post1=CatePost::where('cate_post_status',1)->get();
        $img_detail=pro_img::where('product_id',$id)->limit(2)->get();
        $cate=category::orderby('category_id','desc')->where('category_status',1)->get();
        $com='detail';
        $rating=rating::where('product_id','=',$id)->avg('rating');
        $rating=round($rating);
        $chinh=chinhsach::limit(3)->get();
        $detail=Product::with('category')->where('product_id',$id)->where('product_status',1)->get();
        if(count($detail)==0){
           return redirect()->route('cli_index'); 
       }else{
        if($detail){
            foreach($detail as $key=>$value){
            $category_id=$value->category_id;
            $product_id=$value->product_id;
            $product_cate = $value->category->category_name;
            $cate_id=$value->category_id;
             $meta_desc = $value->product_desc;
             $meta_title = $value->product_name;
             $url_canonical = $request->url();
             $share_images = url('images/'.$value->product_image);
             

        }
        $related_product=Product::with('category')->whereNotIn('product_id',[$product_id])->where('category_id',$category_id)->where('product_status',1)->get();
        return view('client/detail',compact('detail','com','cate','img_detail','url_canonical','rating','size','hot','meta_desc'
        ,'meta_title','url_canonical','cate_post1','related_product','cate_id','product_cate','chinh','share_images'));
         }
         }
    
        
    }
   
    public function search(Request $request){
        $size=attribute::where('name','size')->get();
        $hot=attribute::where('name','hot')->get();
        $url_canonical = $request->url();  
        $cate=category::orderby('category_id','desc')->where('category_status',1)->get();
        $key=$request->keyword;
        $chinh=chinhsach::limit(3)->get();
        $bestsell=product::orderBy('product_sold','DESC')->limit(3)->get();
        $cate_post1=CatePost::where('cate_post_status',1)->get();
        $com='';
        $search=product::where('product_name','like','%'.$key.'%')->where('product_status',1)->get();
        foreach($search as $s){
        $meta_desc = $s->product_desc;
        $meta_title = $s->product_name;
        
        }
        $dem=count($search);
        if(count($search)>0){
            Session::flash('yes','');

        }else{
            Session::flash('error','không tìm thấy sản phẩm');
            $meta_title="không tìm thấy sản phẩm";
            $meta_desc="không tìm thấy";

        }
        return view('client/search',compact('search','com','dem','cate','url_canonical','meta_title','meta_desc','cate_post1','size','hot','bestsell','chinh'));
    }
    public function dangxuatkh(){
        Auth::guard('khachhang')->logout();
        return redirect()->route('cli_index')->with('message','ĐĂNG XUẤT THÀNH CÔNG');
    }
    public function thankyou(Request $request ){
        $meta_desc = "Cảm ơn";
        // $meta_keywords = $value->product_slug;
        $meta_title = "Cảm ơn";
        $cate_post1=CatePost::where('cate_post_status',1)->get();
        $url_canonical = $request->url();
        $share_images = url('images/'.$request->product_image);
        $chinh=chinhsach::limit(3)->get();
        $cate=category::orderby('category_id','desc')->where('category_status',1)->get();
        $com='';
        return view('Client/thankyou',compact('cate','com','url_canonical','meta_desc','meta_title','share_images','cate_post1','chinh'));
    } 
    public function autocomplete_ajax(Request $request){
        $data = $request->all();

        if($data['query']){

            $product = product::where('product_status',1)->where('product_name','LIKE','%'.$data['query'].'%')->get();

            $output = '
            <ul class="dropdown-menu tai2" style="display:block;">'
            ;

            foreach($product as $key => $val){
               $output .= '
               <li class="li_search_ajax"><a href="#">'.$val->product_name.'</a></li>
               ';
            }

            $output .= '</ul>';
            echo $output;
        }


    }
     public function insert_rating(Request $request){
        $data = $request->all();
        $rating = new rating();
        $rating->product_id = $data['product_id'];
        $rating->rating = $data['index'];
        $rating->save();
        $product=product::find($request->product_id);
        $product->pro_rating+=1;
        $product->pro_rating_number+=$data['index'];
        $product->save();
        echo 'done';
    }


    public function list_pro(Request $request,$id){
        $com='list';
        $meta_desc = $request->product_desc;
        
        $url_canonical = $request->url();
        $share_images = url('images/'.$request->product_image);
        $slide=slider::limit(4)->get();  
        $size=attribute::where('name','size')->get();
        $color=attribute::where('name','color')->get();
        $hot=attribute::where('name','hot')->get();
        $url_canonical = $request->url(); 
        $chinh=chinhsach::limit(3)->get();
        $cate=category::where('category_status',1)->get();
        $cate_post1=CatePost::where('cate_post_status',1)->get();
        $bestsell=product::orderBy('product_sold','DESC')->limit(3)->get();
        $sp=product::where('category_id',$id)->get();

        $min_price = Product::min('product_price');
        $max_price = Product::max('product_price');


        $min_price_range = $min_price + 1000;
        $max_price_range = $max_price + 10000;
        foreach($sp as $s){
            $price=$s->product_price;
            $km=$s->product_km;
            $tong=$price-$km;
        }
        if(isset($_GET['sort_by'])){
            $sortby=$_GET['sort_by'];
            if($sortby=='cunhat'){
                $product_list=product::where('category_id',$id)->orderBy('product_id',"ASC")->where('product_status',1)->paginate(6)->appends(request()->query());
            }elseif($sortby=="moinhat"){
                $product_list=product::where('category_id',$id)->orderBy('product_id',"DESC")->where('product_status',1)->paginate(6)->appends(request()->query());
            }elseif($sortby=="giamdan"){
                // $pro=Product::where('category',$id)->get();

                $product_list=product::where('category_id',$id)->orderBy('product_price',"DESC")->where('product_status',1)->paginate(6)->appends(request()->query());
            }elseif($sortby=="tangdan"){
                $product_list=product::where('category_id',$id)->orderBy('product_price',"ASC")->where('product_status',1)->paginate(6)->appends(request()->query());
            }
        }

        elseif(isset($_GET['start_price']) && $_GET['end_price']){
            $min_price=$_GET['start_price'];
            $max_price=$_GET['end_price'];
            $product_list=product::where('category_id',$id)->whereBetween('product_price',[$min_price,$max_price])->where('product_status',1)->orderBy('product_price',"ASC")->paginate(6);
        }else{
            $product_list=product::where('category_id',$id)->orderBy('product_id',"DESC")->where('product_status',1)->paginate(6);
        }
    
      

        $cate1=category::where('category_id',$id)->take(1)->get();
        foreach($cate1 as $key => $cate2){
            //seo 
            $meta_desc = $cate2->category_desc; 
            // $meta_keywords = $cate2->cate_post_slug;
            $meta_title=$cate2->category_name;
            // $cate_id = $cate2->cate_post_id;
            $url_canonical = $request->url();
            // $share_image = url('public/frontend/images/share_news.png');
        
        
    }


      

        return view('client.list_pro',compact('product_list','cate','cate_post1','url_canonical','com','size','color','hot','slide','share_images','meta_title','meta_desc','bestsell','chinh','min_price_range','max_price_range','min_price','max_price'));
    }





    public function reply_comment(Request $request){
        $data = $request->all();
        $comment = new binhluan();
        $comment->comment = $data['comment'];
        $comment->comment_product_id = $data['comment_product_id'];
        $comment->comment_parent_comment = $data['comment_id'];
        $comment->comment_status = 0;
        $comment->comment_name = 'TeaMilkStore';
        $comment->save();
    }
   
    public function allow_comment(Request $request){
        $data = $request->all();
        $comment = binhluan::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save();
    }

    public function list_comment(){
        $comment = binhluan::with('product')->where('comment_parent_comment','=',0)->orderBy('comment_id','DESC')->paginate(10);
        $comment_rep = binhluan::with('product')->where('comment_parent_comment','>',0)->get();
        return view('manager.comment.index')->with(compact('comment','comment_rep'));
    }

    public function send_comment(Request $request){
        if(!Auth::guard('khachhang')->check()){
            echo "No";
        }else{
        $product_id = $request->product_id;
        $comment_name = $request->comment_name;
        $comment_content = $request->comment_content;
        $comment = new binhluan();
        $comment->comment = $comment_content;
        $comment->comment_name = $comment_name;
        $comment->comment_product_id = $product_id;
        $comment->comment_status = 1;
        $comment->comment_parent_comment = 0;
        $comment->save();
    }
            
        
   
    }
    public function load_comment(Request $request){
        $product_id = $request->product_id;
        $comment = binhluan::where('comment_product_id',$product_id)->where('comment_parent_comment','=',0)->where('comment_status',0)->orderby('comment_id','desc')->get();
        $comment_rep = binhluan::with('product')->where('comment_parent_comment','>',0)->get();
        $output = '';
        foreach($comment as $key => $comm){
            $output.= ' 
            <div class="row style_comment">

                                        <div class="col-md-2 comm d-flex justify-content-center align-items-center">
                                            <img src="'.url('web/images/avatar.png').'" class="img img-responsive img-thumbnail">
                                        </div>
                                        <div class="col-md-10">
                                            <p style="color:green;">@'.$comm->comment_name.'</p>
                                            <p style="color:#000;">thời gian: '.$comm->comment_date.'</p>
                                            <p>'.$comm->comment.'</p>
                                        </div>
                                    </div><p></p>
                                    ';

                                    foreach($comment_rep as $key => $rep_comment)  {
                                        if($rep_comment->comment_parent_comment==$comm->comment_id)  {
                                     $output.= ' <div class="row style_comment" style="margin:20px 94px;">

                                        <div class="col-md-2 repl d-flex justify-content-center align-items-center">
                                            <img  src="'.url('web/images/76729750.jpg').'" class="img img-responsive img-thumbnail">
                                        </div>
                                        <div class="col-md-10">
                                            <p style="color:blue;">@Admin</p>
                                            <p style="color:#000;">'.$rep_comment->comment.'</p>
                                            <p></p>
                                        </div>
                                    </div><p></p>';
                                        }
                                    }
        }
        echo $output;

    }

    

   
    

  
    
}
