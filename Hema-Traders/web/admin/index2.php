<?php
session_start();
if(!isset($_SESSION['admin_email']))
{
	echo "<script>window.open('login.php','_self')</script>";
}
else
{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Panel</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
<body>
<div class="wrapper" style='height:100%; width:100%;'>
		<a href="index.php"><div style='border:4px dashed red; background-color:pink;'>
		<table border=1 bgcolor="khaki" height=20% width=100%><tr><td>
				<center><table border=1 bgcolor="red" height=10% width=50%><tr><td><center><b><font color="white" size="50">
		Admin Site</b></font></center></td>
		</td></tr></table></center></td></tr></table></div></a>

				<div class="right" style="width:20%">
							
				<h2>Manage Content</h2>
					<a href="index.php?insert_product">Insert New Products</a>
					<a href="index.php?view_products">View All Products</a>
					<a href="index.php?insert_cat">Categories</a>
					<a href="index.php?insert_brand">Brands</a>
					<a href="index.php?view_customers">View Customers</a>
					<a href="index.php?view_orders">View Orders</a>
					<a href="index.php?view_payments">View Payments</a>
					<a href="logout.php">Admin Logout</a>
				</div>
				<div class="scroll">
				
				<div style='background:url(styles/adm.png); width:100%;height:100%;'>
				<h2 style="color:red; text-align:center; padding:20px;"><?php echo @$_GET['logged_in']; ?></h2>
				<?php
				include("includes/db.php");
				if(isset($_GET['insert_product']))
				{
					include("insert_products.php");
				}
				if(isset($_GET['view_products']))
				{
					include("view_products.php");
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
				</div>
</div>
</body>
</html>
<?php } ?>