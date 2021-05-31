<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Session;
use App\Models\category;
use App\Models\brand;
use App\Models\pro_img;
use App\Models\product_attr;
use App\Models\attribute;
use Intervention\Image\Facades\Image;
use DB;
class ProductController extends Controller
{
    public function index(){
        $cate=category::all();
        $brand=brand::all();
    	$pro=product::all();
    	return view('admin/product/index',compact('pro','brand','cate'));
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
            $cate=category::all();
            $brand=brand::all();
            $attr=attribute::where('name','color')->get();
            $attr1=attribute::where('name','size')->get();
    	return view('admin/product/add_product',compact('cate','brand','attr','attr1'));
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
        foreach($req->attr_id as $value){
            product_attr::create([
                'product_id'=>$product->product_id,
                'attr_id'=>$value
            ]);
        }
    	return redirect()->route('pro_index');
    }
    public function edit($id){
        $cate=category::all();
        $brand=brand::all();
    	$pro_edit=product::FindOrFail($id);
    	return view('admin/product/product_edit',compact('pro_edit','cate','brand'));
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
    public function kichhoat($id){
        $p=product::where('product_id',$id)->update(['product_status'=>1]);
        return redirect()->route('pro_index');
    }
    public function huykichhoat($id){
        $p=product::where('product_id',$id)->update(['product_status'=>0]);
        return redirect()->route('pro_index');
    }
    public function add_img(Request $req,$id){
        $img=pro_img::where('product_id',$id)->get();
        $product_detail=product::Find($id);
        return view('admin.product.add_img',compact('product_detail','img'));
    }
    public function add_img1(Request $req,$id){
        $product_detail=product::Find($id);
        $data=$req->all();
        if($req->hasfile('image')){
            $files=$req->file('image');
            foreach($files as $file){
                 $image=new pro_img;
                 $extension=$file->getClientOriginalExtension();
                 $filename=rand(111,9999).'.'.$extension;  
                 $image_path='upload_img/'.$filename;
                 Image::make($file)->save($image_path);
                 $image->images=$filename;
                 $image->product_id=$data['product_id'];
                 $image->save();
            }

        }
        
        return redirect()->route('add_img',$id)->with('message','thêm hình ảnh thành công');
    }
    public function del_img(Request $req,$id){
        $gallary=pro_img::where('image_id',$id);
        if($gallary->delete()){
            return redirect()->back()->with('message','xóa thành công');
        }else{
            return redirect()->route('add_img')->with('message','xóa không thành công');
        }
    }

    public function quickview(Request $request){

        $product_id = $request->product_id;
        $product = Product::find($product_id);

        // $gallery = Gallery::where('product_id',$product_id)->get();

        // $output['product_gallery'] = '';
        
        // foreach($gallery as $key => $gal){
        //     $output['product_gallery'].= '<p><img width="100%" src="public/uploads/gallery/'.$gal->gallery_image.'"></p>';
        // }

        $output['product_name'] = $product->product_name;
        $output['product_id'] = $product->product_id;
        $output['product_desc'] = $product->product_desc;
        $output['product_price'] = number_format($product->product_price,0,',','.').'VNĐ';
        $output['product_image'] = '<p><img width="100%" src="images/'.$product->product_image.'"></p>';

        $output['product_button'] = '<input type="button" value="Mua ngay" class="btn btn-primary btn-sm add-to-cart-quickview" id="buy_quickview" data-id_product="'.$product->product_id.'"  name="add-to-cart">';
        echo json_encode($output);
       

    }
   

}
