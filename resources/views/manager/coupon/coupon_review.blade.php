@extends('manager.template.admin_layout')
@section('content')

<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Khôi phục mã khuyến mãi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{URL::to('/coupon_re_view')}}">Settings 1</a>
                            
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
                  <div class="button">
                  	<a href="{{route('insert_coupon')}}" class="btn-color" type="button" >Thêm mã giảm giá</a>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    
                    <table class="table table-striped table-bordered" >
                      <thead>
                        <tr>
                          <th>Tên mã giảm giá</th>
				            <th>Mã giảm giá</th>
				            <th>Số lượng giảm giá</th>
				            <th>Điều kiện giảm giá</th>
				           
				            <th>ngày bắt đầu</th>
				            <th>Ngày kết thúc</th>
				            <th>Số giảm</th>
				            <th>Quản lý</th>
				          
				            <th>Tình trạng</th>
				            
				            <th>Khôi phục</th>
				            
                        </tr>
                      </thead>


                      <tbody>
                        <?php $i=0; ?>
                        @foreach($coupon_re as $key => $cou)
                        <?php $i++ ?>
                        <tr>
                          <!-- <td>{{$i}}</td> -->
                          <td>{{ $cou->coupon_name }}</td>
				          <td>{{ $cou->coupon_code }}</td>
				          <td>{{ $cou->coupon_time }}</td>
				          <td><span class="text-ellipsis">
				              <?php
				               if($cou->coupon_condition==1){
				                ?>
				                Giảm theo %
				                <?php
				                 }else{
				                ?>  
				                Giảm theo tiền
				                <?php
				               }
				              ?>
				            </span>
				          </td>
				          <td>{{ $cou->start_day }}</td>
				            <td>{{ $cou->end_day }}</td>
				             <td><span class="text-ellipsis">
				              <?php
				               if($cou->coupon_condition==1){
				                ?>
				                Giảm {{$cou->coupon_number}} %
				                <?php
				                 }else{
				                ?>  
				                Giảm {{$cou->coupon_number}} k
				                <?php
				               }
				              ?>
				            </span></td>
				           
				            <td><span class="text-ellipsis">
				              <?php
				               if($cou->coupon_status==1){
				                ?>
				                <a href="{{route('huy_coupon',$cou->coupon_id)}}"><span style="color:blue">Đang kích hoạt</span></span>
				                <?php
				                 }else{
				                ?>  
				                 <a href="{{route('kich-hoat-coupon',$cou->coupon_id)}}"><span style="color:red">Không hoạt động</span></a>
				                <?php
				               }
				              ?>
				            </span></td>

				            <td>
				            <?php
				               if($cou->end_day >=$today){
				                ?>
				                <span style="color:blue">Còn hạn</span>
				                <?php
				                 }else{
				                ?>  
				                 <span style="color:red">hết hạn</span>
				                <?php
				               }
				              ?>
				            </td>

				            
				            <td> 
				              <a href="{{URL::to('/coupon_recover/'.$cou->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
				                <i class="glyphicon glyphicon-refresh text-success text"></i>
				              </a>
				            </td>
                         
                          
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="pagination">
                    {!! $coupon_re->links('pagination::bootstrap-4') !!}
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