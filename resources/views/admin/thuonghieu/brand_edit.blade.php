@extends('admin/layout_admin')
@section('content')
<form action="{{route('brand_update',$brand_edit->brand_id)}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="name">Tên loại</label>
    <input type="text" class="form-control" name="ten" value="{{$brand_edit->brand_name}}" placeholder="Nhập tên thương hiệu">
  </div>
  <div class="form-group">
    <label for="categoryid">Mô tả</label>
    <input type="text" class="form-control" name="mota" value="{{$brand_edit->brand_desc}}"  placeholder="mô tả">
  </div>
  <div class="form-group">
    <label for="category">Trạng thái</label>
    <select name="status" value="{{$brand_edit->brand_status}}" id="">
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