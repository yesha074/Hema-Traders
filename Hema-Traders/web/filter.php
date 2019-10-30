<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<?php
$min = 100;
$max = 300;

if (! empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (! empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}

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
<link rel="stylesheet"
    href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#min" ).val(ui.values[ 0 ]);
		$( "#max" ).val(ui.values[ 1 ]);
      }
      });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>

<style>


.form-price-range-filter {
	text-align: center;
}

.tutorial-table {
    width: 100%;
    font-size: 13px;
    border-top: #e5e5e5 1px solid;
    border-spacing: initial;
    margin: 20px 0px;
    word-break: break-word;
}

.tutorial-table th {
    background-color: #f5f5f5;
	padding: 10px 20px;
	text-align: left;
}

.tutorial-table td {
    border-bottom: #f0f0f0 1px solid;
    background-color: #ffffff;
	padding: 10px 20px;
}

.text-right {
	text-align: right;
}

th.text-right {
	text-align: right;
}

.btn-submit {
	margin-top: 20px;
	padding: 10px 20px;
	background: #FFF;
	border: #aaa 1px solid;
	border-radius: 4px;
	margin: 20px 0px;
}

#min {
	float: left;
	width: 50px;
	padding: 5px 10px;
	margin-right: 14px;
}

#slider-range {
	width: 75%;
	height:15px;
	float: left;
	margin: 5px 0px 5px 0px;
}

#max {
	float: right;
	width: 50px;
	padding: 5px 10px;
}

.no-result {
	padding: 20px;
	background: #ffdddd;
	text-align: center;
	border-top: #d2aeb0 1px solid;
	color: #6f6e6e;
}

.product-thumb {
	width: 50px;
	height: 50px;
	margin-right: 15px;
	border-radius: 50%;
	vertical-align: middle;
}
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
				  <div class="form-price-range-filter">
        <form method="post" action="">
            <div>
                <input type="" id="min" name="min_price"
                    value="<?php echo $min; ?>">
                <div id="slider-range"></div>
                <input type="" id="max" name="max_price"
                    value="<?php echo $max; ?>">
            </div>
            <div>
                <input type="submit" name="submit_range"
                    value="Filter Product" class="btn-submit">
            </div>
        </form>
    </div>	
		
							<?php
							

												$result = mysqli_query($con, "select * from products where product_price BETWEEN '$min' AND '$max'");

                                                 $count = mysqli_num_rows($result);
                                                 if ($count > 0) {
												//$run_products=mysqli_query($con,$result);
															while($row_products=mysqli_fetch_array($result)){
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
															}
							?>					
</div>
<center>
				
					
						
							
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