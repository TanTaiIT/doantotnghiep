@extends('client/layout_cli')
@section('content')
<div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{route('cli_index')}}">Home</a>
                        <i>|</i>
                    </li>
                    <li>GIỚI THIỆU</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact" style="background: #ecd7d1;padding-bottom: 200px;" >
    	<h3  class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3 got">
               THÔNG TIN KHÁCH HÀNG
        </h3>
        <div class="profile">
        	<div class="checkout-title1">
		<p> thông tin đăng nhập</p>
	    </div>
       <div class="address_form_agile mt-sm-5 mt-4">
       	@foreach($cus as $c)
					<form method="post" action="{{url('update_profile/'.$c->customer_id)}}" class="creditly-card-form agileinfo_form">
						@csrf
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
										<div class="controls form-group">
											<label for="" class="nhan">Tên đăng nhập:</label>
											<input class="form-control name" type="text" name="name" data-validation="required" data-validation-length="min5" data-validation-error-msg="vui lòng điền ít nhất 5 ký tự" value="{{$c->customer_name}}"  placeholder="Tên khách hàng" required="">
										</div>
									
										<div class="w3_agileits_card_number_grid_left form-group">
											<label for="" class="nhan">Email:</label>
											<div class="controls">
												<input data-validation="email" data-validation-length="min5" data-validation-error-msg="vui lòng nhập đúng dịnh dạng email" type="email" class="form-control email" value="{{$c->customer_email}}" placeholder="E-mail khách hàng" name="email" required="" >
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<label for="" class="nhan">Số điện thoại:</label>
											<div class="controls">
												<input data-validation="number" data-validation-length="min11" data-validation-error-msg="vui lòng nhập số điện thoại bắt đầu bằng 0 và gồm 11 chữ số" type="text" class="form-control phone" value="{{$c->customer_phone}}" placeholder="Số điện thoại" name="phone" required="">
											</div>
										</div>
								</div>

								<input type="submit" value="Cập nhật thông tin" class="btn btn-nut btn-sm capnhat">
							</div>
						</div>
					</form>
					@endforeach
	</div>
</div>

    </div>
@stop