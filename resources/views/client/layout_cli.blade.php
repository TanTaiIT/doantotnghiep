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
		@include('inc.slide')
	<?php } ?>
	



	@yield('content')




	@include('inc.footer')

	
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.074425170947!2d106.69275991474917!3d10.80561179230171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c6b3087445%3A0x9f9e59544876ddf!2zMzU2LCA3IE7GoSBUcmFuZyBMb25nLCBwaMaw4budbmcgNywgQsOsbmggVGjhuqFuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1621256673555!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

	<!-- <div id="googleMap" style="height:400px;width:100%;"></div>
	
	<script>
		var myCenter=new google.maps.LatLng(10.7889343, 106.7040522);
		function initialize(){
			var mapProp={
				center:myCenter,
				zoom:12,
				scrollwheel:false,
				draggable:false,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker=new google.maps.Marker({
				position:myCenter,
			});
			marker.setMap(map);
			}
			google.maps.event.addDomListener(window,'load',initialize);
		
	</script> -->


	<?php 
	if($com=='index'){ ?>
		@include('inc.boot2_detail')
	 <?php } ?>
	 <?php 
	if($com=='detail'){ ?>
		@include('inc.boot_detail')
	 <?php } ?>
	<?php 
	if($com=='cart'){ ?> 
		@include('inc.boot_detail')
		@include('inc.plush')
	<?php } ?>
	<?php
	if($com=='payment'){ ?> 
		@include('inc.payment')
	<?php } ?>
	?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/css/formValidation.min.css"></script>
	<script type="text/javascript">
	$.validate({

	});
	</script>

</body>

</html>