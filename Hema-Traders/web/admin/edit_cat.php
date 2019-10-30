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
	if(isset($_GET['edit_cat']))
	{
		$cat_id=$_GET['edit_cat'];
		$edit_cat="select * from categories where cat_id='$cat_id'";
		$run_edit=mysqli_query($con,$edit_cat);
		$row_edit=mysqli_fetch_array($run_edit);
		$cat_edit_id=$row_edit['cat_id'];
		$cat_title=$row_edit['cat_title'];
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Panel</title>
<style type="text/css">
form{margin:1%;font-size:20px; text-align:center;}
</style>
</head>
<body>
<form action="" method="post">
<table width="1200" height="300" align="center" bordercolor="white"  bgcolor="transparent" style='border: 4px dashed orange;'>
	<tr align="center">
	<td><h1><font color="white">Edit this Category</font></h1></td><br>
	</tr>
	<tr>
	<td>
	<input type="text" name="cat_title1" value="<?php echo $cat_title; ?>"/><br><br><br>
	<input type="submit" name="update_cat" value="Update Category" />
	</td>
	</tr>
	</table>
</form>
<br><table width="1200" height="600" align="center" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
	<tr align="center">
		<td colspan="4"><h1><font color="white">View All Categories</font></h1></td>
	</tr>
	<tr>
		<th height="50"><font color="white" size="5%"><center>Category Id</center></font></th>
		<th height="50"><font color="white" size="5%"><center>Category Title</center></font></th>
		<th height="50"><font color="white" size="5%"><center>Edit</center></font></th>
		<th height="50"><font color="white" size="5%"><center>Delete</center></font></th>
	</tr>
	<?php
		include("includes/db.php");
		$get_cats="select * from categories";
		$run_cats=mysqli_query($con,$get_cats);
		while($row_cats=mysqli_fetch_array($run_cats))
		{
			$cat_id=$row_cats['cat_id'];
			$cat_title=$row_cats['cat_title'];
	?>
	<tr align="center">
		<td>><font color="white" size="4%"><?php echo $cat_id; ?></font></td>
		<td>><font color="white" size="4%"><?php echo $cat_title; ?></font></td>
		<td><a href="index.php?edit_cat=<?php echo $cat_id; ?>">Edit</a></td>
		<td><a href="delete_cat.php?delete_cat=<?php echo $cat_id; ?>">Delete</a></td>
	</tr>
	<?php } ?>
</body>
</html>
<?php
	if(isset($_POST['update_cat']))
	{
		$cat_title123=$_POST['cat_title1'];
		$update_cat="update categories set cat_title='$cat_title123' where cat_id='$cat_edit_id'";
		$run_update=mysqli_query($con,$update_cat);
		if($run_update)
		{
			echo "<script>alert('Category has been Updated.')</script>";
			echo "<script>window.open('index.php?insert_cat','_self')</script>";
		}
		
	}

?>
<?php } ?>