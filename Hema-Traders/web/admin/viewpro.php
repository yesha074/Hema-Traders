<?php
include("includes/db.php");
	$get_c="select * from products ";
	$run_c=mysqli_query($con,$get_c);
	$row_c=mysqli_fetch_array($run_c);
	$product_id=$row_c['product_id'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/datatable/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/datatable/dataTables.bootstrap.min.css">
  
<script type="text/javascript" charset="utf8" src="js/datatables/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="js/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/datatables/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


<title>Insert title here</title>
</head>
<body>
	<table align="center" id="example" class="table"  width="1300" height="1100" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
	
		
	<thead>
	<tr align="center">
			<td colspan="10" height="70"><h1><font color="blue">View All Products</font></h1></td><br>
		</tr>
		
		<tr align="center">
		
         <th align="center"><center>Product No</th>
		<th align="center"><center>Title</th>
		<th align="center"><center>Image</th>
		<th align="center"><center>Price</th>
		<th align="center"><center>Status</th>
		<th align="center"><center>Edit</th>
		<th align="center"><center>Delete</th>
		<th align="center"><center>Total Quantity</th>
		<th align="center"><center>Total Sold</th>
		<th align="center"><center>Quantity in Stock</th>
		
			
		</tr>
	  </thead>
	<tbody>
	<?php
	$get_pro="select * from products ";
	$run_pro=mysqli_query($con,$get_pro);
	$i=0;
			while($row_pro=mysqli_fetch_array($run_pro)) 
		{
			$p_id=$row_pro['product_id'];
			$p_title=$row_pro['product_title'];
			$p_img=$row_pro['product_img1'];
			$p_price=$row_pro['product_price'];
			$status=$row_pro['status'];
			$qty=$row_pro['qty'];
			$i++;
			?>
			<?php
			echo "<tr align='center'>
			<td>$i</td>
			<td>$p_title</td>
			";
			?>
			<td><img src="product_images/<?php echo $p_img; ?>"width="70" height="70" style='border:1px groove black;'></td>
			<?php
			echo "
			<td>$p_price</td>
		
			<td>$status</td>
			<td><a href='index.php?edit_pro=<?php echo $p_id; ?>'>Edit</a></td>
			<td><a href='delete_pro.php?delete_pro=<?php echo $p_id; ?>'>Delete</a></td>
			<td>$qty</td>
				
		
		";
		?>
			
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
			echo "<td>$tot</td>";
			echo "<td>$rqty</td>";
			
			?>
		</tr>
		<?php } ?>
      
        </tbody>
            
      
    </table>
</body>
</html>
