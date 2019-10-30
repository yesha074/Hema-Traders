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
				<li class="active">Plasticwareware</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<div class="container">
<?php
$get_cat_pro="select * from products where cat_id='2'";		
														
														$run_products=mysqli_query($con,$get_cat_pro);
															while($row_products=mysqli_fetch_array($run_products)){
															$pro_id=$row_products['product_id'];
															$pro_title=$row_products['product_title'];
															$pro_cat=$row_products['cat_id'];
															$pro_desc=$row_products['product_desc'];
															$pro_price=$row_products['product_price'];
															$pro_image=$row_products['product_img1'];
															echo "
														<div class='agile_top_brands_grids'>
															<div class='col-md-4 top_brand_left'>
																<div class='hover14 column'>
																	<div class='agile_top_brand_left_grid'>
																		<div class='agile_top_brand_left_grid_pos'>
																			<img src='images/offer.png' alt=' ' class='img-responsive' />
																		</div>
																	<div class='agile_top_brand_left_grid1'>
																		<figure>
																			<div class='snipcart-item block' >
																				<div class='snipcart-thumb'>
																					<div>
																						<a href='single.php?pro_id=$pro_id'><img height='150' width='170' src='admin/product_images/$pro_image' /></a>	
																						<p>$pro_title</p>
																						<div class='stars'>
																							<i class='fa fa-star blue-star' aria-hidden='true'></i>
																							<i class='fa fa-star blue-star' aria-hidden='true'></i>
																							<i class='fa fa-star blue-star' aria-hidden='true'></i>
																							<i class='fa fa-star blue-star' aria-hidden='true'></i>
																							<i class='fa fa-star gray-star' aria-hidden='true'></i>
																						</div>
																					<h4>Rs$pro_price.00</h4>
																					</div>
																					
																					
																						<div class='snipcart-details top_brand_home_details'>
											<span><a href='login.php?buy=$pro_id'><input type='submit' name='submit' value='Buy Now' class='button' /></a></span>
																						</div>

													<div class='snipcart-details top_brand_home_details'>
													<span><a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='Add to cart' class='button' /></a></span>
												
											</div>
																				</div>
																			</div>
																		</figure>
																	</div>
																	</div>
																</div>
															</div>
								
														</div>";
														}
							
?>
	</div>
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