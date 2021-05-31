@extends('client/layout_cli')
@section('content')
<div class="page-head_agile_info_w3l">

	</div>
	<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3 mar">
				<span>P</span>aymnet
			</h3>
<div class="bao">

<div class="bao_checkout">
	<div class="checkout-title">
		<p>Thông tin đơn hàng</p>
	</div>
	<div class="table-responsive bang1">

					<table class="timetable_sub">
						<!-- <thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead> -->
						
						<tbody>
							<?php $total=0;
							      $i=0;?>
						 @if(session('cart'))
                         @foreach(session('cart') as $id => $details)
                         <?php $total += $details['price'] * $details['quantity'] ?>
							<tr class="rem1">
								<td class="invert">{{$i++}}</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="{!!asset('images/'.$details['image'])!!}" alt=" " class="img-responsive">
									</a>
								</td>
								<td data-th="Quantity">
									
										<div class="quantity-select">
											<!-- <div class="entry value-minus">&nbsp;</div>
											<div class="entry value"> -->
												<!-- <span class="quantity" value="{{$details['quantity']}}">{{$details['quantity'] }}</span> -->
												<input style="color:white;" type="number" class="quantity" disabled="true" value="{{$details['quantity']}}">

											<!-- </div>
											<div class="entry value-plus active">&nbsp;</div> -->
										</div>
									
								</td>
								<!-- <td data-th="Quantity">
			                        <input type="number" value="{{ $details['quantity'] }}" class="quantity" />
			                    </td> -->
			                    
								<td class="invert">{{ $details['name'] }}</td>
								<td class="invert">${{ $details['price'] }}</td>
								<!-- <td class="actions" data-th=""> -->
		                        <?php /*<button class="btn btn-primary btn update-cart" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>
		                        
		                        <button class="btn btn-danger btn remove-from-cart" data-id="{{ $id }}"><i class="fas fa-trash"></i></button> */ ?>
		                  <!--   </td> -->
								<!-- <td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>
								</td> -->
							</tr>
						   @endforeach
                            @endif
						</tbody>
						 
					</table>
					<div class="tinhtien">
						
					
					                        <div class="thanh_tien">
											<span class="tien">Thành tiền:</span><span>{{number_format($total,0,',','.')}}đ</span>
										    </div>
										    <hr>
											@if(Session::get('coupon'))
									
												@foreach(Session::get('coupon') as $key => $cou)
													@if($cou['coupon_condition']==1)
														<span class="magiamgia">Mã giảm : </span>{{$cou['coupon_number']}} % @if(Session::get('coupon'))
				                          	<a class="btn btn-default check_out" href="{{url('/unset-coupon')}}" class="nutgiamgia">Xóa mã khuyến mãi</a>
											@endif
														<p>
															@php 
															$total_coupon = ($total*$cou['coupon_number'])/100;
														
															@endphp
														</p>
														<p>
														@php 
															$total_after_coupon = $total-$total_coupon;
														@endphp
														</p>
													@elseif($cou['coupon_condition']==2)
														<span class="giam2">Mã giảm :</span> {{number_format($cou['coupon_number'],0,',','.')}} k

														<p>
															@php 
															$total_coupon = $total - $cou['coupon_number'];
														
															@endphp
														</p>
														@php 
															$total_after_coupon = $total_coupon;
														@endphp
													@endif
												@endforeach
												@endif
												<hr>
									    <div class="phi">
										@if(Session::get('fee'))
										
											<a class="cart_quantity_delete" href="{{url('/del-fee')}}"><i class="fa fa-times"></i></a>

											<span class="phivanchuyen">Phí vận chuyển</span> <span>{{number_format(Session::get('fee'),0,',','.')}}đ</span> 
											<?php $total_after_fee = $total + Session::get('fee'); ?>
										@endif 
									    </div>
									    <hr>
										<span class="tongtien1">Tổng tiền:</span>
										@php 
											if(Session::get('fee') && !Session::get('coupon')){
												$total_after = $total_after_fee;
												echo number_format($total_after,0,',','.').'đ';
											}elseif(!Session::get('fee') && Session::get('coupon')){
												$total_after = $total_after_coupon;
												echo number_format($total_after,0,',','.').'đ';
											}elseif(Session::get('fee') && Session::get('coupon')){
												$total_after = $total_after_coupon;
												$total_after = $total_after + Session::get('fee');
												echo number_format($total_after,0,',','.').'đ';
											}elseif(!Session::get('fee') && !Session::get('coupon')){
												$total_after = $total;
												echo number_format($total_after,0,',','.').'đ';
											}

										@endphp
										
										
					</div>							
				</div>
				<!-- <div class="dathang">
				<a href="#"class="dathang1">Đặt hàng</a>
			    </div> -->
	
</div>
        <div class="form-vanchuyen">
        <div class="checkout-title">
		<p>vận chuyển và khuyễn mãi</p>
	    </div>
         <form>
         @csrf                
         <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn thành phố</label>
                                      <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                    
                                            <option value="">--Chọn tỉnh thành phố--</option>
                                        @foreach($city as $key => $ci)
                                            <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                        @endforeach
                                            
                                    </select>
         </div>
         <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn quận huyện</label>
                                      <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                            <option value="">--Chọn quận huyện--</option>
                                           
                                    </select>
         </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn xã phường</label>
                                      <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                            <option value="">--Chọn xã phường--</option>   
                                    </select>
         </div>
                               
        <div class="vanchuyen1">            
        <input  type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-sm vanchuyen calculate_delivery">
        </div>
        
         </form>
         <div class="coupon">
        	@if(Session::get('cart'))
							<div class="giamgiatien">
										<form method="POST" action="{{url('/check-coupon')}}">
											@csrf
												<input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá"><br>
				                          		<input type="submit" class="btn btn-default check_coupon giam" name="check_coupon" value="Tính mã giảm giá">
				                          	
			                          		</form>
			                         </div> 	
								@endif
        </div>
        </div>
        
        <div class="bao-bang">
        	<div class="checkout-title">
		<p>Địa chỉ thanh toán và giao hàng</p>
	    </div>



	    <div class="checkout-left">
	<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Thông tin giao hàng</h4>
					<form method="post" class="creditly-card-form agileinfo_form">
						@csrf
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="form-control shipping_name" type="text" name="shipping_name"  placeholder="Tên người nhận" required="">
									</div>
									
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="email" class="form-control shipping_email" placeholder="Email người nhận" name="shipping_email" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="number" class="form-control shipping_phone" placeholder="Số điện thoại" name="shipping_phone" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control shipping_address" placeholder="địa chỉ" name="shipping_address" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control shipping_notes" placeholder="Ghi chú" name="shipping_notes" required="">
											</div>
										</div>
										<div class="form-group">
			                                    <label for="exampleInputPassword1">Chọn hình thức thanh toán</label>
			                                      <select name="payment_select"  class="form-control input-sm m-bot15 payment_select">
			                                            <option value="0">Qua chuyển khoản</option>
			                                            <option value="1">Tiền mặt</option>   
			                                    </select>
			                                </div>
									<!-- <div class="controls form-group">
										<select class="option-w3ls" name="shipping_method">
											<option value="">Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div> -->
									@if(Session::get('fee'))
										<input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
									@else 
										<input type="hidden" name="order_fee" class="order_fee" value="10000">
									@endif

									@if(Session::get('coupon'))
										@foreach(Session::get('coupon') as $key => $cou)
											<input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
										@endforeach
									@else 
										<input type="hidden" name="order_coupon" class="order_coupon" value="no">
									@endif


								</div>
								
								<input type="button" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
							</div>
						</div>
					</form>


					<!-- <div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="far fa-hand-point-right"></span>
						</a>
					</div> -->
	</div>
    </div>






         
	</div>
</div>
@stop
