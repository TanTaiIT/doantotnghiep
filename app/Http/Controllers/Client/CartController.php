<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use App\Models\Slider;
use App\Models\attribute;
use Session;
class CartController extends Controller
{

    public function addtocart(Request $req){
        $id=$req->id;
        $product=product::where('product_id',$id)->where('product_status',1)->first();
        $soluong=$req->soluong;
        $size=$req->size;
        $count=0;
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
                    "price_pro"=>$product->gia_km,
                    "image"=>$product->product_image,
                    "size"=>$size,

                    
                ]
            ];
            session()->put('cart',$cart);  
            
        }
        elseif(isset($cart[$id]) && ($cart[$id]['size']==$size)){

            $cart[$id]['quantity']=$cart[$id]['quantity']+$soluong;
            $so=$cart[$id]['quantity'];
            session()->put('cart', $cart);

        }

        else{
        $cart[$id]=[
            "pro_id"=>$product->product_id,
            "name"=>$product->product_name,
            "quantity"=>$soluong,
            "price"=>$product->product_price,
            "price_pro"=>$product->gia_km,
            "image"=>$product->product_image,
            "size"=>$size,
            
        ];
        session()->put('cart',$cart);
        
    }




}







    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('enter', 'Product removed successfully');
        }
    }
    public function update(Request $request)
    {
        $url_canonical = $request->url();
        $cate=category::all();
        $com='index';
        $mes='';
        $slide=slider::limit(4)->get(); 
        $pro=Product::find($request->id);
            if($request->id and $request->quantity)
            {
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
            }  
    }
}