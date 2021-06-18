	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				
				<div class="col-lg-12 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						
						
						<li class="text-center border-right text-black">
							<marquee><i style="color:black" class="fas fa-phone mr-2"></i> 001 234 5678</marquee>
						</li>
					
						<?php
						$cus_id=Session::get('customer_id');
						 if(isset($cus_id)){ ?> 

						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2 text-black">
							<a class="nav-link text-black" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{Session::get('customer_name')}}
							</a>
						</li>
						
						<li class="text-center border-right text-black">
							<a href="{{route('dangxuat_kh')}}"  class="text-black">
								<i class="fas fa-sign-in-alt mr-2"></i> Đăng xuất </a>
						</li>



						


						 <!-- 	<li class="text-center text-white">
							<a href="#" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>{{Session::get('customer_name')}}</a>
						    </li> -->
						 	
						 <?php }else { ?>
						  <!-- <li class="text-center text-white">
							    <a href="#" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng nhập</a>
						   </li> -->
						   <li class="text-center border-right text-black">
							<a href="#" style="color:black" data-toggle="modal" data-target="#exampleModal" class="text-black">
								<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
						</li>
						<li class="text-center border-right text-black">
							<a style="color:black" href="#" data-toggle="modal" data-target="#exampleModal2" class="text-black">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng ký </a>
						</li>

					     <?php } ?>

					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>