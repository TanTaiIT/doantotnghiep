<div class="navbar-inner">
	
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
				
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>



<div class="menu">
    <div class="flex-menu">
        <ul class="d-flex align-items-center justify-content-between wrap-content menu_desktop">
            <li><a class="transition " href="{{route('cli_index')}}" title=""><h2>Trang chủ</h2></a>
           </li>
            <li class="line"></li>
            <li><a class="" href="" title=""><h2>menu</h2></a>
            	 <ul>
            	 	@foreach($cate as $c)
                    <li><span></span><a href="{{route('list_pro',$c->category_id)}}">{{$c->category_name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="line"></li>
            <li>
                <a class="transition" href="" title=""><h2>Bài viết</h2></a>
                <ul>
                	@foreach($cate_post1 as $p)
                	<li><span></span><a href="{{route('dm_baiviet',$p->cate_post_slug)}}">{{$p->cate_post_name}}</a></li>
                	@endforeach
                </ul>
                
            </li>
            <li class="line"></li>
            <li>
                <a class="transition" href="{{Route('gioithieu')}}" title="Gioi thieu"><h2>giới thiệu</h2></a>
                
            </li>
            <li class="line"></li>
	            <!-- <li><a class="transition" href="" title=""><h2>sản phẩm</h2></a></li>
	            <li class="line"></li> -->
            <li><a class="transition" href="{{URL::to('/lien-he')}}" title=""><h2>liên hệ</h2></a></li>
            <li class="line"></li>
           <!--  <li><a class="transition" href="" title="Video"><h2>Video</h2></a></li>
            <li class="line"></li>
            <li><a class="transition" href="" title=""><h2>Tành bành</h2></a></li>     -->   
        </ul>
       
    </div>
</div>
				<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{route('cli_index')}}">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Menu
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Thức uống phổ biến</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												@foreach($cate as $c)
												<li>
													<a href="{{route('list_pro',$c->category_id)}}">{{$c['category_name']}}</a>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">Về chúng tôi</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product.html">Sản phẩm sắp ra mắt</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Liên hệ</a>
						</li>
						
					</ul>
				</div> -->
			</nav>
		</div>
	</div>