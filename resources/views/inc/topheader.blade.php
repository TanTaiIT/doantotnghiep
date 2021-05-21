	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				
				<div class="col-lg-12 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						
						
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 001 234 5678
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
						</li>
						<?php
						$cus_id=Session::get('customer_id');
						 if(isset($cus_id)){?> 


							<li class="text-center border-right text-white tai"><div class="dropdown">
							  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
							    {{Session::get('customer_name')}}
							  </a>

							  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <li><a class="dropdown-item" href="{{route('dangxuat_kh')}}">Đăng xuất</a></li>
							  </ul>
							</div>
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
					     <?php } ?>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>