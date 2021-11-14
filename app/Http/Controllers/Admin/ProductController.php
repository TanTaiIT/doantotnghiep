<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Session;
use App\Models\category;
use App\Models\pro_img;
use App\Models\product_attr;
use App\Models\attribute;
use App\Models\OrderDetail;
use App\Exports\Export_product;
use App\Imports\Import_product;
use Excel;
use Intervention\Image\Facades\Image;
use File;
use DB;
class ProductController extends Controller
{
    public function index(){
        $pro=Product::with('category')->where('product_status',1)->orderby('product_id','DESC')->Paginate(15);
        return view('manager.product.index',compact('pro'));

    }
    public function pro_recover($product_id){
        $pro=Product::with('category')->where('product_id',$product_id)->where('product_status',0)->update(['product_status'=>1]);
        return redirect()->back()->with('message','phục hồi sản phẩm thành công');
    }
    public function pro_recover_view(){
        $pro=Product::with('category')->where('product_status',0)->orderby('product_id','DESC')->Paginate(15);
        return view('manager.product.product_re',compact('pro'));
    }
    public function fetch_data(Request $req){
             $pro=Product::with('category')->orderby('product_id','DESC')->where('product_status',1)->Paginate(15);
            return view('manager.product.paginate_data',compact('pro'))->render();
        
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
            $attr1=attribute::where('name','size')->get();
            return view('manager/product/add_product',compact('cate','attr1'));
    }
    public function themsp(Request $req){
        $this->validate($req, [
            'ten'=>'required',
            'mota'=>'required',
            'gia' => 'required|numeric|min:4',
            'gia_goc'=>'required|numeric|min:4',
            'gia_km'=>'required|numeric',
            'hinh'=>'required',
            'attr_id'=>'required'
        ],[
            'ten.required'=>'+Ban chưa nhập tên ',
            'mota.required'=>'+Ban chưa nhập mô tả ',
            'gia.required'=>'+bạn chưa nhập giá ',
            'gia.numeric'=>'+giá phải là số ',
            'gia.min'=>'+giá tiền phải ít nhất 4 ký tự ',
            'gia_km.required'=>'+Bạn chưa nhập giá khuyến mãi ',
            'hinh.required'=>'+Bạn chưa nhập hình ',
            'gia_goc.required'=>'+chưa nhập giá gốc ',
            'gia_goc.numeric'=>'+Giá gốc phải là số ',
            'gia_km.required'=>'+chưa nhập giá khuyến mãi ',
            'gia_km.numeric'=>'+giá khuyến mãi phải là số ',
            'attr_id.required'=>'+Bạn chưa chọn size',
            
        ]);
        $product_price = filter_var($req->gia, FILTER_SANITIZE_NUMBER_INT);
        $price_cost = filter_var($req->gia_goc, FILTER_SANITIZE_NUMBER_INT);
        $km = filter_var($req->gia_km, FILTER_SANITIZE_NUMBER_INT);
        $product=new Product();
        $product->product_name=$req->ten;
        $product->category_id=$req->loai;
        $product->product_desc=$req->mota;
        $product->product_price=$product_price;
        $product->price_cost=$price_cost;
        $product->gia_km=$km;
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
        $pro_edit=product::Find($id);
        return view('manager/product/edit_product',compact('pro_edit','cate'));
    }
    public function update(Request $req,$id){
        $this->validate($req, [
            'ten'=>'required',
            'mota'=>'required',
            'gia' => 'required|numeric|min:4',
            'gia_goc'=>'required|numeric|min:4',
            'gia_km'=>'required|numeric',
            // 'hinh'=>'required',
        ],[
            'ten.required'=>'+Ban chưa nhập tên ',
            'mota.required'=>'+Ban chưa nhập mô tả ',
            'gia.required'=>'+bạn chưa nhập giá ',
            'gia.numeric'=>'+giá phải là số ',
            'gia.min'=>'+giá tiền phải ít nhất 4 ký tự ',
            'gia_km.required'=>'+Bạn chưa nhập giá khuyến mãi ',
            'gia_goc.required'=>'+chưa nhập giá gốc ',
            'gia_goc.numeric'=>'+Giá gốc phải là số ',
            'gia_km.required'=>'+chưa nhập giá khuyến mãi ',
            'gia_km.numeric'=>'+giá khuyến mãi phải là số ',
            
        ]);
        $product_price = filter_var($req->gia, FILTER_SANITIZE_NUMBER_INT);
        $price_cost = filter_var($req->gia_goc, FILTER_SANITIZE_NUMBER_INT);
        $km = filter_var($req->gia_km, FILTER_SANITIZE_NUMBER_INT);
        $pro=product::FindOrFail($id);
        $pro['product_name']=$req->ten;
        $pro['category_id']=$req->loai;
        $pro['product_desc']=$req->mota;
        $pro['product_price']=$product_price;
        $pro['price_cost']=$price_cost;
        $pro['gia_km']=$km;
        $pro['product_status']=$req->status;
        $get_image = $req->file('hinh');
        if($get_image){
            //xoa anh cu
            $post_image_old = $pro->product_image;
            $path ='images/'.$post_image_old;
            unlink($path);
            // dd($post_image_old);
            //cap nhat anh moi
            $get_name_image = $get_image->getClientOriginalName(); //lay ten của hình ảnh
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('images',$new_image);
            $pro->product_image = $new_image; 
        }
        if($pro->save()){
            Session::flash("message","cập nhật sản phẩm thành công");
        }else{
            Session::flash("message","cập nhật sản phẩm thất bại");
        }
        
        
        return redirect()->route('pro_index');
    }
    public function delete($id){
        $pro=product::FindOrFail($id);
        // $a=OrderDetail::where('product_id',$id)->get();
        // $dem=count($a);
        // if($dem == 0){
        //     if($pro->delete()){
        //     File::delete('images/'.$pro->product_image);
        //     Session::flash("message","Xóa sản phẩm thành công");
        //     return redirect()->route('pro_index');
        // }
        

        // }else{
        //     return redirect()->route('pro_index')->with('message','không thể xóa');
        // }
        $pro->update(['product_status'=>0]);
        return redirect()->back()->with('message','đã xóa sản phẩm');

        
    }
    public function kichhoat($id){
        $p=product::where('product_id',$id)->update(['product_status'=>1]);
        return redirect()->route('pro_index');
    }
    public function huykichhoat($id){
        $p=product::where('product_id',$id)->update(['product_status'=>0]);
        return redirect()->route('pro_index');
    }
    // public function add_img(Request $req,$id){
    //     $img=pro_img::where('product_id',$id)->get();
    //     $product_detail=product::Find($id);
    //     return view('admin.product.add_img',compact('product_detail','img'));
    // }

    public function add_img(Request $req,$id){
        $img=pro_img::where('product_id',$id)->get();
        $dem=count($img);
        $product_detail=product::Find($id);
        return view('manager.product.add_img',compact('product_detail','img','dem'));
    }
    public function add_img1(Request $req,$id){
        $product_detail=product::Find($id);
        $data=$req->all();
        if($req->hasfile('image')){
            $files=$req->file('image');
            $dem=count($files);
            if($dem > 2){
                return redirect()->route('add_img',$id)->with('message','vui lòng chỉ chọn từ 2 hình trở xuống');
            }else{
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
            return redirect()->route('add_img',$id)->with('message','thêm hình ảnh thành công');
        }

        }
        
        
    }
    public function del_img(Request $req,$id){
        $gallary=pro_img::Find($id);
        $hinh=$gallary->images;
        if($hinh){
            $path='upload_img/'.$hinh;
            unlink($path);
        }
        if($gallary->delete()){
            return redirect()->back()->with('message','xóa thành công');
        }else{
            return redirect()->route('add_img')->with('message','xóa không thành công');
        }
    }

    public function quickview(Request $request){

        $product_id = $request->product_id;
        $product = Product::find($product_id);
        $size=product_attr::with('attribute')->where('product_id',$product_id)->get();
        $tien=$product->product_price;
        $km=$tien-$product->gia_km;
        $nho=number_format(($km-(($km*20)/100)),0,'.','.').' '.'VNĐ';
        $lon=number_format(($km+(($km*20)/100)),0,'.','.').' '.'VNĐ';
        $vua=number_format($km,0,'.','.').' '.'VNĐ';


        $com='';
        $galary=pro_img::where('product_id',$product_id)->get();
        
            $output['product_size']='<span class="ab">GIÁ:</span><div class="bao2">';
                                $output['product_size'].='
                                <div class="bao3">
                                <input type="radio" class="cart_product_size" name="size" value="Nhỏ">Nhỏ<br>
                                <span style="color:darkred;font-weight:500">'.$nho.'</span>
                                </div>
                                
                                <div class="bao3">
                                <input type="radio" class="cart_product_size" name="size" value="Vừa">Vừa<br>
                                <span style="color:darkred;font-weight:500">'.$vua.'</span>
                                </div>
                                <div class="bao3">
                                <input type="radio" class="cart_product_size" name="size" value="Lớn">Lớn<br>
                                <span style="color:darkred;font-weight:500">'.$lon.'</span>
                                </div>
                                
                              </div>';
        
        $output['product_nho']=$nho;
        $output['product_lon']=$lon;
        $output['product_vua']=$vua;
        $output['product_name'] = $product->product_name;
        $output['product_id'] = $product->product_id;
        $output['product_desc'] = $product->product_desc;
        $output['product_price'] = number_format($km,0,',','.').'VNĐ';
        $output['product_image'] = '<p><img width="100%"  src="../images/'.$product->product_image.'"></p>';
        $output['product_soluong']=$product->soluong;
        $output['product_button'] = '<input type="button" value="THÊM VÀO GIỎ HÀNG" class="btn btn-primary btn-sm add-to-cart-quickview" id="buy_quickview" data-id_product="'.$product->product_id.'"  name="add-to-cart">';
        echo json_encode($output);

       

    }
    public function export_csv(){
    return Excel::download(new Export_product , 'product.xlsx');
    }
    public function import_csv() 
    {
        Excel::import(new Import_product,request()->file('file')); 
        return back();
    }
    

    public function xoanhieu(Request $req){
         $a = $req->value;
         $b= preg_split("/[,]/",$a);
         $gallery=DB::table('tbl_product')->join('product_images','tbl_product.product_id','=','product_images.product_id')->whereIn('tbl_product.product_id',$b)->get();

        // foreach($gallery as $ga){

        //     File::delete('upload_img/'.$ga->images);
        //     File::delete('images/'.$ga->product_image);
            
        // }
        // $gallery=Product::destroy($b);
         $gallery=Product::whereIn('product_id',$b)->update(['product_status'=>0]);


    }
    public function search(Request $req){
        
        // $product=DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('product_name','LIKE','%'.$req->search.'%')->get();
        $product=Product::with('category')->where('product_name','LIKE','%'.$req->search.'%')->where('product_status',1)->get();
        $html='';
        if($product){
            $i=0;
            foreach($product as $pro){
                $i++ ;
           $html.='<tr>
            <td class="text-center"><input type="checkbox" value="'.$pro->product_id.'" class="check"></td>
            <td>'.$i.'</td>
            <td>'.$pro->product_name.'</td>
            <td><img src="../images/'.$pro->product_image.'" alt="" width="100px" height="100px" ></td>
            <td>'.$pro->category->category_name.'</td>
            <td>'.$pro->product_price.'</td>
            <td>'.$pro->gia_km.'</td>
            <td>'.$pro->soluong.'</td>
            <td>';
                if($pro->product_status==1){
                    $html.='<a href="huykichhoat'.$pro->product_id.'" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>';
                }
                            
                elseif($pro->product_status==0){
                    $html.='<a href="kichhoat'.$pro->product_id.'" title="ẩn"><i class="glyphicon glyphicon-eye-close"></i></a>';
                }
                            
                
            $html.='</td>
            <td>
                <a href="../product/add_images/'.$pro->product_id.'" title="thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                <a href="../product/edit_pro/'.$pro->product_id.'" title="sữa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                <a  href="../product/delete/'.$pro->product_id.'" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a></td>
         </tr>';
                        
            }
        }
        echo $html;

    }

}
