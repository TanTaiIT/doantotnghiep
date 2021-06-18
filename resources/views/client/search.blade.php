@extends('client/layout_cli')
@section('content')
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				KẾT QUẢ TÌM KIẾM</h3>
				<?php $message=Session::get('message');
				      if(isset($message)){?>
				      	<div class="alert alert-primary" role="alert">
						  Kết quả tìm kiếm: <?php echo $dem; ?> sản phẩm
						</div>
				     <?php }?>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								@foreach($search as $s)
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<div class="scale-img">
											<a href="{{route('cli_detail',$s->product_id)}}"><img src="{!!asset('images/'.$s->product_image)!!}" alt=""></a>
										   </div>
											<!-- <div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('cli_detail',$s->product_id)}}" class="link-product-add-cart">Quick View</a>
												</div>
											</div> -->
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">{{$s->product_name}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">${{$s->product_price}}</span>
												<!-- <del>$280.00</del> -->
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form>
													@csrf
													<fieldset> 
													    
														<input type="button" data-toggle="modal" data-target="#xemnhanh"  value="Xem nhanh" class="btn btn-default xemnhanh" data-id_soluong="{{$s->soluong}}" data-id_product="{{$s->product_id}}">

													</fieldset>
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
		
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">

					<div class="side-bar p-sm-4 p-3">
						<div class="sapxep">
					
				    </div>
						<div class="search-hotel border-bottom py-2">
							
					
						
						</div>
						
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Loại sản phẩm</h3>
							<ul>
								@foreach($cate as $c)
								<li>
									<a href="{{route('list_pro',$c->category_id)}}"><span class="span">{{$c->category_name}}</span></a>
								</li>
								@endforeach
								
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
						</div>
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