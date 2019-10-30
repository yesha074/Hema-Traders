<?php

include("includes/db.php");


//getting customer_id
	$c=$_SESSION['customer_email'];
	
	$get_c="select * from customers where customer_email='$c'";
	
	$run_c=mysqli_query($db,$get_c);
	
	$row_c=mysqli_fetch_array($run_c);
	$customer_id=$row_c['customer_id'];

?>

<div>
</br>
<h3 style="color:purple;"><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;My Orders</h3>
</br><form action="invoice.php" method="post">
<table class="table" align="center" border="2" cellspacing="10px" cellpadding="10px" style='background:khaki;'>
	<tr align="center" style='background:blue; color:white;'>
		<th>Order No</th>
		<th>Due Amount</th>
		<th>Invoice No</th>
		<th>Total Products</th>
		<th>Order Date</th>
		<th>Paid/Unpaid</th>	
		<th>Status</th>
		<th>Invoice</th>
	</tr>
	
	<?php
	$get_orders="select * from customer_orders where customer_id='$customer_id'";
	$run_orders=mysqli_query($con,$get_orders);
	$i=0;
	while($row_orders=mysqli_fetch_array($run_orders)){
		
		$order_id=$row_orders['order_id'];
		$due_amount=$row_orders['due_amount'];
		$invoice_no=$row_orders['invoice_no'];
		$products=$row_orders['total_products'];
		$date=$row_orders['order_date'];
		$status=$row_orders['order_status'];
		$i++;
		
		if($status=='Pending'){
			$status='Unpaid';			
		}
		else{
			$status='Paid';
			
		}
		echo "<tr align='center'>
			<td>$i</td>
			<td>$due_amount</td>
			<td>$invoice_no</td>
			<td>$products</td>
			<td>$date</td>
		
			<td>$status</td>
				<td><a href='?order_id=$order_id' target='_blank'>Confirm if paid</></td>
				<td colspan='7' align='center>
<a href='invoice.php'><input type='submit' value='Invoice' name='submit' style='background: #fe9126;color: white; border:none;padding:10px 15px 10px 15px;'></a>
</td>
			</tr>
		";
	}
?>

</table>
</form>
</div>