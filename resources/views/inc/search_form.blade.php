<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="{{route('cli_index')}}" class="font-weight-bold font-italic">
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
							<form class="form-inline" action="{{route('cli_search')}}" autocomplete="off" method="post">
								{{csrf_field()}}
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" id="keywords" required>
                                <div id="search_ajax"></div>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>


<div class="container1">

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-primary" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>

                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach

                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ number_format($total) }} đ</span></p>
                        </div>
                    </div>

                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <?php 
                           $sub=$details['price']*$details['quantity']
                        ?>
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img width="50px" height="50px" src="{!! asset('images/'.$details['image'])!!}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }} </p>
                                    <span class="price text-info"></span> ${{ number_format($details['price']) }} đ <span class="count">Quantity:{{ $details['quantity'] }} </span><br><span>Size:{{$details['size']}}</span><br><span>Color:<i class="fas fa-heart" style="color: {{$details['color']}}"></i></span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{route('checkout')}}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>