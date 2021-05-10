<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Session;
class ProductController extends Controller
{
    public function index(){
    	$pro=product::all();
    	return view('admin/product/index',compact('pro'));
    }
   public function imageUpload(Request $request)
    {
        if($request->hasFile('hinh')){
            if($request->file('hinh')->isValid()){
                $request->validate([
                    'hinh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->hinh->extension();
                $request->hinh->move(public_path('images'), $imageName);
                return $imageName;
            }
        }
        return "";
    } 
    public function addpro(){
    	return view('admin/product/add_product');
    }
    public function themsp(Request $req){
    	$product=new Product();
    	$product->product_name=$req->ten;
    	$product->category_id=$req->loai;
    	$product->brand_id=$req->thuonghieu;
    	$product->product_desc=$req->mota;
    	$product->product_price=$req->gia;
    	$product->product_status=$req->status;
    	$product->product_image=$this->imageUpload($req);
    	if($product->save()){
    		Session::flash('message','thêm sản phẩm thành công');
    	}else{
    		Session::flash('message','thêm sản phẩm thất bại');
    	}
    	return redirect()->route('pro_index');
    }
    public function edit($id){
    	$pro_edit=product::FindOrFail($id);
    	return view('admin/product/product_edit',compact('pro_edit'));
    }
    public function update(Request $req,$id){
    	$pro=product::FindOrFail($id);
    	$pro['product_name']=$req->ten;
    	$pro['category_id']=$req->loai;
    	$pro['brand_id']=$req->thuonghieu;
    	$pro['product_desc']=$req->mota;
    	$pro['product_price']=$req->gia;
    	$pro['product_status']=$req->status;
    	$pro['product_image']=$this->imageUpload($req);
    	if($pro->save()){
    		Session::flash("message","cập nhật sản phẩm thành công");
    	}else{
    		Session::flash("message","cập nhật sản phẩm thất bại");
    	}
    	return redirect()->route('pro_index');
    }
    public function delete($id){
    	$pro=product::FindOrFail($id);
    	if($pro->delete()){
    		Session::flash("message","Xóa sản phẩm thành công");
    	}
    	else{
    		Session::flash("message","Xóa sản phẩm thất bại");
    	}
    	return redirect()->route('pro_index');
    }
    // public function delete_all(){
    // 	$pro=product::all();
    // 	if($pro->delete()){
    // 		Session::flash('message','bạn đã xóa tất cả dữ liệu');
    // 	}else{
    // 		Session::flash('message','xóa thất bại');
    // 	}
    // 	return redirect()->route('pro_index');

    // }

}
