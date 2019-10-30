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
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>Household Products <a href="products.php">SHOP NOW</a></p>
			</div>
			<?php cart(); 
			
			?>
			<div class="agile-login">
				<ul>
				<?php
				
				if(!isset($_SESSION['customer_email'])){ 
					echo "<li><a href='index.php'> Welcome Guest! </a></li>";
					echo "<li><a href='registered.php'> Create Account </a></li>";
				}				
				else{
					
					echo "<li><a href='index.php'> Welcome  "."<span style='color:blue'>".$_SESSION['customer_email']."</span>"."!</a></li>";
				}
				?>
					
					<?php
					if(!isset($_SESSION['customer_email'])){
						echo "<li><a href='login.php'>Login</a></li>";

						
					}
					else{
						echo "<li><a href='logout.php' style='color:#F93;'><h5>Logout</h5></a></li>";
						
					}
					
					?>
					
					<li><a href="contact.php">Help</a></li>



				</ul>
			</div>
			
						<div class="product_list_header">  
					

						
						<a href="checkout.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
						<?php
						if(isset($_SESSION['customer_email'])){
						
						echo "<a href='customer/my_account.php'><button class='w3view-cart' type='submit' name='submit' value=''><i class='fa fa-user' aria-hidden='true'></i></button></a>";
						}
						?>
					

			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : 95102 01225</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Hema Traders</a></h1>
			</div>
		<div class="w3l_search">
			<form action="results.php" method="get" enctype="multipart/form-data">
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
									
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<li class="active"><a href="about.html" class="act">About Us</a></li>	
									<li class="active"><a href="services.html" class="act">Our Services</a></li>	
									<!-- Mega Menu -->
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Categories<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<a href="all_products.html"><h6>All Household</h6></a>


														<?php
														
														$get_cats = "select * from categories";
														$run_cats= mysqli_query($con,$get_cats);
														while($row_cats=mysqli_fetch_array($run_cats)){
														$cat_id=$row_cats['cat_id'];
														$cat_title=$row_cats['cat_title'];
														echo "<li><a href='cat.php?cat=$cat_id'>$cat_title</a></li>";
														}
														?>
														
														<li><a href="index.php"></a></li>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									
									
									<li><a href="offers.php">Offers</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="contact.php">Feedback</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->

	<div class="register" style="background: url('images/22.jpg') fixed; background-size:100% 100%;">
		<div class="container">
			<h2><font color="white">Register Here</font></h2>
			<div class="login-form-grids" style='background:transparent; border:4px solid white; width:50%;'
>
				<h5><font color="white">profile information</font></h5>
				<form action="registered.php" method="post" enctype="multipart/form-data">
				
			<div>
					<input type="text" data-validation="length alphanumeric" data-validation-length="3-12"data-validation-error-msg="First name has to be an alphanumeric value (3-12 chars)" name="c_fname" placeholder="First Name..." required=" " style='background:transparent;'/></br></div>
		 <div>
					<input type="text" name="c_lname" data-validation="length alphanumeric" data-validation-length="3-12"data-validation-error-msg="Last name has to be an alphanumeric value (3-12 chars)" placeholder="Last Name..." required=" " style='background:transparent;'>
					
		</div>
				<div class="register-check-box">
					<div class="check" style='background:transparent;'>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div></br>
				<h5><font color="white">Login information</font></h5>
					<!--<form action="#" method="post" enctype="multipart/form-data">-->
		<div>
		
					<input type="email" data-validation="email" name="c_email" placeholder="Email Address" required=" " style='background:transparent;'>
		</div>
			<div>
					<input type="password" data-validation="strength" 
		 data-validation-strength="2" name="c_pass" placeholder="Password" required=" " style='background:transparent;'>
		 </div>
		 <div>
						<input type="password" data-validation="confirm" name="c_cpass" placeholder="Password Confirmation" required=" " style='background:transparent;'>
						 
		</div>
		<div>
					</br><font color="white">
					(<span id="pres-max-length">100</span> characters left)</font></br></br>
					<textarea name="c_address" name="presentation" style="background-color:white;" id="presentation" placeholder="Residential Address..." required=" " rows="5" cols="55" style='background:transparent;'></textarea>
		</div>
		<div>
					<input type="number" data-validation="number"  name="c_no" style="background-color:white;" placeholder="Phone Number..." required=" " style='background:transparent;'>
		</div>
					<h6><font color="white">Profile Picture </font></h6>
		<div>			
					<input type="file" data-validation="mime size required" 
		 data-validation-allowing="jpg, png" 
		 data-validation-max-size="300kb" 
		 data-validation-error-msg-required="No image selected" style="background-color:white;" name="c_image" required=" " >
		 </div>
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" data-validation="required" 
		 data-validation-error-msg="You have to agree to our terms" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					<input type="submit" name="register" value="Register">
				</form>
				
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'en'
  });
</script>
				<script>

  $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );

</script>
			</div>
			<div class="register-home">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>
	
<?php
if(isset($_POST['register'])){
	if($id==1)
	{
		echo "<script>window.open('admin/index.php')</script>";
	}
	else
	{
		echo "<script>window.open('index.php')</script>";
	$c_fname=$_POST['c_fname'];
	$c_lname=$_POST['c_lname'];
	$c_email=$_POST['c_email'];
	$c_pass=$_POST['c_pass'];
	$c_cpass=$_POST['c_cpass'];
	$c_address=$_POST['c_address'];
	$c_no=$_POST['c_no'];
	$c_pass=$_POST['c_pass'];
	$c_cpass=$_POST['c_cpass'];
	$c_no=$_POST['c_no'];
	
	if($c_pass==$c_cpass || $c_no.length==10)
						 {
							
	$c_ip=getRealIPAddr();
	
	$c_image = $_FILES['c_image']['name'];
	$c_image_tmp = $_FILES['c_image']['tmp_name'];
	$insert_customer = "insert into customers(customer_fname,customer_lname,customer_email,customer_pass,customer_cpass,customer_contact,customer_address,customer_image,customer_ip) values ('$c_fname','$c_lname','$c_email','$c_pass','$c_cpass','$c_no','$c_address','$c_image','$c_ip')";
	
	
	$run_customer=mysqli_query($con,$insert_customer);
	move_uploaded_file($c_image_tmp,"customer/customer_photos/$c_image");
	
	$sel_cart="select * from cart where ip_add='$c_ip'";
	$run_cart=mysqli_query($con,$sel_cart);
	$check_cart=mysqli_num_rows($run_cart);
	
				
					   
								 
			
	if($check_cart>0){
		$_SESSION['customer_email']=$c_email;
		echo "<script>alert('Account created successfully, Thank you!')</script>";
		echo "<script>window.open('checkout.php','_self')</script>";
		
	}
	else{
				$_SESSION['customer_email']=$c_email;
		echo "<script>alert('Account created successfully, Thank you!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
		
	}
				}	
	else
	{
		if($c_no.length>10 || $c_no.length<10)
	{
		echo "<script>alert('Please Enter a valid Contact-Number!!')</script>";
	}
	if($c_pass!=$c_cpass)
	{
echo "<script>alert('Sorry! Your Password is not Matched')</script>";
	}
						 }	
}
}
?>
<!-- //register -->
<!-- //new -->
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>48, Chandra Society, <span>Opp. Rajendra Park, </span><span>Nr Geeta-Gouri Cinema,</span> <span>Odhav Road,Ahmedabad-380018</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">hematraders@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 95102 01225</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.php">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.php">Contact Us</a></li>
						
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.php">FAQ's</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Product Category</h3>
					<ul class="info"> 
						
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="kitchenware.php">Kitchenware</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="plasticware.php">Plasticware</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="cleaning.php">Cleaning Accesories</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.php">Store</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.php">My Cart</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.php">Create Account</a></li>
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
						<li><a href="https://www.facebook.com" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.twitter.com" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.dribble.com" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
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
