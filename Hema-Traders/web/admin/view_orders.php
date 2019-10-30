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
<style>

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Panel</title>
</head>
<body>
<br>
<form action="index.php?search2" method="get" enctype="multipart/form-data">
<center><input type="search" name="user_query"> &nbsp; <input type="submit" name="search2" value="Search orders"></center>
	<table align="center" width="1200" height="400" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
		<tr align="center">
			<td colspan="7" height="70"><h1><font color="white">View All Orders</font></h1></td><br>
		</tr>
		
		<tr align="center">
			<th height="50"><font color="white" size="5%"><center>Order No</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Customer</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Invoice No</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Product Id</center></font></th>
			<th height="50"><font color="white" size="5%"><center>QTY</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Status</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Delete</center></font></th>
		</tr>
		
		<?php
		include("includes/db.php");
		$get_orders="select * from pending_orders";
		$run_orders=mysqli_query($con,$get_orders);
		$i=0;
		while($row_orders=mysqli_fetch_array($run_orders))
		{
			$order_id=$row_orders['order_id'];
			$c_id=$row_orders['customer_id'];
			$invoice=$row_orders['invoice_no'];
			$p_id=$row_orders['product_id'];
			$qty=$row_orders['qty'];
			$status=$row_orders['order_status'];
			$i++;
		
		?>
		
		<tr align="center">
			<td><font color="white" size="4%"><?php echo $i; ?></font></td>
			<td>
			<?php 
			$get_customer="select * from customers where customer_id='$c_id'";
			$run_customer=mysqli_query($con,$get_customer);
			$row_customer=mysqli_fetch_array($run_customer);
			$customer_email=$row_customer['customer_email'];
			echo "<font color='white' size='4%'>$customer_email</font>"; 
			?>
			</td>
			<td bgcolor="#fe9126"><b><font color="black" size="4%"><?php echo $invoice; ?></font></b></td>
			<td><font color="white" size="4%"><?php echo $p_id; ?></font></td>
			<td><font color="white" size="4%"><?php echo $qty; ?></font></td>
			<td><font color="white" size="4%">
			<?php 
				if($status=='Pending')
				{
					echo $status='Pending';
				}
				else
				{
					echo $status='Complete';
				}					
			?>
			</font>
			</td>
			<td><a href="delete_order.php?delete_order=<?php echo $order_id; ?>"><font size="4%" color="yellow">Delete</a></font></td>
		</tr>
		<?php } ?>
	</table>
	
</body>
</html>
<?php } ?>