@extends('admin/layout_admin')
@section('content')
<div>
	<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Giá</th>
			<th>Thêm ảnh</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{$product_detail->product_id}}</td>
			<td>{{$product_detail->product_name}}</td>
			<td>{{$product_detail->product_price}}</td>
			<td><form action="{{route('add_img1',$product_detail->product_id)}}" method="post" enctype="multipart/form-data">
					<input type="hidden" name="product_id" value="{{$product_detail->product_id}}">
					{{csrf_field()}}
					<input class="nutanh" type="file" name="image[]">
					<input class="subanh" type="submit" value="thêm ảnh">
				</form>
            </td>
		</tr>
    </tbody>
	
	</table>
	<p>Images</p>
	
</div>

<table class="table table-striped">
	<thead>
		<tr>
			<!-- <th></th>
			<th>Image</th> -->
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="taiche">
		@foreach($img as $i)
		<div class="baoimg">
			<span class="pos"><a href="{{route('del_img',$i->image_id)}}"><i  class="glyphicon glyphicon-remove icon1"></i></a></span><img class="pro_img" src="{!! asset('upload_img/'.$i->images)!!}" alt="" width="80px" height="100px">	
		</div>
		@endforeach
	        </td>
		</tr>
	</tbody>
</table>
@stop