<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Session;
use App\Models\category;
use App\Models\brand;
class ClientController extends Controller
{
    public function index(){
    	$product=product::where('product_status',1)->limit(6)->get();
        $cate=category::all();
        $brand=brand::all();
    	$com='index';
    	return view('client/index',compact('product','com','cate','brand'));

    }
    public function detail($id){
    	$detail=product::FindOrFail($id);
        $cate=category::all();
        $brand=brand::all();
    	$com='detail';
    	return view('client/detail',compact('detail','com','cate','brand'));
    }
    public function search(Request $req){
        // $detail=product::FindOrFail($id);
        $brand=brand::all();
        $cate=category::all();
        $key=$req->keyword;
        $com='detail';
        $search=product::where('product_name','like','%'.$key.'%')->get();
        $dem=count($search);
        if(count($search)>0){
            Session::flash('message','thành công');
        }else{
            Session::flash('message','thất bại');
        }
        return view('client/search',compact('search','com','dem','cate','brand'));
    }
    public function dangxuatkh(){
        Session::forget('customer_id');
        return redirect()->route('cli_index');
    }

}
