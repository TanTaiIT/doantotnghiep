@extends('admin/layout_admin')
@section('content')
<form action="{{route('cate_update',$cate_edit->category_id)}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="name">Tên loại</label>
    <input type="text" class="form-control" name="ten" value="{{$cate_edit->category_name}}" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label for="categoryid">Mô tả</label>
    <input type="text" class="form-control" name="mota" value="{{$cate_edit->category_desc}}"  placeholder="Nhập vào loại sản phẩm">
  </div>
  <div class="form-group">
    <label for="category">Trạng thái</label>
    <select name="status" value="{{$cate_edit->category_status}}" id="">
    	<option value="1">
    		còn hàng
    	</option>
    	<option value="2">
    		hết hàng
    	</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop