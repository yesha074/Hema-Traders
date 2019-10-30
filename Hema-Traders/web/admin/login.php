<?php
session_start();
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login Form</title>
  <link rel="stylesheet" href="login.css" media="all" />
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 5px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: blue;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 600;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 5px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: blue;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 600;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #FFCC99;
	border: 3px radius #FFCC99;
	cursor: pointer;
	border-radius: 10px;
	color: white;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 600;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><span><font color="white"><b>Admin Login</b></font></span></div>
		</div>
		<br>
		<form method="post">
		<div class="login">
				<input type="text" placeholder="Admin Email" name="admin_email" required="required"><br>
				<input type="password" placeholder="Password" name="password" required="required"><br>
				<input type="submit" value="Admin Login" name="login">
		</div>
		</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <h2 style="color:black; font-weight:600; font-size:25px; text-align:center; padding:20px;"><?php echo @$_GET['logout']; ?></h2>

</body>

</html>

<?php
if(isset($_POST['login']))
{
	$user_email=$_POST['admin_email'];
	$user_pass=$_POST['password'];
	
	$sel_admin="select * from admins where admin_email='$user_email' AND admin_pass='$user_pass'";
	$run_admin=mysqli_query($con,$sel_admin);
	$check_admin=mysqli_num_rows($run_admin);
	
	if($check_admin==1)
	{
		$_SESSION['admin_email']=$user_email;
		echo "<script>window.open('index.php?logged_in=You Successfully Logged in!','_self')</script>";
	}
	else if(!filter_var($user_email,FILTER_VALIDATE_EMAIL))
	{
		echo "<script>alert('Admin Email has incorrect format')</script>";
	}
	else
	{
		echo "<script>alert('Admin Email or Password has incorrect, try again')</script>";
	}
	
}
?>