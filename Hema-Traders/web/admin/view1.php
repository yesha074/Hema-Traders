<!DOCTYPE html>
<html>
<head>
	<title>PHP Pagination Tutorial</title>
	<style type="text/css">
		.pagination{
			list-style: none;
		}
		.pagination li{
			float: left;
			margin: 5px;
		}
		.pagination li a{
			text-decoration: none;
		}
		.paragraph{
			width: 960px;
			height: auto;
			overflow: hidden;
			background: #eee;
			margin: 0 auto;
			font-size: 20px;
			font-family: arial;
		}
		.pages{
			font-size: 20px;
			margin: 0 auto;
			width: 500px;
			overflow: hidden;
			margin: 0 auto;

		}
	</style>
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
if(isset($_GET['pageno'])){ ?>
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
<?php } ?>
		<?php
		include("includes/db.php");

//$con = mysqli_connect("localhost","root","","hematraders");

function pagination($con,$table,$pno,$n){
	$query = $con->query("SELECT COUNT(*) as products FROM ".$table);
	$row = mysqli_fetch_array($query);
	//$totalRecords = 100000;
	$pageno = $pno;
	$numberOfRecordsPerPage = $n;

	$last = ceil($row["products"]/$numberOfRecordsPerPage);

	$pagination = "<ul class='pagination'>";

	if ($last != 1) {
		if ($pageno > 1) {
			$previous = "";
			$previous = $pageno - 1;
			$pagination .= "<li class='page-item'><a class='page-link' href='pagination.php?pageno=".$previous."' style='color:#333;'> Previous </a></li>";
		}
		for($i=$pageno - 5;$i< $pageno ;$i++){
			if ($i > 0) {
				$pagination .= "<li class='page-item'><a class='page-link' href='pagination.php?pageno=".$i."'> ".$i." </a></li>";
			}
			
		}
		$pagination .= "<li class='page-item'><a class='page-link' href='pagination.php?pageno=".$pageno."' style='color:#333;'> $pageno </a></li>";
		for ($i=$pageno + 1; $i <= $last; $i++) { 
			$pagination .= "<li class='page-item'><a class='page-link' href='pagination.php?pageno=".$i."'> ".$i." </a></li>";
			if ($i > $pageno + 4) {
				break;
			}
		}
		if ($last > $pageno) {
			$next = $pageno + 1;
			$pagination .= "<li class='page-item'><a class='page-link' href='pagination.php?pageno=".$next."' style='color:#333;'> Next </a></li></ul>";
		}
	}
//LIMIT 0,10
	//LIMIT 20,10
	$limit = "LIMIT ".($pageno - 1) * $numberOfRecordsPerPage.",".$numberOfRecordsPerPage;

	return ["pagination"=>$pagination,"limit"=>$limit];
}

if (isset($_GET["pageno"])) {
	$pageno = $_GET["pageno"];

	$table = "products";

	$array = pagination($con,$table,$pageno,10);

	$sql = "SELECT * FROM ".$table." ".$array["limit"];

	$query = $con->query($sql);

	while ($row = mysqli_fetch_assoc($query)) {
		echo "<div class='paragraph'><b>".$row["product_id"]."</b> ".$row["product_desc"]."</div>";
	}
	echo "<div class='pages'>".$array["pagination"]."</div>";

}else{
	$pageno = 1;

	$table = "products";

	$array = pagination($con,$table,$pageno,10);

	$sql = "SELECT * FROM ".$table." ".$array["limit"];

	$query = $con->query($sql);

	while ($row = mysqli_fetch_array($query)) {
		echo "<div class='paragraph'><b>".$row["product_id"]."</b> ".$row["product_desc"]."</div>";
	}
	echo "<div class='pages'>".$array["pagination"]."</div>";
}


?>
</body>
</html>
