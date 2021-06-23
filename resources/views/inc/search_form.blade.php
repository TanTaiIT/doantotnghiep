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
								<button class="btn my-2 my-sm-0" type="submit">Tìm kiếm</button>
							</form>
						</div>

<?php $total = 0 ?>
@foreach((array) session('cart') as $id => $details)
    <?php $total += $details['price'] * $details['quantity'] ?>
@endforeach
<div id="wrapper">
  <div class="cart-tab visible">      
    <a href="#" title="View your shopping cart" class="cart-link">
<!--     <i style="font-size: 20px"class="fas fa-shopping-cart"></i> -->
      <span class="amount">{{ number_format($total) }}đ</span>
      <span class="contents"><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span> sản phẩm</span>
    </a>
    <div class="cart">

      <img class=" left1" width="70px" height="60px" src="../web/images/so.jpg" alt="">


      <div class="cart-items">
        <ul>
@if(session('cart'))
@foreach(session('cart') as $id => $details)
<?php 
    $gia=$details['price']-$details['price_pro'];
    $sub=$details['price']*$details['quantity'];

    
                                                
?>
          <li class="clearfix">
            <div class="img-con">
            <img width="70px" height="150px" class="productimg img-thumbnail" src="{!! asset('images/'.$details['image'])!!}" />
            </div>
            <div class="detail">
            <h5>{{ $details['name'] }}</h5>
            <span class="item-price">Giá:{{number_format($gia)}} đ</span>
            <span class="quantity1">Số lượng: {{ $details['quantity'] }}</span><br>
            <span>Size:{{$details['size']}}</span><br><span>
            
            <span>Loại:{{$details['hot']}}</span>

            
            </div>
            <div class="bu" style="margin-left:20px">
                <button title="xóa khỏi giỏ hàng" style="font-size: 10px;" class="btn btn-danger btn remove-from-cart" data-id="{{ $id }}"><i class="fas fa-trash"></i></button> 
            </div>

          </li>
  
          
@endforeach
@endif
        </ul>
      </div><!-- @end .cart-items -->

      <a href="{{route('checkout')}}" class="checkout">Đi tới giỏ hàng →</a>
    </div><!-- @end .cart -->
  </div><!-- @end .cart-tab -->
					</div>
				</div>
			</div>
		</div>
	</div>
