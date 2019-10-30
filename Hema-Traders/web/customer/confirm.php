<html>
<?php
@session_start();
include("includes/db.php");
if(isset($_GET['order_id'])){
	$order_id=$_GET['order_id'];
}
?>

<body>
</br>
<form action=" " method="post">
<table width="700" height="700" align="center" border="2" bgcolor="#CCCCCC" style='background:transparent;'>
<tr align="center"><td colspan="5"><h2>Please Confirm Your Payment</h2></td></tr>
<tr><td align="center">Invoice No:</td>
	<td><input type="text" name="invoice_no"></td>
</tr>

<tr><td align="center">Amount Sent:</td>
	<td><input type="text" name="amount"></td>
</tr>


<tr><td align="center">Select Payment Mode:</td>
	<td><select name="payment_method">
	<option>Select Payment</option>
	<option>Bank Transfer</option>
	<option>Easypaisa/UBL Omni</option>
	<option>Western Union</option>
	<option>Paypal</option>
	</td>
</tr>
<tr><td align="center">Transaction/Reference ID:</td>
	<td><input type="text" name="tr" required=""></td>
</tr>

<tr><td align="center">Easypaisa/UBLOMNI code:</td>
	<td><input type="text" name="code" required=""></td>
</tr>

<tr><td align="center">Payment Date:</td>
	<td><input type="date" name="date" required=""></td>
</tr>

<tr align="center">
	<td colspan="5"><input type="submit" name="confirm" value="Confirm Payment"></td>
</tr>

</table>
</form>


 </body>
 </html>
 
 <?php
 if(isset($_POST['confirm'])){
	
	 $invoice= $_POST['invoice_no'];
	  $amount= $_POST['amount'];
	   $payment_method= $_POST['payment_method'];
	    $ref_no= $_POST['tr'];
		 $code= $_POST['code'];
		  $date= $_POST['date'];
		  $complete='Complete';
		  $insert_payment ="insert into payments(invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice','$amount','$payment_method','$ref_no','$code','$date')";
		  
		  $run_payment=mysqli_query($con,$insert_payment);
		  

	 $update_order="UPDATE customer_orders SET order_status='$complete' WHERE order_id='$order_id' ";
	 
	 $run_order=mysqli_query($con,$update_order);
	 $update_pending_orders="update pending_orders set order_status='$complete' where order_id='$order_id'";
	 $run_pending_orders=mysqli_query($con,$update_pending_orders);
	 
	 
	 		  if($run_payment){
			  echo "<script>alert('Payment Received, Your Order will be completed within 24 hours')</script> ";
			 echo "<script>window.open('my_account.php?my_orders','_self')</script> ";
			  
		  }
 }
 ?>
 