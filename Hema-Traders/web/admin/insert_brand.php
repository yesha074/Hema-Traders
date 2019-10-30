<?php
include("includes/db.php");
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
<style type="text/css">
form{margin:1%;font-size:20px; text-align:center;}
.btnn{background:#fe9126; height:40px; width:200px; color:white; font-weight:bold; border:3px white; border-radius:5px;}
.a{padding-left:15%;}
.b{padding-right:30%;}
.c{padding-left:7.5%;}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table width="1200" height="400" align="center" bordercolor="white"  bgcolor="transparent" style='border: 4px dashed orange;'>
	<tr align="center">
	<td colspan="2"><h1><font color="white">Insert New Brand</font></h1></td><br>
	</tr>
	<tr>
	<td class="a"><b><font color="white" size="5%">Brand Title</font></b></td>
	<td class="b"><input type="text" name="brand_title" required="required" style='background:transparent; color:white; height:40px;'/></td></tr>
	<tr><td class="a"><b><font color="white" size="5%">Brand Image</font></b></td>
	<td class="c"><input type="file" name="brand_image" required="required" style='background:transparent; color:white; height:40px;'></td></tr>
	<tr><td align="center" colspan="2"><input type="submit" name="insert_brand" value="Insert Brand" class="btnn"/>
	</td>
	</tr>
	</table>
</form>
<?php
	include("includes/db.php");
	if(isset($_POST['insert_brand']))
	{
		$brand_title=$_POST['brand_title'];
		$brand_image= $_FILES['brand_image']['name'];
		$temp_name= $_FILES['brand_image']['tmp_name'];
		move_uploaded_file($temp_name,"product_images/$brand_image");
		$insert_brand= "insert into brands (brand_title,brand_image) values ('$brand_title','$brand_image')";
		$run_brand=mysqli_query($con,$insert_brand);
		if($run_brand)
		{
			echo "<script>alert('New Brand has been Inserted')</script>";
			echo "<script>window.open('index.php?insert_brand','_self')</script>";
		}
	}
?>
<br><table width="1200" height="1000" align="center" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
	<tr align="center">
		<td colspan="5"><h1><font color="white">View All Brands</font></h1></td>
	</tr>
	<tr>
		<th height="50"><font color="white" size="6%"><center>Brand Id</center></font></th>
		<th height="50"><font color="white" size="6%"><center>Brand Title</center></font></th>
		<th height="50"><font color="white" size="6%"><center>Brand Image</center></font></th>
		<th height="50"><font color="white" size="6%"><center>Edit</center></font></th>
		<th height="50"><font color="white" size="6%"><center>Delete</center></font></th>
	</tr>
	<?php
		include("includes/db.php");
		$get_brands="select * from brands";
		$run_brands=mysqli_query($con,$get_brands);
		while($row_brands=mysqli_fetch_array($run_brands))
		{
			$brand_id=$row_brands['brand_id'];
			$brand_title=$row_brands['brand_title'];
			$b_image=$row_brands['brand_image'];
	?>
	<tr align="center">
		<td><font color="white" size="5%"><?php echo $brand_id; ?></font></td>
		<td><font color="white" size="5%"><?php echo $brand_title; ?></font></td>
		<td><img src="product_images/<?php echo $b_image; ?>" width="60" height="60"/></td>
		<td><a href="index.php?edit_brand=<?php echo $brand_id; ?>"><font size="5%" color="yellow">Edit</a></font></td>
		<td><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>"><font size="5%" color="yellow">Delete</a></font></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>
<?php } ?>