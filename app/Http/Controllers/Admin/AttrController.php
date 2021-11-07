<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\attribute;
use App\Models\product_attr;
class AttrController extends Controller
{
    // public function add_attr(){
    //     $att=attribute::all();
    // 	return view('admin.thuoctinh.add_attr',compact('att'));
    // }
     public function add_attr(){
        $att=attribute::all();
        return view('manager.thuoctinh.index',compact('att'));
    }
    public function store_attr(Request $req){
    	attribute::create($req->all());
        return redirect()->route('add_attr')->with('message','Đã thêm thuộc tính mới');
    }

    public function del_attr($id){
        $att=attribute::Find($id);
        $pro_att=product_attr::where('attr_id',$id)->get();
        $dem=count($pro_att);
        if($dem==0){
            $att->delete();
            return redirect()->back()->with('message','xóa thuộc tính thành công');
        }else{
            return redirect()->back()->with('message','không thể xóa thuộc tính này');
        }
        
        
    }
    
}
