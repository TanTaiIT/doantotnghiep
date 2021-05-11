<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Session;
class ClientController extends Controller
{
    public function index(){
    	$product=product::limit(6)->get();
    	$com='index';
    	return view('client/index',compact('product','com'));

    }
    public function detail($id){
    	$detail=product::FindOrFail($id);
    	$com='detail';
    	return view('client/detail',compact('detail','com'));
    }
    public function search(Request $req){
        $key=$req->keyword;
        $com='detail';
        $search=product::where('product_name','like','%'.$key.'%')->get();
        $dem=count($search);
        if(count($search)>0){
            Session::flash('message','thành công');
        }else{
            Session::flash('message','thất bại');
        }
        return view('client/search',compact('search','com','dem'));
    }

}
