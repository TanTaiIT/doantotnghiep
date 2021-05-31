<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use App\Models\attribute;
use Session;
class CartController extends Controller
{
    public function cart(){
        $url_canonical = $request->url();  
    	$com='cart';
        $cate=category::all();
        $brand=brand::all();
    	return view('Client.cart',compact('com','cate','brand','url_canonical'));
    }
    public function addtocart(Request $req){
       $id=$req->id;
        $product=product::find($id);
        $soluong=$req->soluong;
        $color=$req->color;
        $size=$req->size;
        if(!$product){
            abort(404);
        }
        $cart=session()->get('cart');
        if(!$cart){
            $cart=[
                $id=>[
                    "pro_id"=>$product->product_id,
                    "name"=>$product->product_name,
                    "quantity"=>$soluong,
                    "price"=>$product->product_price,
                    "image"=>$product->product_image,
                    "size"=>$size,
                    "color"=>$color
                ]
            ];
            
            session()->put('cart',$cart);
            return redirect()->back()->with('success','đã thêm sản phẩm vào giỏ hàng');
        }
        if(isset($cart[$id])){
           if(isset($req->soluong)){
                $cart[$id]['quantity']=$cart[$id]['quantity']+$soluong;
                session()->put('cart',$cart);
                return redirect()->back()->with('success','đã thêm sản phẩm vào giở hàng');
            }
        
        }
        $cart[$id]=[
            "pro_id"=>$product->product_id,
            "name"=>$product->product_name,
            "quantity"=>$soluong,
            "price"=>$product->product_price,
            "image"=>$product->product_image,
            "size"=>$size,
            "color"=>$color
        ];
        session()->put('cart',$cart);
        return redirect()->back()->with('success','đã thêm sản phẩm vào giỏ hàng');
    }
     public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function add_cart_ajax(Request $request){
    $data = $request->all();
    $session_id = substr(md5(microtime()),rand(0,26),5);
    $cart = Session::get('cart');
    if($cart==true){
        $is_avaiable = 0;
        foreach($cart as $key => $val){
            if($val['product_id']==$data['cart_product_id']){
                $is_avaiable++;
            }
        }
        if(!$cart){
            $cart=[
                $id=>[
                    "pro_id"=>$product->product_id,
                    "name"=>$product->product_name,
                    "quantity"=>$quan,
                    "price"=>$product->product_price,
                    "image"=>$product->product_image,
                    "size"=>$req->size,
                    "color"=>$req->color
                ]
            ];

            session()->put('cart',$cart);
            return redirect()->back()->with('success','đã thêm sản phẩm vào giỏ hàng');
        }
    }else{
        $cart[] = array(
            'session_id' => $session_id,
            'product_name' => $data['cart_product_name'],
            'product_id' => $data['cart_product_id'],
            'product_image' => $data['cart_product_image'],
            'product_quantity' => $data['cart_product_quantity'],
            'product_qty' => $data['cart_product_qty'],
            'product_price' => $data['cart_product_price'],

        );
        Session::put('cart',$cart);
    }

    Session::save();
}



    
    

}