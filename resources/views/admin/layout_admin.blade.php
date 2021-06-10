
<!DOCTYPE HTML>
<html>
<head>
<title>Trang quản lý</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{!! asset('layout_admin/css/bootstrap.min.css')!!}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{!! asset('layout_admin/css/style.css')!!}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{!! asset('layout_admin/css/lines.css')!!}" rel='stylesheet' type='text/css' />
<link href="{!! asset('layout_admin/css/font-awesome.css')!!}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{!! asset('layout_admin/js/jquery.min.js')!!}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{!! asset('layout_admin/css/custom.css')!!}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{!! asset('layout_admin/js/metisMenu.min.js')!!}"></script>
<script src="{!! asset('layout_admin/js/custom.js')!!}"></script>
<!-- Graph JavaScript -->
<script src="{!! asset('layout_admin/js/d3.v3.js')!!}"></script>
<script src="{!! asset('layout_admin/js/rickshaw.js')!!}"></script>
<script src="{!!asset('layout_admin/ckeditor/ckeditor.js')!!}"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Modern</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<!-- <li class="avatar">
							<a href="#">
								<img src="images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li> -->	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{!! asset('layout_admin/images/1.png')!!}"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>{{Auth::User()->name}}</strong>
						</li>
						<!-- <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li> -->
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="{{route('logout_auth')}}"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<!-- <form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form> -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{route('pro_index')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Bảng điều khiển</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/information')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Thông tin website</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Quản lý sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('pro_index')}}">Sản phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Quản lý loại sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('cate_index')}}">Loại sản phẩm</a>
                                </li>
                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Quản lý Thương hiệu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('brand_index')}}">Thương hiệu<u></u></a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Slide show<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('/manage-slider')}}">liệt kê slider<u></u></a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/add-slider')}}">Thêm slider<u></u></a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mã giảm giá<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('insert_coupon')}}">Thêm mã giảm giá<u></u></a>
                                </li>
                                 <li>
                                    <a href="{{route('list_coupon')}}">danh sách mã giảm giá<u></u></a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Vận chuyển<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('/delivery')}}">Quản lý vận chuyển<u></u></a>
                                </li>
                                
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>quản lý bài viết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{URL::to('/add-post')}}">Thêm bài viết</a></li>
                                <li><a href="{{URL::to('/all-post')}}">Liệt kê bài viết</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>quản lý danh mục bài viết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li><a href="{{URL::to('/add-category-post')}}">Thêm danh mục bài viết</a></li>
                        <li><a href="{{URL::to('/all-category-post')}}">Liệt kê danh mục bài viết</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        

                        
                        
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Quản lý đơn hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('/manage-order')}}">Đơn hàng<u></u></a>
                                </li>
                                
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        

                        <li>
                            <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Quản lý thuộc tính</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('add_attr')}}">thêm thuộc tính</a>
                                </li>
                                
                            </ul>
                        </li>
                        @hasrole(['admin','author'])
                        <li>
                            <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Quản lý User</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/add-users')}}">thêm User</a>
                                    <a href="{{url('/users')}}">liệt kê User</a>
                                </li>
                                
                            </ul>
                        </li>
                       @endhasrole

                       @chuyen
                        <li>
                                    <a href="{{URL::to('impersonate-destroy')}}">ngừng chuyển quyền<u></u></a>
                                </li>
                       @endchuyen
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        <div class="graphs">
        	Xin chào Admin
        <?php 
           $mes=Session::get('message');
           if(isset($mes)){
           	echo $mes;
           }
        ?>
</div>





      @yield('content')


       </div>

       <div class="clearfix"> </div>
    </div>
    <script src="{!! asset('layout_admin/js/bootstrap.min.js')!!}"></script>
    <script>
        $('#inputName').change(function(event){
           var _ip=$('#inputName').val();
           if(_ip =='size'){
             $('.value2').show();
             $('#v2').attr({
                name:'value',
             });
             $('.value1').hide();
             $('#v1').attr({
                name:'',
             });
             $('.value3').hide();
             $('#v3').attr({
                name:'',
             });
            }else if(_ip=='color'){
                $('.value1').show();
                $('#v1').attr({
                    name:'value',
                });
                $('.value2').hide();
                $('#v2').attr({
                    name:'',
                });
                $('.value3').hide();
                $('#v3').attr({
                    name:'',
                });
            }else if(_ip=='hot'){
                $('.value3').show();
                $('#v3').attr({
                    name:'value',
                });
                $('.value1').hide();
                $('#v1').attr({
                    name:'',
                });
                $('.value2').hide();
                $('#v2').attr({
                    name:'',
                });
            }
        });
         
    </script>
    <script type="text/javascript">
    $('.update_quantity_order').click(function(){
        var order_product_id = $(this).data('product_id');
        var order_qty = $('.order_qty_'+order_product_id).val();
        var order_code = $('.order_code').val();
        var _token = $('input[name="_token"]').val();
        // alert(order_product_id);
        // alert(order_qty);
        // alert(order_code);
        $.ajax({
                url : '{{url('/update-qty')}}',

                method: 'POST',

                data:{_token:_token, order_product_id:order_product_id ,order_qty:order_qty ,order_code:order_code},
                // dataType:"JSON",
                success:function(data){

                    alert('Cập nhật số lượng thành công');
                 
                   location.reload();
                    
              
                    

                }
        });

    });
</script>
    <script type="text/javascript">
    $('.order_details').change(function(){
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();

        //lay ra so luong
        quantity = [];
        $("input[name='product_sales_quantity']").each(function(){
            quantity.push($(this).val());
        });
        //lay ra product id
        order_product_id = [];
        $("input[name='order_product_id']").each(function(){
            order_product_id.push($(this).val());
        });
        j = 0;
        for(i=0;i<order_product_id.length;i++){
            //so luong khach dat
            var order_qty = $('.order_qty_' + order_product_id[i]).val();
            //so luong ton kho
            var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

            if(parseInt(order_qty)>parseInt(order_qty_storage)){
                j = j + 1;
                if(j==1){
                    alert('Số lượng bán trong kho không đủ');
                }
                $('.color_qty_'+order_product_id[i]).css('background','#000');
            }
        }
        
        if(j==0){
          
                $.ajax({
                        url : '{{url('/update-order-qty')}}',
                            method: 'POST',
                            data:{_token:_token, order_status:order_status ,order_id:order_id ,quantity:quantity, order_product_id:order_product_id},
                            success:function(data){
                                alert('Thay đổi tình trạng đơn hàng thành công');
                                location.reload();
                            }
                });
            
        }

    });
</script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(imgPre).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#ful').change(function () {
            readURL(this, '#imgPre');
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){

        fetch_delivery();

        function fetch_delivery(){
            var _token = $('input[name="_token"]').val();
             $.ajax({
                url : '{{url('/select-feeship')}}',
                method: 'POST',
                data:{_token:_token},
                success:function(data){
                   $('#load_delivery').html(data);
                }
            });
        }
        $(document).on('blur','.fee_feeship_edit',function(){

            var feeship_id = $(this).data('feeship_id');
            var fee_value = $(this).text();
             var _token = $('input[name="_token"]').val();
            // alert(feeship_id);
            // alert(fee_value);
            $.ajax({
                url : '{{url('/update-delivery')}}',
                method: 'POST',
                data:{feeship_id:feeship_id, fee_value:fee_value, _token:_token},
                success:function(data){
                   fetch_delivery();
                }
            });

        });
        $('.add_delivery').click(function(){

           var city = $('.city').val();
           var province = $('.province').val();
           var wards = $('.wards').val();
           var fee_ship = $('.fee_ship').val();
            var _token = $('input[name="_token"]').val();
           // alert(city);
           // alert(province);
           // alert(wards);
           // alert(fee_ship);
            $.ajax({
                url : '{{url('/insert-delivery')}}',
                method: 'POST',
                data:{city:city, province:province, _token:_token, wards:wards, fee_ship:fee_ship},
                success:function(data){
                   fetch_delivery();
                }
            });


        });
        $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            // alert(action);
            //  alert(matp);
            //   alert(_token);

            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        }); 
    })


</script>


 <script  type="text/javascript">
       // Replace the <textarea id="editor1"> with a CKEditor
       // instance, using default configuration.
  
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor1',{

            filebrowserImageUploadUrl : "{{ url('uploads-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl : "{{ url('file-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form'

        });

        CKEDITOR.replace('ckeditor2', {

            filebrowserImageUploadUrl : "{{ url('uploads-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl : "{{ url('file-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form'

        });

        CKEDITOR.replace('ckeditor3',{

            filebrowserImageUploadUrl : "{{ url('uploads-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl : "{{ url('file-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('id4');

     
    
</script>
</body>
</html>
