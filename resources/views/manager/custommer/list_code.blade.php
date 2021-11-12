@extends('manager.template.admin_layout')
@section('content')

<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Quản lý khuyến mãi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
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
                          <th>Tên mã giảm giá</th>
				            <th>Mã giảm giá</th>
				            <th>Số lượng giảm giá</th>
				            <th>Điều kiện giảm giá</th>
				           
				            <th>ngày bắt đầu</th>
				            <th>Ngày kết thúc</th>
				            <th>Số giảm</th>
				            <th>Quản lý</th>
				          
				            <th>Tình trạng</th>
				            
				            <th>Gửi mã</th>
				            
                        </tr>
                      </thead>


                      <tbody>
                        <?php $i=0; ?>
                        @foreach($code as $key => $cou)
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
				                <a href=""><span style="color:blue">Đang kích hoạt</span></span>
				                <?php
				                 }else{
				                ?>  
				                 <a href=""><span style="color:red">Không hoạt động</span></a>
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
				              <p><a style="font-size: 10px;" href="{{URL::to('/send-code-coupon',[
				              'condition'=>$cou->coupon_condition,
				              'number'=>$cou->coupon_number,
				              'code'=>$cou->coupon_code,
				              'time'=>$cou->coupon_time,
				              'id' => $cus[0]->customer_id
				              ])}}" class="btn btn-primary">Gửi mã giảm giá khách hàng</a></p>
				            </td>

				          
                         
                          
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="pagination">
                    {!! $code->links('pagination::bootstrap-4') !!}
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