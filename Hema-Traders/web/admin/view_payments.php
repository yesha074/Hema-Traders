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
<form action="index.php?search1" method="get" enctype="multipart/form-data">
<center><input type="search" name="user_query"> &nbsp; <input type="submit" name="search1" value="Search Payments"></center>
<table align="center" width="1200" height="1400" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
		<tr align="center">
			<td colspan="7" height="70"><h1><font color="white">View All Payments</font></h1></td><br>
		</tr>
	
		
		<tr align="center">
			<th height="50"><font color="white" size="5%"><center>Payment No</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Invoice No</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Amount Paid</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Payment Method</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Ref No</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Code</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Payment Date</center></font></th>
		</tr>
		<?php
		include("includes/db.php");
		$get_payments="select * from payments";
		$run_payments=mysqli_query($con,$get_payments);
		$i=0;
		while($row_payments=mysqli_fetch_array($run_payments))
		{
			$payment_id=$row_payments['payment_id'];
			$invoice=$row_payments['invoice_no'];
			$amount=$row_payments['amount'];
			$payment_m=$row_payments['payment_mode'];
			$ref_no=$row_payments['ref_no'];
			$code=$row_payments['code'];
			$date=$row_payments['payment_date'];
			$i++;
		
		?>
		
		<tr align="center">
			<td><font color="white" size="4%"><?php echo $i; ?></font></td>
			<td bgcolor="#fe9126"><b><font color="black" size="4%"><?php echo $invoice; ?></font></b></td>
			<td><font color="white" size="4%"><?php echo $amount; ?></font></td>
			<td><font color="white" size="4%"><?php echo $payment_m; ?></font></td>
			<td><font color="white" size="4%"><?php echo $ref_no; ?></font></td>
			<td><font color="white" size="4%"><?php echo $code; ?></font></td>
			<td><font color="white" size="4%"><?php echo $date; ?></font></td>
		</tr>
		<?php } ?>
	
	</table>
	</form>
</body>
</html>
<?php } ?>