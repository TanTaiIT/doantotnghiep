@extends('admin/layout_admin');
@section('content')
<div class="title">
	<p>Bảng sản phẩm</p>
</div>
<div class="function">
	<a href="{{route('pro_add')}}" class="but">Thêm sản phẩm</a>
	<a href="" class="but1">Xóa tất cả</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Loại sản phẩm</th>
      <th scope="col">Thương hiệu</th>
      <th scope="col">Mô tả</th>	
      <th scope="col">Giá tiền</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Số lượng</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0 ?>
  	@foreach($pro as $p)
    <?php $i++ ?>
    <tr>
     <td>{{$i}}</td>
     <td>{{$p->product_name}}</td>
     <td>{{$p->category_id}}</td>
     <td>{{$p->brand_id}}</td>
     <td>{{$p->product_desc}}</td>
     <td>{{$p->product_price}}</td>
     <td><img src="{!! asset('images/'.$p->product_image)!!}" alt="" width="50px" height="50px"></td>
     <td>
       <?php 
          if($p->product_status==1){ ?>
            <a href="{{route('huykichhoat',$p->product_id)}}"><span class="glyphicon glyphicon-eye-open icon"></span></a>
          <?php }else{ ?> 
            <a href="{{route('kichhoat',$p->product_id)}}"><span class="glyphicon glyphicon-eye-close icon2"></span></a>
          <?php } ?>

     </td>
     <td>{{$p->soluong}}</td>
     <td>
      <a class="cach" href="{{route('add_img',$p->product_id)}}" title="thêm ảnh"><i class="glyphicon glyphicon-folder-open lo"></i>
        </a>
      <a class="cach" href="{{route('product_edit',$p->product_id)}}" title="sửa sản phẩm"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16" style="color:blue">
		  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
		  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
		    </svg>
		    </a>
		    <a class="cach" href="{{route('delete_pro',$p->product_id)}}" title="xóa sản phẩm">
		    	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color:red" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
				  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
				  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
				</svg>
		    </a>
	</td>
    </tr>
    @endforeach
  </tbody>
</table>
 <div class="pagiantion" style="text-align: center;">{{$pro->links()}}</div>
@stop