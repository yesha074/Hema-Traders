<?php
include("includes/db.php");
							if(isset($_GET['search1'])){?>
							<br>
								<table align="center" width="1300" height="auto" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
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
													$user_keyword= $_GET['user_query'];
													$get_products="select * from payments where payment_id like '%$user_keyword%' || invoice_no like '%$user_keyword%' || amount like '%$user_keyword%' || payment_mode like '%$user_keyword%' || ref_no like '%$user_keyword%' || code like '%$user_keyword%' || payment_date like '%$user_keyword%'";
														
														$run_payments=mysqli_query($con,$get_products);
														
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
		
		
		
							<?php								
														
										if(mysqli_num_rows($run_payments)==0)
														{
															echo " <tr>.<th colspan='7'><font color='yellow' size='5%'><center>No Match Found!!</center></font></th>.</tr>";
														}				
							}
?>
</table>