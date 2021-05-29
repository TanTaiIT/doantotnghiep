@extends('admin/layout_admin')
@section('content')
<?php
  $mes=Session::get('message');
  if(isset($mes)){
   echo $mes;
  }
?>
<form action="{{route('store_attr')}}" method="post" enctype="multipart/form-data">
	@csrf
 <!--  <div class="form-group">
    <label for="name">Tên thuộc tính</label>
    <input type="text" class="form-control" name="ten" placeholder="Nhập tên sản phẩm">
  </div> -->
  
  <div class="form-group">
  <label for="thuộc tính">Tên thuộc tính:</label><br>
  <select name="name" id="inputName" class="form-select" aria-label="Default select example">
  <option value="color" selected>Màu sắc</option>
  <option value="size" >kích thước</option>
  </select>
  </div>

 
  <div class="form-group value1">
  <label for="">Giá trị:</label><br>
  <input type="color" class="form-control mau" placeholder="Input Field" name="value" id="v1">
  </div> 

  <div class="form-group value2" style="display:none"  >
  <label for="">Giá trị:</label><br>
  <input type="text" class="form-control" placeholder="Input Field" name="" id="v2">
  </div> 
  


<!--   <div class="form-group">
    <label for="categoryid">Giá trị</label>
    <input type="text" class="form-control" name="mota"  placeholder="Mô tả">
  </div> -->
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

