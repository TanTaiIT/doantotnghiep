@extends('admin/layout_admin')
@section('content')
<form action="{{route('update_intro',$intro[0]->intro_id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Tiêu đề</label>
    <input type="text" class="form-control" value="{{$intro[0]->intro_title}}" name="ten" >
  </div>
  <div class="form-group">
    <label for="categoryid">Mô tả</label>
    <input type="text" class="form-control" name="mota" value="{{$intro[0]->intro_desc}}"  >
  </div>
  <div class="form-group">
    <label for="categoryid">Nội dung</label>
    <input type="text" class="form-control" name="noidung" value="{{$intro[0]->intro_content}}"  >
  </div>
  <div class="form-group">
    <label for="categoryid">Hình ảnh</label>
    <input type="file" class="form-control" name="image">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop