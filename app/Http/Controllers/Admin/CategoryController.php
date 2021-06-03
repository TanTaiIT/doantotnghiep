<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Session;
class CategoryController extends Controller
{
	
    public function index(){
		
    	$cate=category::all();
    	return view('admin/loaisp/index',compact('cate'));
    }
    public function addcate(){
		
    	return view('admin/loaisp/add_category');
    }
    public function themcat(Request $req){
    	$cate=new category();
    	$cate->category_name=$req->ten;
    	$cate->category_desc=$req->mota;
    	$cate->category_status=$req->status;
    	if($cate->save()){
    		Session::flash('message','thêm loại sản phẩm thành công');
    	}else{
    		Session::flash('message','thêm loại sản phẩm thất bại');
    	}
    	return redirect()->route('cate_index');
    }
    public function edit($id){
		
    	$cate_edit=category::FindOrFail($id);
    	return view('admin/loaisp/category_edit',compact('cate_edit'));
    }
    public function update(Request $req,$id){
    	$cat=category::FindOrFail($id);
    	$cat['category_name']=$req->ten;
    	$cat['category_desc']=$req->mota;
    	$cat['category_status']=$req->status;
    	if($cat->save()){
    		Session::flash("message","cập nhật loại sản phẩm thành công");
    	}else{
    		Session::flash("message","cập nhật loại sản phẩm thất bại");
    	}
    	return redirect()->route('cate_index');
    }
    public function delete($id){
    	$cate=category::FindOrFail($id);
    	if($cate->delete()){
    		Session::flash("message","Xóa sản phẩm thành công");
    	}
    	else{
    		Session::flash("message","Xóa sản phẩm thất bại");
    	}
    	return redirect()->route('cate_index');
    }
}
