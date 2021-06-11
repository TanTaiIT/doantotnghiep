	<title>{{$meta_title}}</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<!-- <meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/> -->
	<meta name="title" content="{{$meta_title}}">
	<meta name="description" content="{{$meta_desc}}">

	<link  rel="icon" type="image/x-icon" href="" />
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<link rel="stylesheet" href="{!! asset('web/css/sweetalert.css')!!}" type="text/css" media="all"/>
	<!-- Custom-Files -->
	<link href="{!! asset('web/css/bootstrap.css')!!}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{!! asset('web/css/style.css')!!}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="{!! asset('web/css/fontawesome-all.css')!!}">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="{!! asset('web/css/popuo-box.css')!!}" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="{!! asset('web/css/menu.css')!!}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
	<!-- menu style -->
	<!-- //Custom-Files -->
    <link href="{!! asset('web/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('web/css/font-awesome.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('web/css/prettyPhoto.css')!!}" rel="stylesheet">
    <link href="{!! asset('web/css/price-range.css')!!}" rel="stylesheet">
    <link href="{!! asset('web/css/animate.css')!!}" rel="stylesheet">
	<link href="{!! asset('web/css/main.css')!!}" rel="stylesheet">
	<link href="{!! asset('web/css/responsive.css')!!}" rel="stylesheet">
	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<?php 
	  if($com=='detail'){ ?>
	  	<meta property="og:url"                content="{{$url_canonical}}" />
    <meta property="og:type"               content="articles" />
    <meta property="og:title"              content="{{$meta_title}}" />
    <meta property="og:site_name" content="{{$meta_title}}"/>
    <meta property="og:description"        content="{{$meta_desc}}" />
    <meta property="og:image"              content="{{$share_images}}" />
	  <?php }
	?>
	
	<!-- //web fonts -->
	