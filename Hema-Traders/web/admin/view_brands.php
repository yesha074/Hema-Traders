<?php
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
<table width="794" align="center" bgcolor="#FFCC99">
	<tr align="center">
		<td colspan="6"><h2>View All Brands</h2></td>
	</tr>
	<tr>
		<th>Brand Id</th>
		<th>Brand Title</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
		include("includes/db.php");
		$get_brands="select * from brands";
		$run_brands=mysqli_query($con,$get_brands);
		while($row_brands=mysqli_fetch_array($run_brands))
		{
			$brand_id=$row_brands['brand_id'];
			$brand_title=$row_brands['brand_title'];
	?>
	<tr align="center">
		<td><?php echo $brand_id; ?></td>
		<td><?php echo $brand_title; ?></td>
		<td><a href="index.php?edit_brand=<?php echo $brand_id; ?>">Edit</a></td>
		<td><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>
<?php } ?>