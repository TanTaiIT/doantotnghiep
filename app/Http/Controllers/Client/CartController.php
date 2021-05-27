<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
class CartController extends Controller
{
    public function cart(){
        $url_canonical = $request->url();  
    	$com='cart';
        $cate=category::all();
        $brand=brand::all();
    	return view('Client.cart',compact('com','cate','brand','url_canonical'));
    }
    public function addtocart($id){
    	$product=product::find($id);
    	if(!$product){
    		abort(404);
    	}
    	$cart=session()->get('cart');
    	if(!$cart){
    		$cart=[
    			$id=>[
    				"name"=>$product->product_name,
    				"quantity"=>1,
    				"price"=>$product->product_price,
    				"image"=>$product->product_image
    			]
    		];
    		session()->put('cart',$cart);
    		return redirect()->back()->with('success','đã thêm sản phẩm vào giỏ hàng');
    	}
    	if(isset($cart[$id])){
    		$cart[$id]['quantity']++;
    		session()->put('cart',$cart);
    		return redirect()->back()->with('success','đã thêm sản phẩm vào giở hàng');
    	}
    	$cart[$id]=[
    		"name"=>$product->product_name,
    		"quantity"=>1,
    		"price"=>$product->product_price,
    		"image"=>$product->product_image
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
    // public function payment(){
    //     $com='index';
    //     return view('client/payment',compact('com'));
    // }
    
}
