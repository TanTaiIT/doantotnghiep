@extends('client/layout_cli')
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
					<li>chi tiết sản phẩm</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>hi <span>T</span>iết
				<span>S</span>ản <span>P</span>hẩm</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="{{asset('images/'.$detail->product_image)}}">
									<div class="thumb-image">
										<img src="{{asset('images/'.$detail->product_image)}}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								@foreach($img_detail as $d)
								<li data-thumb="{{asset('upload_img/'.$d->images)}}">
									<div class="thumb-image">
										<img src="{{asset('upload_img/'.$d->images)}}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								@endforeach
							<!-- 	<li data-thumb="{{asset('images/'.$detail->product_image)}}">
									<div class="thumb-image">
										<img src="{{asset('images/'.$detail->product_image)}}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li> -->


							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{$detail->product_name}}</h3>
					<p class="mb-3">
						<span class="item_price">${{number_format($detail->product_price)}}</span>
						<del class="mx-2 font-weight-light">$280.00</del>
						<!-- <label>Free delivery</label> -->
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								{{$detail->product_desc}}
							</li>
							<!-- <li class="mb-3">
								Shipping Speed to Delivery.
							</li>
							<li class="mb-3">
								EMIs from $655/month.
							</li>
							<li class="mb-3">
								Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
							</li> -->
						</ul>
					</div>
					<!-- <div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>1 Year</label>Manufacturer Warranty</p>
						<ul>
							<li class="mb-1">
								3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
							</li>
							<li class="mb-1">
								5.5 inch Full HD Display
							</li>
							<li class="mb-1">
								13MP Rear Camera | 8MP Front Camera
							</li>
							<li class="mb-1">
								3300 mAh Battery
							</li>
							<li class="mb-1">
								Exynos 7870 Octa Core 1.6GHz Processor
							</li>
						</ul>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
						</p>
					</div> -->
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="{{route('addtocart',$detail->product_id)}}" method="post">
								@csrf
								<fieldset>
									
									<input type="submit" name="submit" value="Add to cart" class="button btn" />
								</fieldset>
							</form>
						</div>
					</div>
					<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="fA9EUFES"></script>
    <div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="5"></div>
				</div>
			</div>
		</div>

	</div>

	@endsection