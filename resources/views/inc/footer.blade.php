<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Tea Milk :</h2>
			
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					@foreach($chinh as $c)
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<!-- <i class="fas fa-shipping-fast"></i> -->
								<a href="{{URL::to('cli_poli/'.$c->policy_id)}}"><img src="{{asset('uploads/chinhsach/'.$c->image)}}" alt=""></a>
							</div>
							<div class="col-8 text-form-footer">
								<a href="{{URL::to('cli_poli/'.$c->policy_id)}}"><h3>{!!$c->title!!}</h3></a>
								<p>{!!$c->sumary!!}</p>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class=" font-weight-bold mb-3"  style="color:black;font-weight:bold">@lang('lang.ProductType')</h3>
						<ul>
							@foreach($category as $ca)
							<li class="mb-3">
								<a href="{{URL::to('list-pro/'.$ca->category_id)}}">{{$ca->category_name}} </a>
							</li>
							@endforeach
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="font-weight-bold mb-3"  style="color:black;font-weight:bold">@lang('lang.Quicklink')</h3>
						<ul>
							<li class="mb-3">
								<a href="{{URL::to('cli/gioithieu')}}">@lang('lang.introduce')</a>
							</li>
							<li class="mb-3">
								<a href="{{URL::to('lien-he')}}">@lang('lang.contact')</a>
							</li>
							
							<li class="mb-3">
								<a href="{{route('cli_index')}}">@lang('lang.home')</a>
							</li>
							
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class=" font-weight-bold mb-3"  style="color:black;font-weight:bold">@lang('lang.contact')</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 65 Huỳnh Thúc Kháng, Bến Nghé, quận 1, Thành phố Hồ Chí Minh</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 0585 861 855 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> 01689 114 396 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> TantaiIT3000@gmail.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> trungtran@gmail.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="font-weight-bold mb-3" style="color:black;font-weight:bold">@lang('lang.FollowUsAt')</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="https://facebook.com">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="https://https://twitter.com/">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="https://google.com">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
	
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2021 Tea Milk. All rights reserved | Design by 
				<a href="http://w3layouts.com"> Tai vs Trung.</a>
			</p>
		</div>
	</div>