<?php
include("includes/db.php");
	$get_c="select * from customers ";
	$run_c=mysqli_query($con,$get_c);
	$row_c=mysqli_fetch_array($run_c);
	$customer_id=$row_c['customer_id'];
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
	alert("hi");
} );
</script>


<title>Insert title here</title>
</head>
<body>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr align="center">
		<th>Order No</th>
		<th>Due Amount</th>
		<th>Invoice No</th>
		<th>Total Products</th>
		<th>Order Date</th>
		<th>Paid/Unpaid</th>	
		<th>Status</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$get_orders="select * from customer_orders ";
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
			</tr>
		";
	}
?>
			
        
        </tbody>
            
     
      
    </table>
</body>
</html>