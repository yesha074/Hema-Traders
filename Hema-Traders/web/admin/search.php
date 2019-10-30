<?php
include("includes/db.php");
							if(isset($_GET['search'])){?>
							<br>
								<table align="center" width="1300" height="auto" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
		<tr>
			<th height="50" width="10"><font color="white" size="5%"><center>Product No</center></font></th>
			<th height="50" width="20"><font color="white" size="5%"><center>Title</center></font></th>
			<th height="50" width="20"><font color="white" size="5%"><center>Image</center></font></th>
			<th height="50" width="20"><font color="white" size="5%"><center>Price</center></font></th>
			<th height="50" width="20"><font color="white" size="5%"><center>Status</center></font></th>
			<th height="50" width="20"><font color="white" size="5%"><center>Edit</center></font></th>
			<th height="50" width="20"><font color="white" size="5%"><center>Delete</center></font></th>
			<th height="50" width="10"><font color="white" size="5%"><center>Total Quantity</center></font></th>
			<th height="50" width="20"><font color="white" size="5%"><center>Total Sold</center></font></th>
			<th height="50" width="10"><font color="white" size="5%"><center>Quantity in Stock</center></font></th>
		</tr>
		<?php
													$user_keyword= $_GET['user_query'];
													$get_products="select * from products where product_keywords like '%$user_keyword%' || product_id like '%$user_keyword%' || date like '%$user_keyword%' || product_price like '%$user_keyword%' || qty like '%$user_keyword%'";
														
														$run_products=mysqli_query($con,$get_products);
														
															$i=0;
		
	
		while($row_pro=mysqli_fetch_array($run_products)) 
		{
			$p_id=$row_pro['product_id'];
			$p_title=$row_pro['product_title'];
			$p_img=$row_pro['product_img1'];
			$p_price=$row_pro['product_price'];
			$status=$row_pro['status'];
			$qty=$row_pro['qty'];
			$i++;
	
		?>
		
															<tr align="center">
			<td><font color="white" size="4%"><?php echo $i; ?></font></td>
			<td><font color="white" size="4%"><?php echo $p_title; ?></font></td>
			<td style='padding-top:6px; padding-bottom:6px;'><img src="product_images/<?php echo $p_img; ?>"width="70" height="70" style='border:1px groove black;'></td>
			<td><font color="white" size="4%"><?php echo $p_price; ?></font></td>
			<td><font color="white" size="4%"><?php echo $status; ?></font></td>
			<td><a href="index.php?edit_pro=<?php echo $p_id; ?>"><font size="4%" color="yellow">Edit</font></a></td>
			<td><a href="delete_pro.php?delete_pro=<?php echo $p_id; ?>"><font size="4%" color="yellow">Delete</font></a></td>
			<td><font color="white" size="4%"><?php echo $qty; ?></font></td>
			<?php
			$get_sold="select * from pending_orders where product_id='$p_id'";
			$run_sold=mysqli_query($con,$get_sold);
			$qtyy=0;
			while($row_sold=mysqli_fetch_array($run_sold))
			{
			$qtyy+=$row_sold['qty'];
			}
			$tot=1*$qtyy;
			$rqty=$qty-$tot;
			echo "<td><font color='white'>$tot</font></td>";
			echo "<td><font color='white' size='4%'>$rqty</font></td>";
			?>
		</tr>
		
		
							<?php								
														}
										if(mysqli_num_rows($run_products)==0)
														{
															echo " <tr>.<th colspan='10'><font color='yellow' size='5%'><center>No Match Found!!</center></font></th>.</tr>";
														}				
							}
?>
</table>