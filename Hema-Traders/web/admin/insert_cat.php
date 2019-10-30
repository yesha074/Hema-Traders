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
<style type="text/css">
form{margin:1%;font-size:20px; text-align:center;}
.btnn{background:#fe9126; height:40px; width:200px; color:white; font-weight:bold; border:3px white; border-radius:5px;}
</style>
</head>
<body>
<form action="" method="post">
<table width="1200" height="300" align="center" bordercolor="white"  bgcolor="transparent" style='border: 4px dashed orange;'>
	<tr align="center">
	<td><h1><font color="white">Insert New Category</font></h1></td><br>
	</tr>
	<tr>
	<td>
	<input type="text" name="cat_title" required="required" style='background:transparent; color:white; height:40px;'/><br><br><br>
	<input type="submit" name="insert_cat" value="Insert Category" class="btnn"/>
	</td>
	</tr>
	</table>
</form>
<?php
	include("includes/db.php");
	if(isset($_POST['insert_cat']))
	{
		$cat_title=$_POST['cat_title'];
		$insert_cat="insert into categories (cat_title) values ('$cat_title')";
		$run_cat=mysqli_query($con,$insert_cat);
		if($run_cat)
		{
			echo "<script>alert('New Category has been Inserted')</script>";
			echo "<script>window.open('index.php?insert_cat','_self')</script>";
		}
	}
?>
<br><table width="1200" height="600" align="center" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
	<tr align="center">
		<td colspan="4"><h1><font color="white">View All Categories</font></h1></td>
	</tr>
	<tr>
		<th height="50"><font color="white" size="6%"><center>Category Id</center></font></th>
		<th height="50"><font color="white" size="6%"><center>Category Title</center></font></th>
		<th height="50"><font color="white" size="6%"><center>Edit</center></font></th>
		<th height="50"><font color="white" size="6%"><center>Delete</center></font></th>
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
		<td><font color="white" size="5%"><?php echo $cat_id; ?></font></td>
		<td><font color="white" size="5%"><?php echo $cat_title; ?></font></td>
		<td><a href="index.php?edit_cat=<?php echo $cat_id; ?>"><font size="5%" color="yellow">Edit</a></font></td>
		<td><a href="delete_cat.php?delete_cat=<?php echo $cat_id; ?>"><font size="5%" color="yellow">Delete</a></font></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>
<?php } ?>