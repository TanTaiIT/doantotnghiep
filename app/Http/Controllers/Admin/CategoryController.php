<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Imports\Imports;
use App\Exports\Export;
use App\Models\product;
use Excel;
use Session;
use DB;
class CategoryController extends Controller
{
    public function trangchu(){
        return view("admin.trangchu");
    }
	public function del_view(){
        $cate=category::where('category_status',0)->orderby('category_id','desc')->paginate(10);
        return view('manager.cate_product.cate_del_view',compact('cate'));
    }
    public function category_recover($category_id){
        $with_pro=DB::table('tbl_category_product')->join('tbl_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_category_product.category_id','=',$category_id)->update(['tbl_product.product_status'=>1]);
        $cate=category::where('category_id',$category_id)->update(['category_status'=>1]);
        return redirect()->back()->with('message','phục hồi thành công');
    }
    public function index(){
        
        $cate=category::where('category_status',1)->paginate(10);
        return view('manager/cate_product/index',compact('cate'));
    }
    // public function addcate(){
		
    // 	return view('admin/loaisp/add_category');
    // }
     public function addcate(){
        
        return view('manager/cate_product/add_category');
    }
    public function themcat(Request $req){
        $this->validate($req, [
            'ten'=>'required',
            'mota'=>'required',
        ],[
            'ten.required'=>'+Ban chưa nhập tên ',
            'mota.required'=>'+Ban chưa nhập mô tả ',
            
        ]);
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
    // public function edit($id){
		
    // 	$cate_edit=category::FindOrFail($id);
    // 	return view('admin/loaisp/category_edit',compact('cate_edit'));
    // }
    public function edit($id){
        
        $cate_edit=category::FindOrFail($id);
        return view('manager/cate_product/edit_category',compact('cate_edit'));
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
        $with_pro=DB::table('tbl_category_product')->join('tbl_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_category_product.category_id','=',$id)->update(['tbl_product.product_status'=>0]);
        $cate->update(['category_status'=>0]);
        // $with_pro->update(['product_status'=>0]);
        return redirect()->back()->with('message','xóa danh mục thành công');
        // $pro=Product::where('category_id',$id)->get();
        // $dem=count($pro);
        // if($dem == 0){
        //     if($cate->delete()){
        //     Session::flash("message","Xóa loại sản phẩm thành công");
        // }
        // else{
        //     Session::flash("message","Xóa loại sản phẩm thất bại");
        // }
        // return redirect()->route('cate_index');
    // }else{
    //     return redirect()->route('cate_index')->with('message','không thể xóa loại sản phẩm này');
    // }
    	
    }

    public function export_csv(){
    return Excel::download(new Export , 'category.xlsx');
    }
    public function import_csv() 
    {
        Excel::import(new Imports,request()->file('file')); 
        return back();
    }
    
}



