<?php
include("includes/db.php");
							if(isset($_GET['search3'])){?>
							<br>
								<table align="center" width="1300" height="auto" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
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
													$user_keyword= $_GET['user_query'];
													$get_products="select * from customers where customer_id like '%$user_keyword%' || customer_fname like '%$user_keyword%' || customer_lname like '%$user_keyword%' || customer_email like '%$user_keyword%' || customer_pass like '%$user_keyword%' || customer_cpass like '%$user_keyword%' || customer_contact like '%$user_keyword%' || customer_address like '%$user_keyword%'";
														
														$run_c=mysqli_query($con,$get_products);
														
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

							<?php								
														
										if(mysqli_num_rows($run_c)==0)
														{
															echo " <tr>.<th colspan='7'><font color='yellow' size='5%'><center>No Match Found!!</center></font></th>.</tr>";
														}				
							}
?>
</table>