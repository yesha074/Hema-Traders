<?php
session_start();
include("includes/db.php");
include("../functions/functions.php");
if(!isset($_SESSION['customer_email']))
{
	echo "<script>window.open('../login.php','_self')</script>";
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
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="../index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">My Account</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- products --->

	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories" >
					<h2>Manage Account</h2>
					<ul class="cate">
						<?php
							$customer_session = $_SESSION['customer_email'];
							$get_customer_pic = "select * from customers where customer_email='$customer_session'";
							$run_customer=mysqli_query($con,$get_customer_pic);
							$row_customer=mysqli_fetch_array($run_customer);
							$customer_pic=$row_customer['customer_image'];
							echo "<center>";
							echo "<div class='snipcart-details top_brand_home_details'><form><img src='customer_photos/$customer_pic' width='200' height='200' style='border:3px solid black;'><br><input type='submit' value='Change profile' name='change_pic' class='button'></form></div>";
							echo "</center>";
						?>
						<?php
if(isset($_GET['change_pic'])){
	$customer_email=$_SESSION['customer_email'];
	$get_customer="select * from customers where customer_email='$customer_email'";
	$run_customer=mysqli_query($con,$get_customer);
	$row=mysqli_fetch_array($run_customer);
	$id=$row['customer_id'];
	$image=$row['customer_image'];
	
	
	echo "<form action='' method='post' enctype='multipart/form-data'>
<table>	
	<tr>
	
	<td><input type='file' name='c_image' size='60'></td>
	</tr>
	<tr><td align='center' colspan='8'><input type='submit' name='update_image' value='Update Now'></td>
	</tr>

</table>
</form>";

if(isset($_POST['update_image'])){
	$update_id=$id;
	
	$c_image=$_FILES['c_image']['name'];
	$c_image_tmp=$_FILES['c_image']['tmp_name'];
	
	move_uploaded_file($c_image_tmp,"customer_photos/$c_image");
	$update_c="update customers set customer_image='$c_image' where customer_id='$update_id'";
	
	$run_c=mysqli_query($con,$update_c);
	
	if($run_c){
		echo "<script>alert('Your account has been Updated!')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
		
	}
	
}

}

?>
					</br>
						<li><a href="my_account.php?my_orders"><h3><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;My Orders</h3></a></li>
						<li><a href="my_account.php?edit_account"><h3><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Edit Account</h3></a></li>
						<li><a href="my_account.php?change_pass"><h3><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Change Password</h3></a></li>
						<li><a href="my_account.php?delete_account"><h3><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Delete Account</h3></a></li>
						<li><a href="logout.php"><h3><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Logout</h3></a></li>
						
					</ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right" >
	<h3 class="w3_agile_header" style="color:#fe9126;">Manage Your Account Here</h3>
	<?php getDefault(); ?>
	
	<?php 
	if(isset($_GET['my_orders'])){
		
		include("my_orders.php");
	}
	?>
	<?php
	if(isset($_GET['pay_offline'])){
		
		include("pay_offline.php");
	
	}
	if(isset($_GET['order_id'])){
		
		include("confirm.php");
	}
	
	?>
	<?php 
	if(isset($_GET['edit_account'])){
		
		include("edit_account.php");
	}
	?>
	<?php 
	if(isset($_GET['change_pass'])){
		
		include("change_pass.php");
	}
	?>
	<?php 
	if(isset($_GET['delete_account'])){
		
		include("delete_account.php");
	}
	?>
	</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>
	
	
	
<!--- products --->
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
<?php } ?>