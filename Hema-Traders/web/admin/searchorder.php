<?php
include("includes/db.php");
							if(isset($_GET['search2'])){?>
							<br>
								<table align="center" width="1300" height="auto" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
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
													$user_keyword= $_GET['user_query'];
													$get_products="select * from pending_orders where product_id like '%$user_keyword%' || invoice_no like '%$user_keyword%' || order_status like '%$user_keyword%' || qty like '%$user_keyword%' || customer_id like '%$user_keyword%' || order_id like '%$user_keyword%'";
														
														$run_orders=mysqli_query($con,$get_products);
														
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
	
							<?php								
														
										if(mysqli_num_rows($run_orders)==0)
														{
															echo " <tr>.<th colspan='7'><font color='yellow' size='5%'><center>No Match Found!!</center></font></th>.</tr>";
														}				
							}
?>
</table>