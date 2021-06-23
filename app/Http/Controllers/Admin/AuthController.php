<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\admin;
use App\Models\Roles;
class AuthController extends Controller
{
    public function register_auth(){
        return view('admin.custommer_authen.dangky_auth');
    }
    public function login_auth(){
        return view('admin.custommer_authen.dangnhap_auth');
    }
    public function register(Request $request){
        $this->validation($request);
        $data=$request->all();
        $admin=new admin();
        $admin->name=$data['name'];
        $admin->email=$data['email'];
        $admin->password=md5($data['password']);
        $admin->phone=$data['phone'];
        $admin->save();
        return redirect()->route('regis')->with('message','đăng ký thành công');
    }
    public function validation(Request $request){
        return $this->validate($request,[
            'name'=>'required|max:255',
            'phone'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|max:255'
        ]);
    }
    public function login1(Request $request){
        $this->validate($request,[
            'email'=>'required|email|max:255',
            'password'=>'required|max:255'
        ]);
        // $data=$request->all();
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('trangchu');
        }else{
            return redirect()->back();
        }

    }
    public function logout_auth(){
        Auth::logout();
        return redirect()->route('login_auth');
    }
}
