@extends('admin/layout_admin')
@section('content')
<form action="{{route('store_attr')}}" method="post" enctype="multipart/form-data">
	@csrf
 <!--  <div class="form-group">
    <label for="name">Tên thuộc tính</label>
    <input type="text" class="form-control" name="ten" placeholder="Nhập tên sản phẩm">
  </div> -->
  
  <div class="form-group">
  <label for="idcat">Tên thuộc tính:</label><br>
  <select name="name" id="inputName" class="form-select" aria-label="Default select example">
  <option value="color" selected>Màu sắc</option>
  <option value="size" selected>kích thước</option>

  
  </select>
  </div>
  <div class="form-group">
  <label for="">Giá trị:</label><br>
  <input type="color" class="form-control" placeholder="Input Field" name="value" id="slug">
  </div> 
  


<!--   <div class="form-group">
    <label for="categoryid">Giá trị</label>
    <input type="text" class="form-control" name="mota"  placeholder="Mô tả">
  </div> -->
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop