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
				<li class="active">About</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h3 class="w3_agile_header">About Us</h3>
			<div class="about-agileinfo w3layouts">
				<div class="col-md-8 about-wthree-grids grid-top">
					<h4>What is hematraders.com </h4>
					<p class="top">hematraders.com (Innovative Retail  and wholeselling Concepts  Limited) is India's online kichenware,plasticware and cleaning accessories store. With over 18,000 products and over a 1000 brands in our catalogue you will find everything you are looking for.</p>
					<p>Right from Apple cutter,Atta maker,Bathroom set,Bucket,Chess grater,Chilly cutter, Chopping board,Combo pack,Corn cutter,Cut @wash,Fruit frok,Fruit juicer,Gamala,Gas trolly,Garani,Gas leg,Glass set,Glass stand,Gola maker,Hot mate,Ice cream set,Khal batta,Kitchen press,Kitchenware,Knife,Lemon Sqeeral,Lighter,Matka stand,Meduvada maker,Mixi,Mop &cleaning,Mug,Multi chopper,Multi cutter, - we have it all. </p>		
					<div class="about-w3agilerow">
						<div class="col-md-4 about-w3imgs">
							<img src="Product\New folder (3)\dwnld\images (2).jpeg" alt="" class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-w3imgs">
							<img src="Product\New folder (3)\dwnld\images (3).jpeg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-w3imgs">
							<img src="Product\New folder (3)\dwnld\unnamed.gif" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="clearfix"> </div>
					</div>
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
				<h2>Why should I use hematraders.com?</h2>
				<p>hematraders.com allows you to walk away from the drudgery of household products and welcome an easy relaxed way of browsing and shopping for household products. Discover new products and shop for all your household product needs from the comfort of your home. No more getting stuck in traffic jams, paying for parking, standing in long queues and carrying heavy bags – get everything you need, when you need, right at your doorstep. house hold product online is now easy as every product on your monthly shopping list, is now available online at hematraders.com, India’s best online house hold product store.</p>
			</div>
		</div>
		</br>
		<div class="container">
			<div class="about-slid-info"> 
				<h2>Where do we operate?</h2>
				<p>We currently offer our services in Ahmedabad city limits.</p>
			</div>
		</div>
	</div>
	
		
	
	<!-- //about-slid -->
	<!-- about-team -->
	<div class="about-team"> 
		<div class="container">
			<h3 class="w3_agile_header">Meet Our Team</h3>
			<div class="team-agileitsinfo">
				<div class="col-md-3 about-team-grids">
					<img src="images/dilipbhai.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>Dilip Patel,</span> Owner</h4>
						<p>The Owner of Hematraders who have build the empowerment and build the valuable supply of products.</p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
					
				</div>
				<div class="agile_map col-md-6" style="float:center;width:350;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3905851087434!2d-34.90500565012194!3d-8.061582082752993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d90992e4ab%3A0x8e83c4afabe39a3a!2sSport+Club+Do+Recife!5e0!3m2!1sen!2sin!4v1478684415917" style="border:0"></iframe>
				</div>
				<div class="col-md-3 about-team-grids" style="float:right">
					<img src="images/t2.jpg" alt=""/>
					<div class="team-w3lstext">
					<img src="images/ravi.png" alt=""/>
						<h4><span>Ravi Patel,</span> Manager</h4>
						<p>The Manager of Hematraders who manages the entire supply and orders of hemetraders.</p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->

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