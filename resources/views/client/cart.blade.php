@extends('Client.layout_cli')
@section('content')
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{route('cli_index')}}">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">giở hàng của bạn:
					<span>{{count(session('cart'))}} sản phẩm</span>
				</h4>

				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						
						<tbody>
							<?php $total=0;?>
						 @if(session('cart'))
                         @foreach(session('cart') as $id => $details)
                         <?php $total += $details['price'] * $details['quantity'] ?>
							<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="{!!asset('images/'.$details['image'])!!}" alt=" " class="img-responsive">
									</a>
								</td>
								<!-- <td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span class="quantity">1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td> -->
								<td data-th="Quantity">
			                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
			                    </td>
								<td class="invert">{{ $details['name'] }}</td>
								<td class="invert">${{ $details['price'] }}</td>
								<td class="actions" data-th="">
		                        <button class="btn btn-primary btn update-cart" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>
		                        <button class="btn btn-danger btn remove-from-cart" data-id="{{ $id }}"><i class="fas fa-trash"></i></button>
		                    </td>
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
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Add a new Details</h4>
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
	</div>
	@stop