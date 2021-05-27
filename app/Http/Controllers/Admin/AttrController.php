<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttrController extends Controller
{
    public function add_attr(){
    	return view('admin.thuoctinh.add_attr');
    }
    public function store_attr(Request $req){
    	dd($req->all());
    }
}
