<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\quangcao;
use Illuminate\Http\Request;
use Session;
class AddvertisedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addver()
    {
        $quangcao=quangcao::all();
        return view('admin.quangcao.all_quangcao',compact('quangcao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_addver()
    {
        return view('admin.quangcao.add_quangcao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $get_image=request('hinh_quangcao');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/quangcao', $new_image);
            $quangcao=new quangcao();
            $quangcao->quangcao_name=$request->quangcao_name;
            $quangcao->link=$request->link;
            $quangcao->quangcao_status=$request->quangcao_status;
            $quangcao->hinh_quangcao=$new_image;
            $quangcao->save();
            Session::flash('message','thêm quảng cáo thành công');
            return redirect()->back();
        }
        else{
            Session::flash('message','làm ơn thêm hình vào');
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\quangcao  $quangcao
     * @return \Illuminate\Http\Response
     */
    public function show(quangcao $quangcao)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\quangcao  $quangcao
     * @return \Illuminate\Http\Response
     */
    public function edit(quangcao $quangcao)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\quangcao  $quangcao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quangcao $quangcao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quangcao  $quangcao
     * @return \Illuminate\Http\Response
     */
    public function destroy(quangcao $quangcao,$id)
    {
        $quangcao=quangcao::find($id);
        if($quangcao->delete()){
            Session::flash('message','xóa quảng cáo thành công');
            return redirect()->back();
        }else{
            Session::flash('message','xóa quảng cáo không thành công');
            return redirect()->back();
        }
    }
}
