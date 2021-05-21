@extends('client/layout_cli')
@section('content')
	<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>P</span>aymnet
			</h3>
<div class="bao">

<div class="bao_checkout">
	<div class="checkout-title">
		<p>Địa chỉ thanh toán và giao hàng</p>
	</div>
	<div class="checkout-left">
	<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Địa chỉ thanh toán và giao hàng</h4>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Mobile Number" name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Landmark" name="landmark" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Town/City" name="city" required="">
									</div>
									<div class="controls form-group">
										<select class="option-w3ls">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out btn">Delivery to this Address</button>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
	</div>
    </div>
</div>
        <div class="form-vanchuyen">
        <div class="checkout-title">
		<p>Thanh toán và vận chuyển</p>
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
                               
                               
        <input type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-sm calculate_delivery">

        
         </form>
        </div>
        <div class="bao-bang">
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
				</div>
			</div>
</div>
@stop
