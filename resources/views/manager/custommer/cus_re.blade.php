@extends('manager.template.admin_layout')
@section('content')

<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Khôi phục khách hàng</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
								<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="{{route('recover')}}">phục hồi</a>
								</div> -->
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
													<th>Khôi phục</th>
												</tr>
											</thead>
											<tbody>
												<?php $i=0; ?>
												@foreach($cus_re as $key => $cou)
												<?php $i++ ?>
												<tr>
													<!-- <td>{{$i}}</td> -->
													<td>{{ $cou->customer_name }}</td>
													<td>{{ $cou->customer_email }}</td>
													<td>{{ $cou->customer_password }}</td>
													<td>{{ $cou->customer_phone}}</td>
												  <td>{{ $cou->ngaytao}}</td>
												  <?php if($cou->status==1){?>
														<td>hoạt động</td>
											    <?php }else{?>
											    	<td>Không hoạt động</td>
											    <?php } ?>

													<td><a href="{{URL::to('cus_recover/'.$cou->customer_id)}}" title="xóa mã giảm giá"><i class="glyphicon glyphicon-refresh"></i></a></td>
													</tr>
													@endforeach
												</tbody>
											</table>
											<div class="pagination">
												{!! $cus_re->links('pagination::bootstrap-4') !!}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection