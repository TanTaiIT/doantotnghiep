@extends('admin/layout_admin')
@section('content')
<form action="{{route('pro_update',$pro_edit->product_id)}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="name">Tên sản phẩm</label>
    <input type="text" class="form-control" name="ten" value="{{$pro_edit->product_name}}" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label for="categoryid">Loại sản phẩm</label>
    <input type="text" class="form-control" name="loai" value="{{$pro_edit->category_id}}"  placeholder="Nhập vào loại sản phẩm">
  </div>
  <div class="form-group">
    <label for="categoryid">Thương hiệu</label>
    <input type="text" class="form-control" name="thuonghieu" value="{{$pro_edit->brand_id}}"  placeholder="Nhập tên thương hiệu">
  </div>
  <div class="form-group">
    <label for="categoryid">Mô tả sản phẩm</label>
    <input type="text" class="form-control" name="mota" value="{{$pro_edit->product_desc}}"  placeholder="Mô tả">
  </div>
  <div class="form-group">
    <label for="categoryid">Giá</label>
    <input type="text" class="form-control" name="gia" value="{{$pro_edit->product_price}}"  placeholder="Nhập giá">
  </div>
  <div class="form-group">
    <label for="images">Hình ảnh</label>
    <input type="file" name="hinh" class="form-control">
  </div>
  <div class="form-group">
    <label for="categoryid">Trạng thái</label>
    <select name="status" value="{{$pro_edit->product_status}}" id="">
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