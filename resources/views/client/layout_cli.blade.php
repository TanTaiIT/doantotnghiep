<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
@include('inc.bootstrap_cli')

</head>

<body>
	<!-- top-header -->
@include('inc.topheader')

	
@include('inc.modal')

	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							<img src="{!! asset('web/images/lo.png')!!}" alt=" " class="img-fluid">Tea Milk Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="{{route('cli_search')}}" method="post">
								{{csrf_field()}}
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('inc.menu')
	
	<?php 
	if($com=='index'){?>
		@include('inc.slide');
	<?php } ?>
	



	@yield('content')




	@include('inc.footer')

	<?php 
	if($com=='index'){ ?>
		@include('inc.boot2_detail');
	 <?php } ?>
	 <?php 
	if($com=='detail'){ ?>
		@include('inc.boot_detail');
	 <?php } ?>
</body>

</html>