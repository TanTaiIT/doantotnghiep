<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\CatePost;
use DB;
use App\Models\Post;
use App\Models\Slider;
class CategoryPost extends Controller
{
    public function add_category_post(){
        return view('manager.category_post.insert_cate_post');
    }
    public function save_category_post(Request $request){
        $this->validate($request, [
            'cate_post_name'=>'required',
            'cate_post_slug'=>'required',
            'cate_post_desc'=>'required',

        ],[
            'cate_post_desc.required'=>'+Ban chưa mô tả ',
            
        ]);
        $data = $request->all();
        $category_post = new CatePost();
        $category_post->cate_post_name = $data['cate_post_name'];
        $category_post->cate_post_slug = $data['cate_post_slug'];
        $category_post->cate_post_desc = $data['cate_post_desc'];
        $category_post->cate_post_status = $data['cate_post_status'];
        $category_post->save();
        Session::flash('message','Thêm danh mục bài viết thành công');
        return redirect()->route('all_cate_post');
    }
    public function all_category_post(){
       

        $category_post = CatePost::orderBy('cate_post_id','DESC')->where('cate_post_status',1)->paginate(5);

        return view('manager.category_post.index')->with(compact('category_post'));


    }
    public function edit_category_post($category_post_id){
        

        $category_post = CatePost::find($category_post_id);

        return view('manager.category_post.edit_cate_post')->with(compact('category_post'));
    }
    public function update_category_post(Request $request, $cate_id){
        $this->validate($request, [
            'cate_post_name'=>'required',
            'cate_post_slug'=>'required',
            'cate_post_desc'=>'required',

        ],[
            'cate_post_desc.required'=>'+Ban chưa mô tả ',
            
        ]);
        $data = $request->all();
        $category_post = CatePost::find($cate_id);
        $category_post->cate_post_name = $data['cate_post_name'];
        $category_post->cate_post_slug = $data['cate_post_slug'];
        $category_post->cate_post_desc = $data['cate_post_desc'];
        $category_post->cate_post_status = $data['cate_post_status'];
        $category_post->save();
        Session::flash('message','Cập nhật danh mục bài viết thành công');
        return redirect('/all-category-post');
    }
    public function cate_post_delview(){
        $cate=CatePost::where('cate_post_status',0)->orderby('cate_post_id','desc')->paginate(10);
        return view('manager.category_post.cate_del_post_view',compact('cate'));
    }

    public function recover($cate_id){
        $cate=CatePost::where('cate_post_id',$cate_id)->update(['cate_post_status'=>1]);
        $with_cate=DB::table('tbl_category_post')->join('tbl_post','tbl_category_post.cate_post_id','=','tbl_post.cate_post_id')->where('tbl_category_post.cate_post_id',$cate_id)->update(['tbl_post.post_status'=>1]);
        return redirect()->back()->with('message','phục hồi thành công');
    }

    public function delete_category_post($cate_id){


        $cate=Post::where('cate_post_id',$cate_id)->get();
        $dem=count($cate);
        if($dem == 0){
        $category_post = CatePost::find($cate_id);
        $with_cate=DB::table('tbl_category_post')->join('tbl_post','tbl_category_post.cate_post_id','=','tbl_post.cate_post_id')->where('tbl_category_post.cate_post_id',$cate_id)->update(['tbl_post.post_status'=>0]);
        $category_post->update(['cate_post_status'=>0]);
        return redirect()->back()->with('message','xóa thành công');
        }else{
            return redirect()->back()->with('message','xóa không thành công');
        }
    }
}
