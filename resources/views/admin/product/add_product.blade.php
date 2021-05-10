@extends('admin/layout_admin')
@section('content')
<form action="{{route('themsp')}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="name">Tên sản phẩm</label>
    <input type="text" class="form-control" name="ten" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
    <label for="categoryid">Loại sản phẩm</label>
    <input type="text" class="form-control" name="loai"  placeholder="Nhập vào loại sản phẩm">
  </div>
  <div class="form-group">
    <label for="categoryid">Thương hiệu</label>
    <input type="text" class="form-control" name="thuonghieu"  placeholder="Nhập tên thương hiệu">
  </div>
  <div class="form-group">
    <label for="categoryid">Mô tả sản phẩm</label>
    <input type="text" class="form-control" name="mota"  placeholder="Mô tả">
  </div>
  <div class="form-group">
    <label for="categoryid">Giá</label>
    <input type="text" class="form-control" name="gia"  placeholder="Nhập giá">
  </div>
  <div class="form-group">
    <label for="images">Hình ảnh</label>
    <input type="file" name="hinh" class="form-control">
  </div>
  <div class="form-group">
    <label for="categoryid">Trạng thái</label>
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