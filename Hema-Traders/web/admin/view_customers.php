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
</head>
<body>
<br>
<form action="index.php?search3" method="get" enctype="multipart/form-data">
<center><input type="search" name="user_query"> &nbsp; <input type="submit" name="search3" value="Search Customers"></center>
	<table align="center" width="1200" height="400" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
		<tr align="center">
			<td colspan="7" height="70"><h1><font color="white">View All Customers</font></h1></td><br>
		</tr>
		
		<tr align="center">
			<th height="50"><font color="white" size="5%"><center>S.N</center></font></th>
			<th height="50"><font color="white" size="5%"><center>First Name</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Last Name</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Email</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Image</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Address</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Delete</center></font></th>
		</tr>
		<?php
		include("includes/db.php");
		$get_c="select * from customers";
		$run_c=mysqli_query($con,$get_c);
		$i=0;
		while($row_c=mysqli_fetch_array($run_c))
		{
			$c_id=$row_c['customer_id'];
			$c_fname=$row_c['customer_fname'];
			$c_lname=$row_c['customer_lname'];
			$c_email=$row_c['customer_email'];
			$c_image=$row_c['customer_image'];
			$c_address=$row_c['customer_address'];
			$i++;
		
		?>
		<tr align="center">
			<td><font color="white" size="4%"><?php echo $i; ?></td>
			<td><font color="white" size="4%"><?php echo $c_fname; ?></td>
			<td><font color="white" size="4%"><?php echo $c_lname; ?></td>
			<td><font color="white" size="4%"><?php echo $c_email; ?></td>
			<td><img src="../customer/customer_photos/<?php echo $c_image; ?>" width="60" height="60"/></td>
			<td><font color="white" size="4%"><?php echo $c_address; ?></td>
			<td><a href="delete_c.php?delete_c=<?php echo $c_id; ?>"><font size="4%" color="yellow">Delete</a></font></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
<?php } ?>