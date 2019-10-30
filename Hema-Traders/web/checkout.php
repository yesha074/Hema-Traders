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
			<ol class="breadcrumb breadcrumb1">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->


	<div class="checkout">
		<div class="container">
		
	
			<h2>Your shopping cart contains: <span><?php items(); ?>  Products</span></h2>
			<div class="checkout-right">
			
				<table class="timetable_sub" width="100%">
				<form action="checkout.php" method="post" enctype="multipart/form-data">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
						
							<th>Remove</th>
							<th>Price</th>
						</tr>
					</thead>
					<?php
					
	$ip_add = getRealIPAddr();
	$total=0;
	$ctr=1;
	$sel_price = "select * from cart where ip_add='$ip_add'";
	$run_price = mysqli_query($con, $sel_price);
	while($record=mysqli_fetch_array($run_price)){
	
		if(isset($_POST['qty']))
		{
			$qty=1;
		$qty = $_POST['qty'];
		if($qty==NULL){
			$_POST['qty']=1;
		$qty=1;}
		if($qty>1){
		$qty=$_POST['qty'];}
		
		}
		$pro_id = $record['p_id'];
		$pro_price = "select * from products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($con,$pro_price);
		while($p_price=mysqli_fetch_array($run_pro_price)){
			$pr_price = $p_price['product_price'];
			$product_price = array($p_price['product_price']);
			$product_title = $p_price['product_title'];
			$product_image = $p_price['product_img1'];
			
			$values= array_sum($product_price);
			$total += $values;

					?>
		
					<tr class="rem1">
						<td class="invert"><?php echo $ctr; ?></td>
						<td class="invert"><a href="single.php"><img src="admin/product_images/<?php echo $product_image; ?> " width="150" height="150" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							        <input type="number" name="qty" value="<?php echo $qty;?>" size="3"/>      
										

						</td>
						<td class="invert"><?php echo $product_title; ?></td>
						
						
						<td class="invert">
							
								<input type="checkbox" value="<?php echo $pro_id; ?>" name="remove[]"/>


						</td>
						<td class="invert"><?php echo $pr_price; ?>.00Rs</td>
					</tr>
								
								<?php  		}$ctr++;
	} ?>	
	<?php
										if(isset($_POST['update'])){

									
		$qty = $_POST['qty'];
		
		$q="select * from products where product_id=$pro_id";
		$q_run=mysqli_query($con,$q);

while($row_products=mysqli_fetch_array($q_run)){
	$pro_id=$row_products['product_id'];															
     $qty1= $row_products['qty'];
		
		
	
		if($qty>$qty1){
			echo "<script>alert('This much quantity is not available now')</script>";
			
		}
		else{
		$insert_qty="update cart set qty='$qty' where ip_add='$ip_add'";
		$run_qty=mysqli_query($con,$insert_qty);
										
		$total=$total*$qty;
	}
}									}
	?>		
	<tr><td><div class="snipcart-details top_brand_home_details">
			
				
			<a href="checkout.php"><input type="submit" name="update" value="Update cart" class="button"/></a>
			</div>
			
			</td>
			<td colspan="4"> Total</td><td><?php echo $total; ?>.00Rs</td></tr>
							
											
				
	


					</form></table>
		
	</form> 



					<?php			
		function updatecart(){
			global $con;
			if(isset($_POST['update'])){
				foreach($_POST['remove'] as $remove_id){
					$delete_products="delete from cart where p_id='$remove_id'";
					
					$run_delete=mysqli_query($con,$delete_products);
					if($run_delete){
						echo "<script>window.open('checkout.php','_self')</script>";
						
					}
				}
				
				
			}
			
			
			
		}
		echo @$up_cart = updatecart();
			?>
			</div>
			
			</td></div>
			
				
			<div class="checkout-left">	
					
				
				
				<div class="checkout-right-basket ">
				

				<a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</br></br>
				<a href="login.php" >Place Order&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
				
			
			</div>			

		</div>
				<div class="clearfix"> </div>				
	</div>
	</div>
		
<!-- //checkout -->
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