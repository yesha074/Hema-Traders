<?php
	include("includes/db.php");
	if(!isset($_SESSION['admin_email']))
{
	echo "<script>window.open('login.php','_self')</script>";
}
else
{
?>
<?php
	if(isset($_GET['edit_brand']))
	{
		$brand_id=$_GET['edit_brand'];
		$edit_brand="select * from brands where brand_id='$brand_id'";
		$run_brand=mysqli_query($con,$edit_brand);
		$row_brand=mysqli_fetch_array($run_brand);
		$brand_edit_id=$row_brand['brand_id'];
		$brand_title=$row_brand['brand_title'];
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Panel</title>
<style type="text/css">
form{margin:1%;font-size:20px;text-align:center;}
</style>
</head>
<body>
<form action="" method="post">
	<table width="1200" height="300" align="center" bordercolor="white"  bgcolor="transparent" style='border: 4px dashed orange;'>
	<tr align="center">
	<td><h1><font color="white">Edit this Brand</font></h1></td><br>
	</tr>
	<tr>
	<td>
	<input type="text" name="brand_title1" value="<?php echo $brand_title; ?>"/><br><br><br>
	<input type="submit" name="update_brand" value="Update Brand" />
	</td>
	</tr>
	</table>
</form>
<br><table width="1200" height="1000" align="center" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
	<tr align="center">
		<td colspan="4"><h1><font color="white">View All Brands</font></h1></td>
	</tr>
	<tr>
		<th height="50"><font color="white" size="5%"><center>Brand Id</center></font></th>
		<th height="50"><font color="white" size="5%"><center>Brand Title</center></font></th>
		<th height="50"><font color="white" size="5%"><center>Edit</center></font></th>
		<th height="50"><font color="white" size="5%"><center>Delete</center></font></th>
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
		<td><font color="white" size="4%"><?php echo $brand_id; ?></font></td>
		<td><font color="white" size="4%"><?php echo $brand_title; ?></font></td>
		<td><a href="index.php?edit_brand=<?php echo $brand_id; ?>">Edit</a></td>
		<td><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>">Delete</a></td>
	</tr>
	<?php } ?>
</body>
</html>
<?php
	if(isset($_POST['update_brand']))
	{
		$brand_title123=$_POST['brand_title1'];
		$update_brand="update brands set brand_title='$brand_title123' where brand_id='$brand_edit_id'";
		$run_update=mysqli_query($con,$update_brand);
		if($run_update)
		{
			echo "<script>alert('Brand has been Updated.')</script>";
			echo "<script>window.open('index.php?insert_brand','_self')</script>";
		}
		
	}

?>
<?php } ?>