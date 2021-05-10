<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
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
}
