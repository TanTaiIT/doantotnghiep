@extends('client/layout_cli')
@section('content')
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">

				Danh sách sản phẩm</h3>	

			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							
							<div class="row">
								@foreach($product_list as $s1)
								<div class="col-md-4 product-men mt-5" id="home">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											
											<a href="{{route('cli_detail',$s1->product_id)}}"><div class="scale-img">
												<?php 
												  $gia=($s1->gia_km *100)/$s1->product_price;
												?>
												@if($s1->gia_km < $s1->product_price && $s1->gia_km >0)
												<span class="badge badge-pill badge-danger ban">-{{ROUND($gia,1)}}%</span>
												@endif
											<img  class="pro_img" src="{!! asset('images/'.$s1->product_image)!!}" alt="">

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
						<div class="sapxep">
					<form class="tree-most" id="form_order" method="get">
					<select name="orderby" class="boot orderby">
						<option value="md" selected="selected" disabled="true">--------------sắp xếp--------------</option>
						<option value="desc">Sản phẩm mới nhất</option>
						<option value="asc">sản phẩm cũ nhất</option>
					    <option value="primax">sắp xếp theo giá giảm dần</option>
					    <option value="primin">sắp xếp theo giá tăng dần</option>
					</select>
				    </form>
				    </div>
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm loại trà sữa bạn yêu thích..</h3>
							<form method="get" action="">
								{{csrf_field()}}
								<input type="search" placeholder="Product name..." name="keyword" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="?price=1">dưới 15.000đ</a>
									</li>
									<li class="my-1">
										<a href="?price=2">10.000đ - 15.000đ</a>
									</li>
									<li>
										<a href="?price=3">15.000đ - 20.000đ</a>
									</li>
									<li class="my-1">
										<a href="?price=4">20.000đ - 30.000đ</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Đánh giá của khách hàng</h3>
							<ul>
								<li>
									<a href="{{request()->fullUrlWithQuery(['review' => 5])}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="{{request()->fullUrlWithQuery(['review' => 4])}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.0</span>
									</a>
								</li>
								<!-- <li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>3.5</span>
									</a>
								</li> -->

								<li>
									<a href="{{request()->fullUrlWithQuery(['review' => 3])}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="{{request()->fullUrlWithQuery(['review' => 2])}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<!-- <i class="fas fa-star-half"></i> -->
										<span>2.0</span>
									</a>
								</li>
								<li>
									<a href="{{request()->fullUrlWithQuery(['review' =>1 ])}}">
										<i class="fas fa-star"></i>
										<!-- <i class="fas fa-star"></i> -->
										<!-- <i class="fas fa-star-half"></i> -->
										<span>1.0</span>
									</a>
								</li>
							</ul>
						</div>

						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">sản phẩm bán chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										@foreach($bestsell as $b)
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<a href="{{route('cli_detail',$b->product_id)}}">
											<img src="{!! asset('images/'.$b->product_image)!!}" alt="" class="img-fluid">
										    </a>
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="{{route('cli_detail',$b->product_id)}}">{{$b->product_name}}</a>
											<a href="{{route('cli_detail',$b->product_id)}}" class="price-mar mt-2">{{number_format($b->product_price)}} đ</a>
										</div>
										@endforeach
									</div>
									
								</div>
							</div>
						</div>


						
						<!-- //reviews -->
						<!-- electronics -->
						<!-- <div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Electronics</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Cameras & Photography</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Car & Vehicle Electronics</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Computers & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">GPS & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Headphones</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Home Audio</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Home Theater, TV & Video</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Mobiles & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Portable Media Players</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Tablets</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Telephones & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Wearable Technology</span>
								</li>
							</ul>
						</div> -->
						<!-- //electronics -->
						<!-- delivery -->
						<?php /*<div class="left-side border-bottom py-2">
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
						</div> */ ?>
						<!-- //arrivals -->
						<!-- best seller -->
						
						<!-- //best seller -->
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