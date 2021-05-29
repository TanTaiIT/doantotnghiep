<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\attribute;
class AttrController extends Controller
{
    public function add_attr(){
    	return view('admin.thuoctinh.add_attr');
    }
    public function store_attr(Request $req){
    	attribute::create($req->all());
        return redirect()->route('add_attr')->with('message','Đã thêm thuộc tính mới');
    }
}
