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
							<?php $total=0;
							      // $totalitem=0;
							      $i=0;?>
						 @if(session('cart'))
                         @foreach(session('cart') as $id => $details)
                         <?php $totalitem = $details['price'] * $details['quantity'];
                               $total+=$totalitem;
                              ?>
                         
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
												<input type="number" class="quantity" value="{{$details['quantity']}}">

											<!-- </div>
											<div class="entry value-plus active">&nbsp;</div> -->
										</div>
									
								</td>
								<!-- <td data-th="Quantity">
			                        <input type="number" value="{{ $details['quantity'] }}" class="quantity" />
			                    </td> -->
			                    
								<td class="invert">{{ $details['name'] }}</td>
								<td class="invert">${{$totalitem }}.000</td>
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
			


		</div>
	</div>

	<div class="tongtien">
		<p><span class="bold">Tổng tiền:</span>{{$total}}.000</p>
		<a href="{{route('cli_index')}}" class="continute">Tiếp tục mua hàng</a>
		<a href="{{route('payment')}}" class="process">Tiến hành thanh toán</a>
	</div>
	@stop