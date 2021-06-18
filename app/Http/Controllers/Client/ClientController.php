<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Session;
use App\Models\category;
use App\Models\brand;
use App\Models\pro_img;
use App\Models\rating;
use App\Models\attribute;
use App\Models\slider;
use App\Models\CatePost;
use App\Models\binhluan;
use App\Models\Post;
use App\Models\quangcao;
use DB;
class ClientController extends Controller
{
    public function error_page(){
        return view('errors.404');
    }
   
    public function index(Request $request){
        $cate_post1=CatePost::all();
        $url_canonical = $request->url();
        $slide=slider::limit(4)->get();  
        $size=attribute::where('name','size')->get();
        $color=attribute::where('name','color')->get();
        $hot=attribute::where('name','hot')->get();
        $cate=category::all();
        $brand=brand::all();
        $quangcao=quangcao::orderBy('quangcao_id','desc')->get();
        $bestsell=product::orderBy('product_sold','DESC')->paginate(3);
    	$com='index';

        $product=product::where([
            'product_status'=>1
        ]);
        $meta_title="trang chủ";
        $meta_desc="trang chủ";

       
        // $share_images = url('images/'.$product->product_image);
        foreach($product as $p){
            $pro_id=$p->product_id;
            
        }
        // $avg=$rating->pro_rating_number/$rating->pro_rating;
        // $sao=DB::table('tbl_product')->join('tbl_rating','tbl_product.product_id','=','tbl_rating.product_id')->avg('rating');

        // $rating=round($sao);

        if($request->price){
            $price=$request->price;
            switch ($price) {
                case '1':
                    $product->where('product_price','<',1000);  
                    break;
                case '2':
                    $product->whereBetween('product_price',[1000,5000]);
                    break;
                case '3':
                    $product->whereBetween('product_price',[5000,10000]);
                    break; 
                case '4':
                    $product->whereBetween('product_price',[10000,20000]);
                    break;
                
            }
        }
        if($request->orderby){
            $orderby=$request->orderby;
            switch ($orderby) {
                case 'desc':
                    $product->orderby('product_id','DESC'); 
                    break;
                case 'asc':
                    $product->orderby('product_id','ASC'); 
                    break;
                case 'primax':
                    $product->orderby('product_price','DESC'); 
                    break;
                case 'primin':
                    $product->orderby('product_price','ASC'); 
                    break;    
            }
        }
        if($request->keyword){
            $key=$request->keyword;
            $product=product::where('product_name','like','%'.$key.'%');
        }

        $post=Post::orderBy('post_id','desc')->get();
        $product=$product->orderBy('product_id','DESC')->paginate(6);
    	return view('client/index',compact('product','com','cate','brand','url_canonical','size','color','hot','slide','bestsell','meta_title','meta_desc','cate_post1','post','quangcao'));

    }
 
    public function detail(Request $request,$id){
        $size=attribute::where('name','size')->get();
        $hot=attribute::where('name','hot')->get();
        // $url_canonical = $request->url();
        $cate_post1=CatePost::orderBy('cate_post_id','DESC')->get();
        $img_detail=pro_img::where('product_id',$id)->get();
        $cate=category::all();
        $brand=brand::all();
    	$com='detail';
        $rating=rating::where('product_id','=',$id)->avg('rating');
        $rating=round($rating);
        //  $detail = DB::table('tbl_product')
        // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        // ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        // ->where('tbl_product.product_id',$id)->get();
        $detail=product::FindOrFail($id);
        $detail->product_view=$detail->product_view + 1;
        $detail->save();
        $cate_id=$detail->category_id;
        $meta_desc =$detail->product_desc;
        // $meta_keywords = $value->product_slug;
         $meta_title = $detail->product_name;
         $url_canonical = $request->url();
         $share_images=url('images/'.$detail->product_name);
       
    	return view('client/detail',compact('detail','com','cate','brand','img_detail','url_canonical','rating','size','hot','meta_desc'
        ,'meta_title','url_canonical','share_images','cate_post1'));
    }
   
    public function search(Request $request){
        $size=attribute::where('name','size')->get();
        $hot=attribute::where('name','hot')->get();
        $url_canonical = $request->url();  
        $brand=brand::all();
        $cate=category::all();
        $key=$request->keyword;
        $bestsell=product::orderBy('product_sold','DESC')->limit(3)->get();
        $cate_post1=CatePost::orderBy('cate_post_id','desc')->get();
        $com='';
        $search=product::where('product_name','like','%'.$key.'%')->get();
        foreach($search as $s){
        $meta_desc = $s->product_desc;
        // $meta_keywords = $value->product_slug;
        $meta_title = $s->product_name;
        $share_images = url('images/'.$s->product_image);
        }


        
        $dem=count($search);
        if(count($search)>0){
            Session::flash('message','thành công');
        }else{
            Session::flash('message','thất bại');
        }
        return view('client/search',compact('search','com','dem','cate','brand','url_canonical','meta_title','meta_desc','share_images','cate_post1','size','hot','bestsell'));
    }
    public function dangxuatkh(){
        Session::forget('customer_id');
        return redirect()->route('cli_index');
    }
    public function thankyou(Request $request ){
        $meta_desc = "Cảm ơn";
        // $meta_keywords = $value->product_slug;
        $meta_title = "Cảm ơn";
        $cate_post1=CatePost::orderBy('cate_post_id','DESC')->get();
        $url_canonical = $request->url();
        $share_images = url('images/'.$request->product_image);
        $cate=category::all();
        $brand=brand::all();
        $com='';
        return view('Client/thankyou',compact('cate','brand','com','url_canonical','meta_desc','meta_title','share_images','cate_post1'));
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
        $com='';
        // $meta_keywords = $value->product_slug;
        $meta_desc = $request->product_desc;
        $meta_title = "danh sách sản phẩm";
        $url_canonical = $request->url();
        $share_images = url('images/'.$request->product_image);
        $slide=slider::limit(4)->get();  
        $size=attribute::where('name','size')->get();
        $color=attribute::where('name','color')->get();
        $hot=attribute::where('name','hot')->get();
        $url_canonical = $request->url(); 
        $cate=category::all();
        $cate_post1=CatePost::orderBy('cate_post_id','DESC')->get();
        $brand=brand::all();
        $bestsell=product::orderBy('product_sold','DESC')->limit(3)->get();

       
        

         $product=product::where('category_id',$id)->paginate(9);
        if($request->price){
            $price=$request->price;
            switch ($price) {
                case '1':
                    $product_list=product::where('product_price','<',15000)->where('category_id',$id)->paginate(6)->appends(request()->query());  
                   
                    break;
                case '2':
                    $product_list=product::whereBetween('product_price',[10000,15000])->where('category_id',$id)->paginate(6)->appends(request()->query());
                    break;
                case '3':
                    $product_list=product::whereBetween('product_price',[15000,20000])->where('category_id',$id)->paginate(6)->appends(request()->query());
                    break; 
                case '4':
                    $product_list=product::whereBetween('product_price',[20000,30000])->where('category_id',$id)->paginate(6)->appends(request()->query());
                    break;
                
            }
        }else{
            $product_list=product::where('category_id',$id)->get();
        }



        if($request->orderby){
            $orderby=$request->orderby;
            switch ($orderby) {
                case 'desc':
                    $product_list=product::where('category_id',$id)->orderBy('product_id','DESC')->paginate(6)->appends(request()->query()); 
                    break;
                case 'asc':
                    $product_list=product::where('category_id',$id)->orderBy('product_id','ASC')->paginate(6)->appends(request()->query()); 
                    break;
                case 'primax':
                   $product_list=product::where('category_id',$id)->orderBy('product_price','DESC')->paginate(6)->appends(request()->query()); 
                    break;
                case 'primin':
                   $product_list=product::where('category_id',$id)->orderBy('product_price','ASC')->paginate(6)->appends(request()->query()); 
                    break;    
            }
        }

        if($request->keyword){
            $key=$request->keyword;
            $product_list=product::where('product_name','like','%'.$key.'%')->where('category_id',$id)->get();
        }


      

        return view('client.list_pro',compact('product_list','brand','cate','cate_post1','url_canonical','com','size','color','hot','slide','share_images','meta_title','meta_desc','bestsell'));
    }





    public function reply_comment(Request $request){
        $data = $request->all();
        $comment = new binhluan();
        $comment->comment = $data['comment'];
        $comment->comment_product_id = $data['comment_product_id'];
        $comment->comment_parent_comment = $data['comment_id'];
        $comment->comment_status = 0;
        $comment->comment_name = 'HiếuStore';
        $comment->save();

    }
    public function allow_comment(Request $request){
        $data = $request->all();
        $comment = binhluan::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save();
    }



    public function list_comment(){
        $comment = binhluan::with('product')->where('comment_parent_comment','=',0)->orderBy('comment_id','DESC')->get();
        $comment_rep = binhluan::with('product')->where('comment_parent_comment','>',0)->get();
        return view('admin.binhluan.list_comment')->with(compact('comment','comment_rep'));
    }
    public function send_comment(Request $request){
        $product_id = $request->product_id;
        $comment_name = $request->comment_name;
        $comment_content = $request->comment;
        $comment = new binhluan();
        $comment->comment = $comment_content;
        $comment->comment_name = $comment_name;
        $comment->comment_product_id = $product_id;
        $comment->comment_status = 1;
        $comment->comment_parent_comment = 0;
        $comment->save();
    }
    public function load_comment(Request $request){
        $product_id = $request->product_id;
        $comment = binhluan::where('comment_product_id',$product_id)->where('comment_parent_comment','=',0)->where('comment_status',0)->get();
        $comment_rep = binhluan::with('product')->where('comment_parent_comment','>',0)->get();
        $output = '';
        foreach($comment as $key => $comm){
            $output.= ' 
            <div class="row style_comment">

                                        <div class="col-md-2">
                                            <img width="50%"style="margin-top:10px" src="'.url('web/images/avatar.png').'" class="img img-responsive img-thumbnail">
                                        </div>
                                        <div class="col-md-10 back">
                                            <p style="color:green;">@'.$comm->comment_name.'</p>
                                            <p style="color:#000;">'.$comm->comment_date.'</p>
                                            <p>'.$comm->comment.'</p>
                                        </div>
                                    </div><p></p>
                                    ';

                                    foreach($comment_rep as $key => $rep_comment)  {
                                        if($rep_comment->comment_parent_comment==$comm->comment_id)  {
                                     $output.= ' <div class="row style_comment" >

                                        <div class="col-md-2 phai">
                                            <img width="50%" src="'.url('web/images/76729750.jpg').'" class="img img-responsive ">
                                        </div>
                                        <div class="col-md-8 rep">
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
