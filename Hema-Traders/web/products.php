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

<style>
.pagination1{margin-top:30px;}
.pagination1 li{display:inline-block; margin:0 5px;}
 .pagination1 li a{display:inline-block; padding:8px 12px; border:1px solid #eee;}
 .pagination1 li a.active{font-weight:bold; background:orange;}
</style>
</head>
	
<body>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- products --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Categories</h2>
					<ul class="cate">
						<li><a href="kitchenware.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Kitchenware</a></li>
							
						<li><a href="plasticware.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Plasticware</a></li>

						<li><a href="cleaning.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cleaning Accesories</a></li>

					</ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						<div class="sorting">
						<form action="filter.php" method="post" >
							<a href="filter.php"><input type="submit" name="submit" value="Filter" class="button" style="background:#fe9126;color:white;padding:10px 25px 10px 25px;float:right;border:none;border-radius:5px;"></a>
						</form>
						</div>
						
						<div class="clearfix"> </div>
					</div>
				</div>		<div>		
		
							<?php
							
										if(isset($_GET['page'])){
											$page = $_GET['page'];
										}
										else{
											$page=1;
										}
										if($page == '' || $page==1){
											$page1=0;
										}else{
											$page1=($page*8)-6;
										}
														$get_products="select * from products ORDER BY product_id ASC LIMIT ".$page1.", 9";
														
														$run_products=mysqli_query($con,$get_products);
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
<center>

<?php
$get_products="select * from products";
														
$run_products=mysqli_query($con,$get_products);

$records=mysqli_num_rows($run_products);
$record_pages=$records/9;
$record_pages=ceil($record_pages);
$prev=$page-1;
$next=$page+1;
	echo '<ul class="pagination1">';
	if($prev >= 3){
		echo "<li class='active'><a href='?page=1'><span aria-hidden='true'>First</span>
							</a>
						</li>";
	}
	if($prev >= 1){
		echo "<li><a href='?page=".$prev."'><span aria-hidden='true' title='Previous'>&laquo;</span>
							</a>
						</li>";
	}
if($record_pages >= 2){
	for($r=1;$r<=$record_pages;$r++){
		$active = $r == $page ? 'class="active"' : "";
		echo "<li class='active'><a href='?page=".$r."' ".$active.">".$r."</a></li>";
	}
}
if($next <= $record_pages && $record_pages >= 2){
		echo "<li><a href='?page=".$next."'><span aria-hidden='true' title='Next'>&raquo;</span>
							</a>
						</li>";
	}
if($page != $record_pages && $record_pages >= 3){
	
	echo "<li><a href='?page=".$record_pages."'><span aria-hidden='true'>Last</span>
							</a>
						</li>";
}
echo '</ul>';
?>
				
					
						
							
			</center>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- products --->
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