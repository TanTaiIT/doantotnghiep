<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
	public function __contruct(){

	}
	public function dangnhap1(){
		return view('admin/login');
	}
    // public function login(){
    // 	if(Auth::check()){
    // 		return view('product/index');
    // 	}
    // 	else{
    // 		return view('login');
    // 	}
    // }
    // public function postlogin(Request $req){
    //     $login=[
    //         'email'=>$req->txtemail,
    //         'password'=>$req->txtpassword,
    //         'status'=>1
    //     ];
    //     if(Auth::attempt($login)){
    //         return redirect('product/index')->with('name',Auth::User()->name);
    //     }else{
    //     	return redirect()->back()->with('status','Email hoặc mật khẩu không chính xác');
    //     }
    // }
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('admin/index');
        } else {
            return view('admin/login');
        }
        // return view('admin/login');
    }
    public function postLogin(Request $req)
    {   
    	$t=User::all();
    	$e=$req->txtemail;
    	$p=$req->txtpassword;
    	if($t[0]['email']==$e && $t[0]['password']==$p && $t[0]['status']==1){
    		return redirect()->route('pro_index');
    	}
    	else{
    		return view('admin/login');
    	}

        // $login = [
        //     'email' => $request->txtemail,
        //     'password' => Hash::make($request->txtpassword),
        //     'status'    =>1,
        // ];
       
        // if (Auth::attempt($login)) {
        // return redirect('admin/index')->with('name',Auth::User()->name);
        // } else {
        //     return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        // }
    }

    public function getLogout()
    {
        Auth::logout();
        return view('admin.login');
    }
}
