<?php
include('includes/db.php');
 
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM products ORDER BY product_title ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($con,$sql);  
?>
<?php
if(isset($_GET['page'])){  ?>
	<table align="center" width="1200" height="1100" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
		<tr align="center">
			<td colspan="8" height="70"><h1><font color="white">View All Products</font></h1></td><br>
		</tr>
		<tr>
			<th height="50"><font color="white" size="5%"><center>Product No</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Title</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Image</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Price</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Total Sold</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Status</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Edit</center></font></th>
			<th height="50"><font color="white" size="5%"><center>Delete</center></font></th>
		</tr>
		<?php
		
		$i=0;
		
		while ($row_pro = mysqli_fetch_array($rs_result)) { 
$p_id=$row_pro['product_id'];
			$p_title=$row_pro['product_title'];
			$p_img=$row_pro['product_img1'];
			$p_price=$row_pro['product_price'];
			$status=$row_pro['status'];		
		$i++;
?> 
		<tr align="center">
			<td><font color="white" size="4%"><?php echo $i; ?></font></td>
			<td><font color="white" size="4%"><?php echo $p_title; ?></font></td>
			<td style='padding-top:6px; padding-bottom:6px;'><img src="product_images/<?php echo $p_img; ?>"width="70" height="70" style='border:1px groove black;'></td>
			<td><font color="white" size="4%"><?php echo $p_price; ?></font></td>
			<td>
			<?php
			$get_sold="select * from pending_orders where product_id='$p_id'";
			$run_sold=mysqli_query($con,$get_sold);
			$count=mysqli_num_rows($run_sold);
			echo "<font color='white'>$count</font>";
			?>
			</td>
			<td><font color="white" size="4%"><?php echo $status; ?></font></td>
			<td><a href="index.php?edit_pro=<?php echo $p_id; ?>"><font size="4%">Edit</font></a></td>
			<td><a href="delete_pro.php?delete_pro=<?php echo $p_id; ?>"><font size="4%">Delete</font></a></td>
		</tr>
		<?php } ?>
	</table>
		<?php } ?>