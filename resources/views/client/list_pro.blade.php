@extends('client/layout_cli')
@section('content')
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>M</span>obiles
				<span>&</span>
				<span>C</span>omputers</h3>
				<!-- <?php $message=Session::get('message');
				      if(isset($message)){?>
				      	<div class="alert alert-primary" role="alert">
						  Kết quả tìm kiếm: <?php echo $dem; ?> sản phẩm
						</div>
				     <?php }?> -->
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Trà Sữa trân châu</h3>
							<div class="row">
								@foreach($product_list as $s1)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											
											<a href="{{route('cli_detail',$s1->product_id)}}"><div class="scale-img">
												<?php 
												  $gia=($s1->gia_km *100)/$s1->product_price;
												?>
												@if($s1->gia_km < $s1->product_price && $s1->gia_km >0)
												<span class="badge badge-pill badge-danger ban">-{{ROUND($gia,1)}}%</span>
												@endif
											<img  src="{!! asset('images/'.$s1->product_image)!!}" alt="">

										    <!--  -->
										
										    </div></a>

						 <?php

						   $tong=0;
						   if($s1->pro_rating){
						   	 $tong=round(($s1->pro_rating_number)/($s1->pro_rating));
						   }
						  
						 ?>
							<ul class="marg">
								<li>
									
										@for($i=1;$i<6;$i++)
										@if($i<=$tong && $tong>0)
											<i class="fas fa-star actise"></i>
										@else
											<i class="fas fa-star"></i>
										@endif
										
										@endfor
										

										
									
								</li>
							</ul>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('cli_detail',$s1->product_id)}}">{{$s1->product_name}}</a>
											</h4>
											<?php 
											  $giatien=$s1->product_price-$s1->gia_km
											?>
											<div class="info-product-price my-2">
												<span class="item_price">{{number_format($giatien)}} đ</span>
												@if($s1->gia_km < $s1->product_price && $s1->gia_km > 0)
												<del>{{$s1->product_price}}đ</del>
												@endif
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form>
													@csrf
													<fieldset> 
														


														<input type="button" data-toggle="modal" data-target="#xemnhanh"  value="Xem nhanh" class="btn btn-default xemnhanh" data-id_product="{{$s1->product_id}}" name="add-to-cart">
													</fieldset>
												</form> 





											</div>
										</div>
									</div>
								</div>


								
								@endforeach
							</div>




						
							
						</div>
						
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brand</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Search Brand..." name="search" required="">
								<input type="submit" value=" ">
							</form>
							<div class="left-side py-2">
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Samsung</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Red Mi</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Apple</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Nexus</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Motorola</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Micromax</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Lenovo</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Oppo</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Sony</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">LG</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">One Plus</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- ram -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Ram</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Less than 512 MB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">512 MB - 1 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">1 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">2 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">3 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">6 GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">6 GB & Above</span>
								</li>
							</ul>
						</div>
						<!-- //ram -->
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Price</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Under $1,000</a>
									</li>
									<li class="my-1">
										<a href="#">$1,000 - $5,000</a>
									</li>
									<li>
										<a href="#">$5,000 - $10,000</a>
									</li>
									<li class="my-1">
										<a href="#">$10,000 - $20,000</a>
									</li>
									<li>
										<a href="#">$20,000 $30,000</a>
									</li>
									<li class="mt-1">
										<a href="#">Over $30,000</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Discount</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% or More</span>
								</li>
							</ul>
						</div>
						<!-- //discounts -->
						<!-- offers -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Offers</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Exchange Offer</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">No Cost EMI</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Special Price</span>
								</li>
							</ul>
						</div>
						<!-- //offers -->
						<!-- delivery -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Eligible for Cash On Delivery</span>
								</li>
							</ul>
						</div>
						<!-- //delivery -->
						<!-- arrivals -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">New Arrivals</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 30 days</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 90 days</span>
								</li>
							</ul>
						</div>
						<div class="left-side py-2">
							<h3 class="agileits-sear-head mb-3">Availability</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Exclude Out of Stock</span>
								</li>
							</ul>
						</div>
						<!-- //arrivals -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>




	<div class="modal fade" id="xemnhanh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg"  role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title product_quickview_title" id="">

                                                        <span id="product_quickview_title"></span>
                                                        
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <style type="text/css">
                                                        span#product_quickview_content img {
                                                            width: 100%;
                                                        }

                                                        @media screen and (min-width: 768px) {
                                                            .modal-dialog {
                                                              width: 700px; /* New width for default modal */
                                                            }
                                                            .modal-sm {
                                                              width: 350px; /* New width for small modal */
                                                            }
                                                        }
                                                        
                                                        @media screen and (min-width: 992px) {
                                                            .modal-lg {
                                                              width: 1200px; /* New width for large modal */
                                                            }
                                                        }
                                                    </style>
                                                    <div class="baotrum">
                                                        <div class="taice1">
                                                            <span id="product_quickview_image"></span>
                                                            <span id="product_quickview_gallery"></span>
                                                        </div>
                                                        <form>
                                                            @csrf
                                                            <div id="product_quickview_value"></div>
                                                        <div class=" taice">
                                                            <h2><span id="product_quickview_title"></span></h2>
                                                            <p>Mã ID: <span id="product_quickview_id"></span></p>
                                                            <p  >Giá sản phẩm : <span style="font-size: 20px; color: brown;font-weight: bold;" id="product_quickview_price"></span></p>
                                
                                                                <label >Số lượng:</label>

                                                               
                                                                <input type="number" class="soluong cart_product_sl" min=1 value="1" name="soluong">
                                                             
                                                            </span>
                                                            <p >Mô tả sản phẩm:</p>
                                                           <!--  <hr> -->
                                                            <p><span id="product_quickview_desc"></span></p>
                                                            <hr>
                                                            <p><span id="product_quickview_content"></span></p>
                                                           
								<p><span>Chọn size</span></p>
								<div class="bao2">
								@foreach($size as $id=>$data)
								<div class="bao3">
								<input type="radio" class="cart_product_size" name="size" value="{{$data->value}}">{{$data->value}}
							    </div>
								@endforeach
							   </div>
							   <p><span>Loại thức uống:</span></p>
								<div class="bao2">
								@foreach($hot as $id=>$data2)
								<div class="bao3">
								<input type="radio" class="cart_product_hot" name="hot" value="{{$data2->value}}">{{$data2->value}}
							    </div>
								@endforeach
							   </div>
                                                            
														    <div style="margin-bottom: 10px" id="product_quickview_button"></div>
                                                            <div id="beforesend_quickview"></div>
                                                        </div>
                                                        </form>

                                                    </div>
                                                   
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                    <button type="button" class="btn btn-default redirect-cart">Đi tới giỏ hàng</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> 

@stop