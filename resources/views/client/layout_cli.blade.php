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

	@include('inc.search_form')
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
	<?php 
	if($com=='cart'){ ?> 
		@include('inc.boot_detail');
		@include('inc.plush');
	<?php } ?>


</body>

</html>