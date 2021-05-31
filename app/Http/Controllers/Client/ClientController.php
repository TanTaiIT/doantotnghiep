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
use DB;
class ClientController extends Controller
{
    public function index(Request $request){
        $url_canonical = $request->url();  
        $size=attribute::where('name','size')->get();
        $color=attribute::where('name','color')->get();
        $hot=attribute::where('name','hot')->get();
        $cate=category::all();
        $brand=brand::all();
    	$com='index';
        $product=product::where([
            'product_status'=>1
        ]);
        foreach($product as $p){
            $pro_id=$p->product_id;
            
        }
        // $rating=DB::table('tbl_product')->join('tbl_rating','tbl_product.product_id','=','tbl_rating.product_id')->avg('rating');
        // $rating=round($rating);

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
        // if($request->review){
        //     $re=$request->review;
        //     switch($re){
        //         case '1':
        //         $product->rating(avg('rating'),'=','1.0');
        //         break;
        //     }
        // }
        $product=$product->orderBy('product_id','DESC')->paginate(6);
    	return view('client/index',compact('product','com','cate','brand','url_canonical','size','color','hot'));

    }
 
    public function detail(Request $request,$id){
        $color=attribute::where('name','color')->get();
        $size=attribute::where('name','size')->get();
        $hot=attribute::where('name','hot')->get();
        $url_canonical = $request->url();
    	$detail=product::FindOrFail($id);
        $pro_id=$detail->product_id;
        $img_detail=pro_img::where('product_id',$id)->get();
        $cate=category::all();
        $brand=brand::all();
    	$com='detail';
        $rating=rating::where('product_id','=',$pro_id)->avg('rating');
        $rating=round($rating);
    	return view('client/detail',compact('detail','com','cate','brand','img_detail','url_canonical','rating','color','size','hot'));
    }
    public function search(Request $request){
        $url_canonical = $request->url();  

        // $detail=product::FindOrFail($id);
        $brand=brand::all();
        $cate=category::all();
        $key=$request->keyword;
        $com='detail';
        $search=product::where('product_name','like','%'.$key.'%')->get();
        $dem=count($search);
        if(count($search)>0){
            Session::flash('message','thành công');
        }else{
            Session::flash('message','thất bại');
        }
        return view('client/search',compact('search','com','dem','cate','brand','url_canonical'));
    }
    public function dangxuatkh(){
        Session::forget('customer_id');
        return redirect()->route('cli_index');
    }
    public function thankyou(Request $request ){
        $url_canonical = $request->url();  
        $cate=category::all();
        $brand=brand::all();
        $com='detail';
        return view('Client/thankyou',compact('cate','brand','com','url_canonical'));
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
        echo 'done';
    }
    public function list_pro(Request $request,$id){
        $com='detail';
        $url_canonical = $request->url(); 
        $cate=category::all();
        $brand=brand::all();
        $product_list=product::where('category_id',$id)->get();
        return view('client.list_pro',compact('product_list','brand','cate','url_canonical','com'));
    }
    
}
