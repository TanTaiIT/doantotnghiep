@extends('client/layout_cli')
@section('content')

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
<div class="bao_detail">
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				CHI TIẾT SẢN PHẨM</h3>
			<!-- //tittle heading -->
			<div class="bao_card">
			<div class="row ">
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
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{$detail->product_name}}</h3>
					<p class="mb-3">
						<span class="item_price">{{number_format($detail->product_price)}} đ</span>
						<!-- <del class="mx-2 font-weight-light">280.00</del> -->
						<!-- <label>Free delivery</label> -->
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								{{$detail->product_desc}}
							</li>

							
						</ul>
					</div>

					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form>
								@csrf
								<fieldset>
									<ul>
							<li class="mb-3">
								<p><span>Chọn size</span></p>
								<div class="bao2">
								@foreach($size as $id=>$data)
								<div class="bao3">
								<input type="radio" class="cart_product_size" name="size" value="{{$data->value}}">{{$data->value}}
							    </div>
								@endforeach
							   </div>
							</li>
							<li>
								<p><span>Loại thức uống:</span></p>
								<div class="bao2">
								@foreach($hot as $id=>$data2)
								<div class="bao3">
								<input type="radio"  class="cart_product_hot" name="hot" value="{{$data2->value}}">{{$data2->value}}
							    </div>
								@endforeach
							   </div>
							</li>
							<li>
								<p><span>Số lượng</span></p>
								<div class="sl">
									<input type="number" class="soluong cart_product_sl" min=1 value="1" name="soluong">
								</div>
							</li>
							
							<li>
								<input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$detail->product_id}}" name="add-to-cart">
								<span id="beforesend_quickview"></span>
							</li>
							<li>
								<div id="product_quickview_button"></div>
                                
							</li>
							</ul>
							<input type="hidden" value="{{$detail->soluong}}" class="cart_soluong">
									
								</fieldset>
							</form>
						</div>
					</div>
					<p>Đánh giá sản phẩm</p>
					<ul class="list-inline rating"  title="Average Rating">
                                                	@for($count=1; $count<=5; $count++)
                                                		@php
	                                                		if($count<=$rating){
	                                                			$color = 'color:#ffcc00;';
	                                                		}
	                                                		else {
	                                                			$color = 'color:#ccc;';
	                                                		}
	                                                	
                                                		@endphp
                                                	
                                                    <li title="star_rating" id="{{$detail->product_id}}-{{$count}}" data-index="{{$count}}"  data-product_id="{{$detail->product_id}}" data-rating="{{$rating}}" class="rating" style="cursor:pointer; {{$color}} font-size:30px;">&#9733;</li>
                                                    @endfor

                                                </ul>
												<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="n4eIiG1A"></script>
<div class="fb-share-button" data-href="{{$url_canonical}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="fA9EUFES"></script>
    <div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="5"></div>
				</div>
			</div>
		</div>
		</div>

	</div>
</div>

	@endsection
