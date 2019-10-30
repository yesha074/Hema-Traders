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
<style>
 .pagination{margin-top:30px;}
 .pagination li{display:inline-block; margin:0 5px;}
 .pagination li a{display:inline-block; padding:8px 12px; border:1px solid #eee;}
 .pagination li a.active{font-weight:bold; background:orange;}
</style>


</head>
<body>
<?php
if(isset($_GET['page'])){ ?>
	<table align="center" width="1300" height="1100" bordercolor="white" bgcolor="transparent" style='border: 4px dashed orange;'>
		<tr align="center">
			<td colspan="10" height="70"><h1><font color="white">View All Products</font></h1></td><br>
		</tr>
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
		include("includes/db.php");
		if(isset($_GET['page']))
		{
			$page=$_GET['page'];
		}
		else
		{
			$page=1;
		}
		if($page<1)
		{
			$page=1;
		}
		if($page=='' || $page==1)
		{
			$page1=0;
			
		}
		else
		{
			$page1=($page*10)-10;
		}
		$i=0;
		
		$get_pro='select * from products ORDER BY product_id ASC LIMIT '.$page1.',10';
		$run_pro=mysqli_query($con,$get_pro);
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
		
		<?php } ?>

		<?php } ?>
		
	</table>
	<center>
		<?php
		$get_pro='select * from products';
		$run_pro=mysqli_query($con,$get_pro);
			$records=mysqli_num_rows($run_pro);
			$records_pages=$records/10;
			$records_pages=ceil($records_pages);
			$prev=$page-1;
			$next=$page+1;
		
		    echo '<ul class="pagination">';
			if($prev>=1)
			{
				echo '<li><a href="?page='.$prev.'">Previous</a></li>';
			}
			if($records_pages>=2)
			{
				for($r=1;$r<=$records_pages;$r++)
				{
					$active = $r == $page ? 'class="active"' : '';
					echo '<li><a href="?page='.$r.'" '.$active.'>'.$r.'</a></li>';
				}
			}
			if($next<=$records_pages && $records_pages>=2)
			{
				echo '<li><a href="?page='.$next.'">Next</a></li>';
			}
		echo '</ul>';	
		?>
		</center>
</body>
</html>
<?php } ?>