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
		 data-validation-strength="5" name="c_pass" placeholder="Password" required=" " style='background:transparent;'>
		 </div>
		 <div>
					<input type="password" data-validation="confirmation" name="c_cpass" placeholder="Password Confirmation" required=" " style='background:transparent;'>
		</div>
		<div>
					</br><font color="white">
					(<span id="pres-max-length">100</span> characters left)</font></br></br>
					<textarea name="c_address" name="presentation" id="presentation" placeholder="Residential Address..." required=" " rows="5" cols="48" style='background:transparent;'></textarea>
		</div>
		<div>
					<input type="number" data-validation="number" data-validation-allowing="range[1;100]"name="c_no" placeholder="Phone Number..." required=" " style='background:transparent;'>
		</div>
					<h6><font color="white">Profile Picture </font></h6>
		<div>			
					<input type="file" data-validation="mime size required" 
		 data-validation-allowing="jpg, png" 
		 data-validation-max-size="300kb" 
		 data-validation-error-msg-required="No image selected" name="c_image" required=" " >
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
		window.open('admin/index.php');
	}
	else{
		window.open('index.php');
	$c_fname=$_POST['c_fname'];
	$c_lname=$_POST['c_lname'];
	$c_email=$_POST['c_email'];
	$c_pass=$_POST['c_pass'];
	$c_cpass=$_POST['c_cpass'];
	$c_address=$_POST['c_address'];
	$c_no=$_POST['c_no'];
	
	
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
}
?>
<!-- //register -->
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
