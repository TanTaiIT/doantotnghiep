	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				
				<div class="col-lg-12 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						
						
						<li class="text-center border-right text-white">
							<marquee><i class="fas fa-phone mr-2"></i> 001 234 5678</marquee>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng ký </a>
						</li>
						<?php
						$cus_id=Session::get('customer_id');
						 if(isset($cus_id)){ ?> 

						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2 text-white">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{Session::get('customer_name')}}
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{route('dangxuat_kh')}}">Đăng xuất</a>
							</div>
						</li>
					     <?php } ?>

					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>