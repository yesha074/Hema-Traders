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
	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="images/11.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3 style="color:white;">Get More Offers Now On Line</h3>
				</div>
			</li>
			<li>
				<img src="Product\New folder (3)\dwnld\PhotoGrid_1517741894612.jpg" alt="" />
				  <div class="slide-desc">
					<h3 style="color:white;">Products That Make Your Lifestyle Hassle Free</h3>
				</div>
			</li>
			
			<li>
				<img src="images/44.jpg" alt="" />
				<div class="slide-desc">
					<h3 style="color:white;">Best Quality Products</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2>Top selling offers</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Advertised offers</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours"  aria-expanded="true">Today Offers</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>Advertised this week</h5>
								<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
							</div>

					<?php getPro(); ?>
							
							
						<div class="clearfix"> </div>
						<br>
						<div role="tabpanel" class="tab-pane in active" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
								<h5>This week</h5>
								<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
							</div>

							<?php getPro(); ?>
						
					
					</div>
				</div>
			</div>
		</div><div class="clearfix"> </div>
	</div>
</div>
</div>
</div>
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="products.php"> <img class="first-slide" width="1600" height="250" src="Product\SALT SHAKER\MASALA 2 - Copy.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="products.php"> <img class="second-slide " width="1600" height="250" src="Product\MIXI\apex -29 - Copy.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="products.php"><img class="third-slide " width="1600" height="250" src="Product\KITCHENWARE\Nestwell_Brochure-page-044.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->	
<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
					<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<img src="Product\New folder (3)\dwnld\unnamed.gif" class="img-responsive" alt=""/>
								
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="Product\CUT @ WASH\RITU 2.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="Product\GARANI\APEX 2.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<img src="Product\New folder (3)\dwnld\spinner-bucket-and-mop-set.jpg" class="img-responsive" alt=""/>
								
								
							</div>
						</div>
						<div class="col-md-6 ban-bottom2">
							<div class="ban-top">
								<img src="Product\ICE CREAM SET\RITU.jpg" class="img-responsive" alt=""/>
								
								
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
<!--banner-bottom-->
<!--brands-->
	<div class="brands">
		<div class="container">
		<h3>Brands</h3>
			<div class="brands-agile">
				
				<?php
														
														$get_brands = "select * from brands";
														$run_brands= mysqli_query($con,$get_brands);
														while($row_brands=mysqli_fetch_array($run_brands)){
														$brand_id=$row_brands['brand_id'];
														$brand_title=$row_brands['brand_title'];
														$brand_img=$row_brands['brand_image'];
														echo "<div class='col-md-2 w3layouts-brand'>
					<div>
						<p><a href='brand.php?brand=$brand_id'><img height='80' width='140' title='$brand_title' alt=' ' src='admin/product_images/$brand_img'></a></p>
					</div>
				</div>";
														}
														?>
			</div>
		</div>
	</div>	
<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>New offers</h3>
				
							
<?php getPros(); ?>
								

						</div>
					</div>
						
				</div>
		
	</div>
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