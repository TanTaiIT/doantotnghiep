@extends('manager.template.admin_layout')
@section('content')

<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Quản lý khách hàng</h2> <button type="button" data-toggle="modal" class="chitietma"  data-target="#exampleModalLong1" ><i class="glyphicon glyphicon-gift"></i></button>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="{{route('recover')}}">phục hồi</a>
								</div>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
						@if(Session()->has('error'))
						<section class='alert alert-danger' style="text-align: center;">{{session('error')}}</section>
						@endif
						@if (count($errors)>0)
						<section class='alert alert-danger' style="text-align: center;">
							@foreach ($errors->all() as $err)
							{{$err}}
							@endforeach
							@endif
						</div>

						<div class="x_content">
							<div class="row">
								<div class="col-sm-12">
									<div class="card-box table-responsive">


										<table class="table table-striped table-bordered" >
											<thead>
												<tr>
													<th>tên khách hàng</th>
													<th>email</th>
													<th>tài khoản</th>
													<th>số điện thoại</th>
													<th>ngày tạo</th>
													<th>Tình trạng</th>
													<th>xóa</th>
													<th>Gửi mã giảm giá</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=0; ?>
												@foreach($cus as $key => $cou)
												<?php $i++ ?>
												<tr>
													<!-- <td>{{$i}}</td> -->
													<td>{{ $cou->customer_name }}</td>
													<td>{{ $cou->customer_email }}</td>
													<td>{{ $cou->password }}</td>
													<td>{{ $cou->customer_phone}}</td>
												  <td>{{ $cou->ngaytao}}</td>
												  <?php if($cou->status==1){?>
														<td>hoạt động</td>
											    <?php } ?>

													<td><a href="{{URL::to('cus_delete/'.$cou->customer_id)}}" title="xóa khách hàng"><i class="glyphicon glyphicon-trash"></i></a></td>
													<td class="text-center"><a href="{{URL::to('send-code/'.$cou->customer_id)}}"><i class="glyphicon glyphicon-gift text-danger"></i></a></td>
													<!-- <td class="text-center"><button type="button" data-toggle="modal" class="chitietma" data-cus_id="{{$cou->customer_id}}" data-target="#exampleModalLong1"><i class="glyphicon glyphicon-gift text-danger"></i></button></td>
													</tr> -->
													@endforeach
												</tbody>
											</table>
											
											<!-- <div class="pagination">
												{!! $cus->links('pagination::bootstrap-4') !!}
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Danh sách mã khuyến mãi</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table table-striped table-bordered" >
							<thead>
								<tr>
									<th>tên mã</th>
									<th>mã giảm giá</th>
									<th>số lượng mã</th>
									<th>điều kiện giảm</th>
									<th>ngày bắt đầu</th>
									<th>ngày kết thúc</th>
									<th>tình trạng</th>
									<th>Gửi mã</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; ?>
								@foreach($code as $key => $co)
								<?php $i++ ?>
								<tr>
									<!-- <td>{{$i}}</td> -->
									<td>{{ $co->coupon_name }}</td>
									<td>{{ $co->coupon_code }}</td>
									<td>{{ $co->coupon_number }}</td>
									<td>{{ $co->coupon_condition}}</td>
									<td>{{ $co->start_day}}</td>
									<td>{{ $co->end_day}}</td>
									<?php if($co->coupon_status==1){?>
										<td>hoạt động</td>
									<?php } ?>

									<td><a style="font-size: 10px;" href="{{URL::to('/send-coupon',[
				                
				              'condition'=>$co->coupon_condition,
				              'number'=>$co->coupon_number,
				              'code'=>$co->coupon_code,
				              'time'=>$co->coupon_time
				              ])}}" class="btn btn-primary">Gửi mã giảm giá khách hàng</a></td>
									
								</tr>
								@endforeach
							</tbody>
						</table>
						<!--  <div id="in"></div> -->
					</div>
					<div class="modal-footer">
						<div id="print">

						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection