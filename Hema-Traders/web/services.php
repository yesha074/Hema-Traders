<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Hema Traders</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Our Services</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h2 class="w3_agile_header">Our Services</h2>
			<div class="about-agileinfo w3layouts">
				<div class="col-md-8 about-wthree-grids grid-top">
					<h2>Why choose us? </h2>
					<h3 size="12px"><p class="top">Hematraders provides unmatched services with proper 
					functioning. Our services have taken customer satisfaction to a whole
					new level. Apart from shopping you can use this address for communication
					and confidential matters. We will provide you a postal address, personal 
					shopper and a personal assistant as well.</p>
					<p>Combine multiple orders under one tracking number
					so all your packages will be delivered together.Shipping cost calculator					Estimate your shipping fees before you buy. It provides an estimate of 
					the costs to shop and ship your parcels globally.The concierge solution allows you to shop online in indian stores that 
					do not accept your card or payment methods.Our customer service is available 24/7 and in several languages.Our free repacking service will reduce the volume of 
					your packages and add a better protection to them.</p></h3>
				</div>
				<div class="col-md-4 about-wthree-grids">
					<div class="offic-time">
						<div class="time-top">
							<h4>What we have?</h4>
						</div>
						<div class="time-bottom">
							<h5>Having various categories </h5>
							<h5>And Brands</h5>
							<p>That can make your life easier and better. </p>
						</div>
					</div>
				<div class="testi">
						<h3 class="w3_agile_header">Testimonial</h3>
						<!--//End-slider-script -->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 5
							  $("#slider5").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider5">
								<li>
									<div class="testi-slider">
										<h4>" I AM VERY PLEASED."</h4>
										<p>The delivery of products in time and no damage I have found since years..</p>
										<div class="testi-subscript">
											<p><a href="#">Rajesh Vora,</a>Kitchen Store</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>"I feel Secure."</h4>
										<p>The return of products are also being done in hematraders any chance..</p>
										<div class="testi-subscript">
											<p><a href="#">Hemant Shah,</a>Supply Plastic</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
								<li>
									<div class="testi-slider">
										<h4>"I feel like inspiring."</h4>
										<p>The hard work of the team every second inspire me..</p>
										<div class="testi-subscript">
											<p><a href="#">Amit Dube,</a>Household Maker</p>
											<span class="w3-agilesub"> </span>
										</div>	
									</div>
								</li>
							</ul>	
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- about-slid -->
	<div class="about-slid agileits-w3layouts"> 
		<div class="container">
			<div class="about-slid-info"> 
				
				<h3 style="color:white;"><img src="images/serv 1.png">Consolidate your orders </h3>
					<h4><p class="top">Combine multiple orders under one tracking number
					so all your packages will be delivered together.</p></h4>
					
					<h3 style="color:white;"><img src="images/serv 2.png">Shipping cost calculator </h3>
					<h4><p class="top">Estimate your shipping fees before you buy. It provides an estimate of 
					the costs to shop and ship your parcels globally.</p></h4>
					
					<h3 style="color:white;"><img src="images/serv 3.png">Concierge 
					service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
					<h4><p>The concierge solution allows you to shop online in indian stores that 
					do not accept your card or payment methods.</p></h4>
				
					<h3 style="color:white;"><img src="images/serv 4.png">24/7 Customer 
					service&nbsp;&nbsp;&nbsp;</h3>
					<h4><p>Our customer service is available 24/7 and in several languages.</p></h4>
					
					<h3 style="color:white;">&nbsp;&nbsp;&nbsp;<img src="images/serv 5.png">Save upto 60% 
					on shipping fees</h3>
					<h4><p>Our free repacking service will reduce the volume of 
					your packages and add a better protection to them.

</p></h4>
				
			</div>
		</div>
	</div>
	<!-- //about-slid -->

<!-- //new -->
<?php include('footer.php'); ?>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>