@extends('admin/layout_admin')
@section('content')
<form action="{{route('themcat')}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="name">Tên Loại</label>
    <input type="text" class="form-control" name="ten" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label for="categoryid">Mô tả</label>
    <input type="text" class="form-control" name="mota"  placeholder="Nhập vào loại sản phẩm">
  </div>
  <div class="form-group">
    <label for="category">Trạng thái</label>
    <select name="status" id="">
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