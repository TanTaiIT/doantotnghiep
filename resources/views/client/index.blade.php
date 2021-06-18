@extends('client/layout_cli')
@section('content')

	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				SẢN PHẨM CỦA CHÚNG TÔI</h3>
				
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-12">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							
							<div class="row">
								@foreach($product as $p)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											

											<!-- <form>
												@csrf
												<input type="hidden" id="wishlist_productname{{$p->product_id}}" value="{{$p->product_name}}" class="cart_product_name_{{$p->product_id}}">
                                                <input type="hidden" id="wishlist_productprice{{$p->product_id}}" value="{{number_format($p->product_price,0,',','.')}}VNĐ">
                                                
											</form> -->
											<a id="wishlist_producturl{{$p->product_id}}" href="{{route('cli_detail',$p->product_id)}}"><div class="scale-img">
												<?php 
												  $gia=($p->gia_km *100)/$p->product_price;
												?>
												@if($p->gia_km < $p->product_price && $p->gia_km >0)
												<span class="badge badge-pill badge-danger ban">-{{ROUND($gia,1)}}%</span>
												@endif
											<img id="wishlist_productimage{{$p->product_id}}" class="pro_img" src="{!! asset('images/'.$p->product_image)!!}" alt="">

										    <!--  -->
										
										    </div></a>

						 <?php

						   $tong=0;
						   if($p->pro_rating){
						   	 $tong=round(($p->pro_rating_number)/($p->pro_rating));
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
												<a href="{{route('cli_detail',$p->product_id)}}">{{$p->product_name}}</a>
											</h4>
											<?php 
											  $giatien=$p->product_price-$p->gia_km
											?>
											<div class="info-product-price my-2">
												<span class="item_price">{{number_format($giatien)}} đ</span>
												@if($p->gia_km < $p->product_price && $p->gia_km > 0)
												<del>{{$p->product_price}}đ</del>
												@endif
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form>
													@csrf
													<fieldset> 
													    
														<input type="button" data-toggle="modal" data-target="#xemnhanh"  value="Xem nhanh" class="btn btn-default xemnhanh" data-id_soluong="{{$p->soluong}}" data-id_product="{{$p->product_id}}">

													</fieldset>
												</form>
												<!-- <div class="love">
													<button class="button_wishlist" id="{{$p->product_id}}" onclick="add_wistlist(this.id);"><span>Yêu thích</span></button>
												</div>  -->
											</div>
										</div>
									</div>
								</div>


								
								@endforeach
							</div>
							
								{{ $product->links()}}
						</div>

						
						<div class="quangcao">
							
							<div class="row">
								<div class="rundt wrap_1200">
								@foreach($quangcao as $quang)
								<a href="{{$quang->link}}"><img class="hinh" height="200px" src="{!! asset('uploads/quangcao/'.$quang->hinh_quangcao)!!}" alt=""></a>
							    @endforeach
							    </div>
						</div>
							
						</div>


						<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3 sellchay1">
				SẢN PHẨM BÁN CHẠY</h3>

						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							
							<div class="row">
								<!-- <div class="rundt"> -->
								@foreach($bestsell as $b)
								<div class="col-md-4 product-men mt-5 wid">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											
											<a href="{{route('cli_detail',$b->product_id)}}"><div class="scale-img">
												<?php 
												  $gia=($b->gia_km *100)/$b->product_price;
												?>
												@if($b->gia_km < $b->product_price && $b->gia_km >0)
												<span class="badge badge-pill badge-danger ban">-{{ROUND($gia,1)}}%</span>
												@endif
											<img class="pro_img" src="{!! asset('images/'.$b->product_image)!!}" alt="">

										    <!--  -->
										
										    </div></a>

						 <?php

						   $tong=0;
						   if($b->pro_rating){
						   	 $tong=round(($b->pro_rating_number)/($b->pro_rating));
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
												<a href="{{route('cli_detail',$b->product_id)}}">{{$b->product_name}}</a>
											</h4>
											<?php 
											  $giatien=$b->product_price-$b->gia_km
											?>
											<div class="info-product-price my-2">
												<span class="item_price">{{number_format($giatien)}} đ</span>
												@if($b->gia_km < $b->product_price && $b->gia_km > 0)
												<del>{{$b->product_price}}đ</del>
												@endif
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form>
													@csrf
													<fieldset> 
													    
														<input type="button" data-toggle="modal" data-target="#xemnhanh"  value="Xem nhanh" class="btn btn-default xemnhanh" data-id_soluong="{{$b->soluong}}" data-id_product="{{$b->product_id}}">

													</fieldset>
												</form> 
											</div>
										</div>
									</div>
								</div>



								
								@endforeach
							
							</div>
							
								<!-- {{ $bestsell->links()}} -->
						</div>
						


					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Làm từ nguyên liệu tự nhiên 100%</h6>
								<h4 class="mt-2 mb-3">Trà sữa chocola mới ra</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="{!! asset('web/images/z10.png')!!}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>Nhiều kích thước để lựa chọn</h6>
								<h4 class="mt-2 mb-3">Trà chanh cỡ lớn</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="{!! asset('web/images/z11.png')!!}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
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
                                                            <p style="color:#287b45;font-size:15px">Mã ID: <span id="product_quickview_id"></span></p>
                                                            <p style="color:#287b45;font-size:15px" >GIÁ SẢN PHẨM : <span style="font-size: 20px; color: brown;font-weight: bold;" id="product_quickview_price"></span></p>
                                
                                                                <label style="color:#287b45;font-size:15px">SỐ LƯỢNG:</label>
                                                                <input type="number" class="soluong cart_product_sl" min=1 value="1" name="soluong">
                                                             
                                                            </span>
                                                            <p style="color:#287b45;font-size:15px">MÔ TẢ SẢN PHẨM:</p>
                                                           <!--  <hr> -->
                                                            <p><span id="product_quickview_desc"></span></p>
                                                            <hr>
                                                            <p><span id="product_quickview_content"></span></p>
                                                           
								<p><span style="color:#287b45;font-size:15px">CHỌN SIZE:</span></p>
								<div class="bao2">
								@foreach($size as $id=>$data)
								<div class="bao3">
								<input type="radio" class="cart_product_size" name="size" value="{{$data->value}}">{{$data->value}}
							    </div>
								@endforeach
							   </div>
							   <p><span style="color:#287b45;font-size:15px">Loại THỨC UỐNG:</span></p>
								<div class="bao2">
								@foreach($hot as $id=>$data2)
								<div class="bao3">
								<input type="radio" class="cart_product_hot" name="hot" value="{{$data2->value}}">{{$data2->value}}
							    </div>
								@endforeach
							   </div>
							   <!-- <span id="product_soluong"></span> -->
                                                            
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

	