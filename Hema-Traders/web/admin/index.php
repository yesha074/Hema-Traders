<?php
session_start();
include("../includes/db.php");
include("../functions/functions.php");
if(!isset($_SESSION['admin_email']))
{
	echo "<script>window.open('login.php','_self')</script>";
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
<title>Hema Traders</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
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
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p><h1><font color="white">ADMIN PANEL</font></h1></p>
			</div>
			<?php cart(); 
			
			?>
			<div class="agile-login">
				<ul>
				<?php
				
				if(!isset($_SESSION['admin_email'])){ 
					echo "<li><a href='index.php'> Welcome to Admin Panel! </a></li>";
				}				
				else{
					
					echo "<li><a href='index.php'> Welcome  "."<span style='color:yellow'>".$_SESSION['admin_email']."</span>"."!</a></li>";
				}
				?>
					
					<?php
					if(!isset($_SESSION['admin_email'])){
						echo "<li><a href='login.php'>Login</a></li>";
						/*echo "<li class='dropdown'>";
									echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Login<b class='caret'></b></a>";
										echo "<ul class='dropdown-menu multi-column columns-2'>";
											echo "<div class='row'>";
												echo "<div class='multi-gd-img'>";
													echo "<ul class='multi-column-dropdown'>";
														echo "<a href='login.php'><h6>Accounts</h6></a>";*/

						
					}
					else{
						echo "<li><a href='logout.php' style='color:#F93;'><h5>Logout</h5></a></li>";
						
					}
					
					?>
				</ul>
			</div>
			
			<div>  
					<li><img src="styles/adminpro.jpg" height="2%" width="4%"></li>

			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Contact number: 95102 01225</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Hema Traders</a></h1>
			</div>
		<div class="w3l_search">
			<form action="index.php?search" method="get" enctype="multipart/form-data">
				<input type="search" name="user_query" placeholder="Search for a Product..." required="">
				<button type="submit" name="search" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"></i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"></li>
									
									<li class="active"><a href="index.php?insert_product" class="act">Insert New Products</a></li>	
									<li class="active"><a href="index.php?page" class="act">View All Products</a></li>	
									<li class="active"><a href="index.php?insert_cat" class="act">Categories</a></li>
									<li class="active"><a href="index.php?insert_brand" class="act">Brands</a></li>
									<li class="active"><a href="index.php?view_customers" class="act">View Customers</a></li>
									<li class="active"><a href="index.php?view_orders" class="act">View Orders</a></li>	
									<li class="active"><a href="index.php?view_payments" class="act">View Payments</a></li>
									
								
								</ul>
							</div>
												
												
		</div>
							
	</div>
			</nav>
		</div>
	</div>
	<br>
	<div style='background:url(../images/11.jpg); background-repeat:no-repeat; background-size:100% 100%;'>
	<?php
				if(isset($_GET['insert_product']))
				{
					include("insert_products.php");
				}
				if(isset($_GET['page']))
				{
					include("view_products.php");
		    	}
				if(isset($_GET['search']))
				{
					include("search.php");	
		    	}
				if(isset($_GET['search1']))
		     	{
					include("searchpay.php");
					} 
				if(isset($_GET['search2']))
				{
					include("searchorder.php");
				} 
				if(isset($_GET['search3']))
				{
					include("searchcustomer.php");
				} 
				if(isset($_GET['edit_pro']))
				{
					include("edit_pro.php");
				}
				if(isset($_GET['insert_cat']))
				{
					include("insert_cat.php");
				}
				if(isset($_GET['edit_cat']))
				{
					include("edit_cat.php");
				}
				if(isset($_GET['insert_brand']))
				{
					include("insert_brand.php");
				}
				if(isset($_GET['edit_brand']))
				{
					include("edit_brand.php");
				}
				if(isset($_GET['view_customers']))
				{
					include("view_customers.php");
				}
				if(isset($_GET['view_orders']))
				{
					include("view_orders.php");
				}
				if(isset($_GET['view_payments']))
				{
					include("view_payments.php");
				}			
	?>
	</div>
		
<!-- //navigation -->
	<!-- main-slider -->
	<div>
		<ul id="demo1">
			<li>
				<img src="../images/11.jpg" alt="" />
				<!--Slider Description example-->
				<!--<div class="slide-desc">
					<h3 style="color:white;">Get More Offers Now On Line</h3>
				</div>-->
			</li>
			<li>
				<img src="../Product\New folder (3)\dwnld\PhotoGrid_1517741894612.jpg" alt="" />
				  <!--<div class="slide-desc">
					<h3 style="color:white;">Products That Make Your Lifestyle Hassle Free</h3>
				</div>-->
			</li>
			
			<li>
				<img src="../images/44.jpg" alt="" />
				<!--<div class="slide-desc">
					<h3 style="color:white;">Best Quality Products</h3>
				</div>-->
			</li>
		</ul>
		
	<!-- //main-slider -->
	

				
	<div class="brands">
		<div class="container">
		<h3>Brands</h3>
			<div class="brands-agile">
				<div class="col-md-2 w3layouts-brand">
					<div>
						<p><a href="ritu_products.php"><img height="80" width="140" title=" " alt=" " src="../Product\New folder (3)\ritulogo.jpg"></a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div>
						<p><a href="shaan_products.php"><img height="80" width="140" title=" " alt=" " src="../Product\New folder (3)\shaanlogo.jpg"></a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div>
						<p><a href="hallmark_products.php"><img height="80" width="140" title=" " alt=" " src="../Product\New folder (3)\hallmarklogo.jpg"></a></p>
					</div>
				</div>
				
				<div class="col-md-2 w3layouts-brand">
					<div>
						<p><a href="nestwell_products.php"><img height="80" width="140" title=" " alt=" " src="../Product\New folder (3)\nestwellLogo.jpg"></a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div>
						<p><a href="apex_products.php"><img height="80" width="140" title=" " alt=" " src="../Product\New folder (3)\apexlogo.jpg"></a></p>
					</div>
				</div>
				<div class="col-md-2 w3layouts-brand">
					<div>
						<p><a href="shakti_products.php"><img height="80" width="140" title=" " alt=" " src="../Product\New folder (3)\shaktilogo.jpg"></a></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>	
<!--//brands-->

						
				</div>
		
	</div>
<!-- //new -->
<!-- //footer -->
<div class="footer" >
		<div class="container"style="float:center;">
			<div class="w3_footer_grids" >
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<span>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>48, Chandra Society, <span>Opp. Rajendra Park, </span><span>Nr Geeta-Gouri Cinema,</span> <span>Odhav Road,Ahmedabad-380018</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">hematraders@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 95102 01225</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Menu</h3>
					<ul class="info"> 
						
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="index.php?insert_product">Insert Products</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="index.php?page">View All Products</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="index.php?insert_cat">Categories</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="index.php?insert_brand">Brands</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="index.php?view_customers">View Customers</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="index.php?view_orders">View Orders</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="index.php?view_payments">View Payments</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			<div class="container">
				<p>&copy; 2018 Hema Traders. All rights reserved</p>
			</div>
		</div>	
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="../images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
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
<script src="../js/skdslider.min.js"></script>
<link href="../css/skdslider.css" rel="stylesheet">
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
<?php } ?>