@extends('admin/layout_admin')
@section('content')
<form action="{{route('themsp')}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="name">Tên sản phẩm</label>
    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" class="form-control" name="ten" placeholder="Nhập tên sản phẩm">
  </div>
  <!-- <div class="form-group">
    <label for="categoryid">Loại sản phẩm</label>
    <input type="text" class="form-control" name="loai"  placeholder="Nhập vào loại sản phẩm">
  </div> -->
  <div class="form-group">
  <label for="idcat">Loại sản phẩm:</label><br>
  <select name="loai" class="form-select" aria-label="Default select example">
  <option selected>-----------Chọn Loại sản phẩm--------------</option>
  @foreach($cate as $c)
  <option value="{{$c->category_id}}">{{$c->category_name}}</option>
  @endforeach
  </select>
  </div>
  <div class="form-group">
  <label for="idcat">Nhà cung cấp:</label><br>
  <select name="thuonghieu" class="form-select" aria-label="Default select example">
  <option selected>-----------Chọn nhà cung cấp-----------</option>
  @foreach($brand as $b)
  <option value="{{$b->brand_id}}">{{$b->brand_name}}</option>
  @endforeach
  </select>
</div>
  <div class="form-group">
    <label for="categoryid">Mô tả sản phẩm</label>
    <input type="text" class="form-control" name="mota"  placeholder="Mô tả">
  </div>
  <div class="form-group">
    <label for="categoryid">Giá bán</label>
    <input type="text" data-validation="length" data-validation-length="min5" data-validation-error-msg="Làm ơn điền số tiền" class="form-control " name="gia"  placeholder="Nhập giá">
  </div>
  <div class="form-group">
    <label for="categoryid">Giá gốc</label>
    <input type="text" data-validation="length" data-validation-length="min5" data-validation-error-msg="Làm ơn điền số tiền" class="form-control " name="gia_goc"  placeholder="Nhập giá">
  </div>
  <div class="form-group">
    <label for="categoryid">Giá khuyễn mãi</label>
    <input type="text" data-validation="length" data-validation-length="min5" data-validation-error-msg="Làm ơn điền số tiền" class="form-control " name="gia_km"  placeholder="Nhập giá khuyến mãi">
  </div>
  <div class="form-group">
    <label for="images">Hình ảnh</label>
    <input type="file" name="hinh" id="ful" name="ful" class="form-control">
  </div>
  <div class="form-group">
      <img src="{!! asset('web/images/download.png')!!}" id="imgPre" class="img-thumbnail" />
  </div>
  <div class="form-group">
    <label for="categoryid">Trạng thái</label><br>
    <input type="radio" value=1 name="status" checked>Hiện &nbsp;&nbsp;
    <input type="radio" value=0 name="status">Ẩn
  </div>
  <div class="form-group">
    <label for="categoryid">Số lượng</label>
    <input type="text" class="form-control" name="soluong"  placeholder="Nhập số lượng">
  </div>
<!-- <div class="form-group">
  <label>Kích thước</label>
  @foreach($attr1 as $size)
  <input type="checkbox" value="{{$size->attr_id}}" name="attr_id[]">{{$size->value}}
  @endforeach
</div>
<div class="form-group">
  <label for="Loại thức uống"></label>
  @foreach($attr as $hot)
  <input type="checkbox" value="{{$hot->attr_id}}" name="attr_id[]">{{$hot->value}}
  @endforeach
</div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop