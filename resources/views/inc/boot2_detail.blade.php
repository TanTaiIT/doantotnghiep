    <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/css/formValidation.min.css"></script>
	<script src="{!! asset('web/js/jquery-2.2.3.min.js')!!}"></script>
  
    <script src="{!! asset('web/js/jquery.simplyscroll.js')!!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="{!! asset('web/js/slick.js')!!}"></script>
     <script>
        $('.run1').slick({
            lazyLoad: 'progressive', infinite: true, accessibility:false, vertical:false, slidesToShow: 3,  
            slidesToScroll: 1, autoplay:true,  autoplaySpeed:3000, speed:1000, arrows:true, 
            centerMode:false,  dots:false,  draggable:true, variableWidth:false,
        });

    </script>
    <script>
        $('.rundt').slick({
            lazyLoad: 'progressive', infinite: true, accessibility:false, vertical:false, slidesToShow: 1,  
            slidesToScroll: 1, autoplay:true,  autoplaySpeed:3000, speed:1000, arrows:true, 
            centerMode:false,  dots:false,  draggable:true, variableWidth:true,
        });

    </script>
    
      <script type="text/javascript">
        $(document).ready(function(){
            load_comment();
            function load_comment(){
                var product_id = $('.comment_product_id').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:'{{url("cli/load-comment")}}',
                    method:"POST",
                    data:{product_id:product_id,_token:_token},
                    success:function(data){
                        $('#comment_show').html(data);
                    }
                });
             }
             $('.send-comment').click(function(){
                var product_id = $('.comment_product_id').val();
                var comment_name = $('.comment_name').val();
                var comment = $('.comment_content').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:'{{url("cli/send-comment")}}',
                    method:"POST",
                    data:{product_id:product_id,comment_name:comment_name,comment:comment,_token:_token},
                    success:function(data){
                        
                        $('#notify_comment').html('<span class="text text-success">Thêm bình luận thành công, bình luận đang chờ duyệt</span>');
                        load_comment();
                        $('#notify_comment').fadeOut(10000);
                        $('.comment_name').val('');
                        $('.comment').val('');
                    }
                });
             });
    });
    </script> 


    
	<script type="text/javascript">
        $('.xemnhanh').click(function(){
            var product_id = $(this).data('id_product');
            var _token = $('input[name="_token"]').val();
            $.ajax({
            url:"{{url('/quickview')}}",
            method:"POST",
            dataType:"JSON",
            data:{product_id:product_id, _token:_token},
              success:function(data){
                $('#product_quickview_title').html(data.product_name);
                $('#product_quickview_id').html(data.product_id);
                $('#product_quickview_price').html(data.product_price);
                $('#product_quickview_image').html(data.product_image);
                $('#product_quickview_gallery').html(data.product_gallery);
                $('#product_quickview_desc').html(data.product_desc);
                $('#product_quickview_content').html(data.product_content);
                $('#product_quickview_value').html(data.product_quickview_value);
                $('#product_quickview_button').html(data.product_button);
                $('#product_soluong').html(data.product_soluong);
                
              }
            });
        });
        $(document).on('click','.redirect-cart',function(){
                window.location.href = "{{url('/cli/checkout')}}";
            });
   
</script>

<script src="{!! asset('web/js/imagezoom.js')!!}"></script>
    <link rel="stylesheet" href="{!! asset('web/css/flexslider.css')!!}" type="text/css" media="screen" />
    <script src="{!! asset('web/js/jquery.flexslider.js')!!}"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
<script src="{!! asset('web/js/jquery.magnific-popup.js')!!}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>

 <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
              
                var id = $(this).data('id_product');
                var size=$('input[name=size]:checked').val();
                var hot=$('input[name=hot]:checked').val();
                var soluong=$('.cart_product_sl').val();
                var _token = $('input[name="_token"]').val();
                var sl=$('.cart_soluong').val();
                if(parseInt(soluong) > parseInt(sl)){
                    toastr.warning("số lượng bạn đặt lớn hơn số sản phẩm mà chúng tôi có, làm ơn đặt số lượng nhỏ hơn" + " "+ sl);
                }else{
                if($("input:radio[name='size']").is(":checked") && $("input:radio[name='hot']").is(":checked")) {
                    $.ajax({
                        url: '{{url('/cart')}}',
                        method: 'POST',
                        data:{id:id,_token:_token,size:size,hot:hot,soluong:soluong},
                        beforeSend: function(){
                            $("#beforesend_quickview").html("<img width='30px' height='30px'src='../../web/images/Spinner-3.gif'>");
                        },
                        success:function(){
                            
                            $("#beforesend_quickview").html("<p class='text text-success'>Sản phẩm đã thêm vào giỏ hàng</p>");
                            window.location.reload();
                           
                           
                           
                        }

                    });
              }else{
                toastr.warning('bạn cần phải chọn đầy đủ thông tin trước khi mua hàng');
              }
                }
                
            });
        });
    </script>
  <script type="text/javascript">
       
            $(document).on('click','.add-to-cart-quickview',function(){
                var id = $(this).data('id_product');
                var size=$('input[name=size]:checked').val();
                var hot=$('input[name=hot]:checked').val();
                var soluong=$('.cart_product_sl').val();
                var _token = $('input[name="_token"]').val();
                if($("input:radio[name='size']").is(":checked") && $("input:radio[name='hot']").is(":checked")) {
                    $.ajax({
                        url: '{{url('/cart')}}',
                        method: 'POST',
                        data:{id:id,_token:_token,size:size,hot:hot,soluong:soluong},
                            success:function(error){
                                // toastr.warning('sản phẩm bạn đặt quá lớn, vui lòng đặt với số lượng nhỏ hơn');
                                window.location.reload();
                        // beforeSend: function(){
                        //     $("#beforesend_quickview").html("<img width='30px' height='30px' src='../public/web/images/Spinner-3.gif'>");
                        // },
                        // success:function(){
                        //     $("#beforesend_quickview").html("<p class='text text-success'>Sản phẩm đã thêm vào giỏ hàng</p>");
                        //     window.location.reload();

                            

                        }
                        

                    });
                }else{
                     toastr.warning('bạn cần phải chọn đầy đủ thông tin trước khi mua hàng');
                }
            });
        
    </script>
	<script type="text/javascript">
	$(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            // if(confirm("bạn có chắc muốn xóa không")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();

                        // alert('đã xóa sản phẩm ra khỏi giỏ hàng');
                    }
                });
            // }
        });
        </script>
        <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents('tr').find('.quantity').val()},
               success: function (data) {
                 window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            // if(confirm("bạn có chắc muốn xóa không")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();

                        // alert('đã xóa sản phẩm ra khỏi giỏ hàng');
                    }
                });
            // }
        });

    </script>
	   <script type="text/javascript">
    function remove_background(product_id)
     {
      for(var count = 1; count <= 5; count++)
      {
       $('#'+product_id+'-'+count).css('color', '#ccc');
      }
    }
    //hover chuột đánh giá sao
   $(document).on('mouseenter', '.rating', function(){
      var index = $(this).data("index");
      var product_id = $(this).data('product_id');
    // alert(index);
    // alert(product_id);
      remove_background(product_id);
      for(var count = 1; count<=index; count++)
      {
       $('#'+product_id+'-'+count).css('color', '#ffcc00');
      }
    });
   //nhả chuột ko đánh giá
   $(document).on('mouseleave', '.rating', function(){
      var index = $(this).data("index");
      var product_id = $(this).data('product_id');
      var rating = $(this).data("rating");
      remove_background(product_id);
      for(var count = 1; count<=rating; count++)
      {
       $('#'+product_id+'-'+count).css('color', '#ffcc00');
      }
     });

    //click đánh giá sao
    $(document).on('click', '.rating', function(){
          var index = $(this).data("index");
          var product_id = $(this).data('product_id');
          var _token = $('input[name="_token"]').val();
          $.ajax({
           url:"{{url('/insert-rating')}}",
           method:"POST",
           data:{index:index, product_id:product_id,_token:_token},
           success:function(data)
           {
            if(data == 'done')
            {
                 window.location.reload();
            }
            else
            {
             alert("Lỗi đánh giá");
            }
           }
    });
          
    });
    </script>
	<script type="text/javascript">
    $('#keywords').keyup(function(){
        var query = $(this).val();

          if(query != '')
            {
             var _token = $('input[name="_token"]').val();

             $.ajax({
              url:"{{url('/autocomplete-ajax')}}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               $('#search_ajax').fadeIn();  
                $('#search_ajax').html(data);
              }
             });

            }else{

                $('#search_ajax').fadeOut();  
            }
    });

    $(document).on('click', '.li_search_ajax', function(){  
        $('#keywords').val($(this).text());  
        $('#search_ajax').fadeOut();  
    }); 
</script>
	<script>
		$(function(){
			$('.orderby').change(function(){
				$('#form_order').submit();
			});
		});
	</script>
	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<script src="{!! asset('web/js/amazingslider.js')!!}"></script>
	<script src="{!! asset('web/js/initslider-1.js')!!}"></script>
	<script>
		$(document).ready(function(){
			function thongbao(){
				$.bootstrapGrowl("đã thêm sản phẩm vào giỏ hàng");
			}
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="{!! asset('web/js/sweetalert.min.js')!!}"></script>
	<script src="{!! asset('web/js/minicart.js')!!}"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	
	<!-- //password-script -->
	
	<!-- scroll seller -->
	<script src="{!! asset('web/js/scroll.js')!!}"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="{!! asset('web/js/SmoothScroll.min.js')!!}"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{!! asset('web/js/move-top.js')!!}"></script>
	<script src="{!! asset('web/js/easing.js')!!}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="{!! asset('web/js/sweetalert.min.js')!!}"></script>
<script type="text/javascript">

          $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                  title: "Xác nhận đơn hàng",
                  text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Cảm ơn, Mua hàng",

                    cancelButtonText: "Đóng,chưa mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               // swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                               window.location='{{url('/thankyou')}}';
                            }
                        });

                        // window.setTimeout(function(){ 
                        //     location.reload();
                        // } ,3000);

                      } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

                      }
              
                });

               
            });
        });
    

    </script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="{!! asset('web/js/bootstrap.js')!!}"></script>
	<script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
           
            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        });
        });
          
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Làm ơn chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload(); 
                    }
                    });
                } 
        });
    });
    </script>

    <link rel="stylesheet" type="text/css" href="{!! asset('web/css/easy-responsive-tabs.css')!!} " />
    <script src="{!! asset('web/js/easyResponsiveTabs.js"></script>

    <script>
        $(document).ready(function () {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>

    <script>
$(document).ready(function(){
    if($(".newshome-scroll ul").exists())
    {
        $(".newshome-scroll ul").simplyScroll({
            customClass: 'vert',
            orientation: 'vertical',
            // orientation: 'horizontal',
            auto: true,
            manualMode: 'auto',
            pauseOnHover: 1,
            speed: 1,
            loop: 0
        });
    }

});
    
    

    </script>

 



	
