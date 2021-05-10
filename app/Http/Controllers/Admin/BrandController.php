<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\brand;
use Session;
class BrandController extends Controller
{
    public function index(){
    	$brand=brand::all();
    	return view('admin/thuonghieu/index',compact('brand'));
    }
    public function addbrand(){
    	return view('admin/thuonghieu/add_brand');
    }
    public function thembrand(Request $req){
    	$brand=new brand();
    	$brand->brand_name=$req->ten;
    	$brand->brand_desc=$req->mota;
    	$brand->brand_status=$req->status;
    	if($brand->save()){
    		Session::flash('message','thêm thương hiệu thành công');
    	}else{
    		Session::flash('message','thêm thương hiệu thất bại');
    	}
    	return redirect()->route('brand_index');
    }
     public function edit($id){
    	$brand_edit=brand::FindOrFail($id);
    	return view('admin/thuonghieu/brand_edit',compact('brand_edit'));
    }
    public function update(Request $req,$id){
    	$brand=brand::FindOrFail($id);
    	$brand['brand_name']=$req->ten;
    	$brand['brand_desc']=$req->mota;
    	$brand['brand_status']=$req->status;
    	if($brand->save()){
    		Session::flash("message","cập nhật thương hiệu thành công");
    	}else{
    		Session::flash("message","cập nhật thương hiệu thất bại");
    	}
    	return redirect()->route('brand_index');
    }
    public function delete($id){
    	$brand=brand::FindOrFail($id);
    	if($brand->delete()){
    		Session::flash("message","Xóa thương hiệu thành công");
    	}
    	else{
    		Session::flash("message","Xóa thương hiệu thất bại");
    	}
    	return redirect()->route('brand_index');
    }
}
