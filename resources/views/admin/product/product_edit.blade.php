@extends('admin/layout_admin')
@section('content')
<form action="{{route('pro_update',$pro_edit->product_id)}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="name">Tên sản phẩm</label>
    <input type="text" class="form-control" name="ten" value="{{$pro_edit->product_name}}" placeholder="Nhập tên sản phẩm">
  </div>
  <div class="form-group">
  <label for="idcat">Loại sản phẩm:</label><br>
  <select name="loai" class="form-select" aria-label="Default select example">
  <option selected>-----------Chọn Loại sản phẩm--------------</option>
  @foreach($cate as $c)
  @if($c->category_id==$pro_edit->category_id)
  <option selected value="{{$c->category_id}}">{{$c->category_name}}</option>
<!--   <option  value="{{$c->category_id}}">{{$c->category_name}}</option> -->
  @endif
  @endforeach
  </select>
  </div>
  <div class="form-group">
  <label for="idcat">Nhà cung cấp:</label><br>
  <select name="thuonghieu" class="form-select" aria-label="Default select example">
  <option selected>-----------Chọn nhà cung cấp-----------</option>
  @foreach($brand as $b)
  @if($b->brand_id==$pro_edit->brand_id)
  <option selected value="{{$b->brand_id}}">{{$b->brand_name}}</option>
  @endif
  @endforeach
  </select>
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
    <label for="categoryid">Giá gốc</label>
    <input type="text" class="form-control" name="gia" value="{{$pro_edit->price_cost}}"  placeholder="Nhập giá">
  </div>
   <div class="form-group">
    <label for="categoryid">Giá khuyễn mãi</label>
    <input type="text" class="form-control" name="gia_km" value="{{$pro_edit->gia_km}}"  placeholder="Nhập giá khuyến mãi">
  </div>
  <div class="form-group">
    <label for="images">Hình ảnh</label>
    <input type="file" name="hinh" id="ful" name="ful" class="form-control">
    <img src="{{URL::to('images/'.$pro_edit->product_image)}}" id="imgPre" class="img-thumbnail" />
  </div>
  <!-- <div class="form-group">
     
  </div> -->
  <div class="form-group">
    <label for="categoryid">Trạng thái</label>
    <select name="status" value="{{$pro_edit->product_status}}" id="">
      @if($pro_edit->product_status==1)
    	<option selected value="1">
    		còn hàng
    	</option>
      @else
    	<option selected value="2">
    		hết hàng
    	</option>
      @endif
    </select>
  </div>
   <div class="form-group">
    <label for="categoryid">số lượng</label>
    <input type="text" class="form-control" name="soluong" value="{{$pro_edit->soluong}}"  placeholder="Nhập số lượng">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop