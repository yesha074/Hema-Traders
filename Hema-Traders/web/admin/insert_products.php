<?php
include("includes/db.php");
if(!isset($_SESSION['admin_email']))
{
	echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<html>
<head>
<style>
.btnn{background:#fe9126; height:40px; width:200px; color:white; font-weight:bold; border:3px white; border-radius:5px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">

	<table width="1200" height="1200" align="center" bordercolor="white" bgcolor="transparent" cellpadding="5" style='border: 4px dashed orange;'>
	<tr><td align="center" colspan="2"><h1><font color="white">Insert New Product:</font></h1></td></tr><br>
	<tr><td align="center" ><b><font color="white" size="5%">Product Title</font></b></td>
		<td><input type="text" name="product_title" size="50" required="required" style='background:transparent; color:white; height:40px;'></td>
	<tr><td align="center" ><b><font color="white" size="5%">Product Category</font></b></td>
	<td>
	<select name="product_cat" required="required" style='background:transparent; color:white; height:40px;'>
		<option style='background:orange; color:white; font-weight:bold'>Select a Category</option>
		<?php
			$get_cats = "select * from categories";
			$run_cats= mysqli_query($con,$get_cats);
			while($row_cats=mysqli_fetch_array($run_cats)){
			$cat_id=$row_cats['cat_id'];
			$cat_title=$row_cats['cat_title'];
			echo "<option value='$cat_id' style='background:orange; color:black; font-weight:bold'>$cat_title</font></option>";
			}
		?>
		</select>
		</td>
			<tr><td align="center" ><b><font color="white" size="5%">Product Brand</font></b></td>
	<td>
	<select name="product_brand" required="required" style='background:transparent; color:white; height:40px;'>
		<option style='background:orange; color:white; font-weight:bold'>Select a Brand</option>
		<?php
			$get_brands = "select * from brands";
			$run_brands= mysqli_query($con,$get_brands);
			while($row_brands=mysqli_fetch_array($run_brands)){
			$brand_id=$row_brands['brand_id'];
			$brand_title=$row_brands['brand_title'];
			echo "<option value='$brand_id' style='background:orange; color:black; font-weight:bold;'>$brand_title</option>";
			}
		?>
		</select>
		</td>
	</tr>
	<tr><td align="center" ><b><font color="white" size="5%">Product Image1</font></b></td><td><input type="file" name="product_img1" required="required" style='background:transparent; color:white; height:40px;'></td></tr>
	<tr><td align="center" ><b><font color="white" size="5%">Product Image2</font></b></td><td><input type="file" name="product_img2" style='background:transparent; color:white; height:40px;'></td></tr>
	<tr><td align="center" ><b><font color="white" size="5%">Product Image3</font></b></td><td><input type="file" name="product_img3" style='background:transparent; color:white; height:40px;'></td></tr>
	<tr><td align="center" ><b><font color="white" size="5%">Product Price</font></b></td><td><input type="number" name="product_price" required="required" style='background:transparent; color:white; height:40px;'></td></tr>
	<tr><td align="center" ><b><font color="white" size="5%">Product Quantity</font></b></td><td><input type="number" name="qty" required="required" style='background:transparent; color:white; height:40px;'></td></tr>
	<tr><td align="center" ><b><font color="white" size="5%">Product Description</font></b></td><td><textarea name="product_desc" cols="35" rows="10" required="required" style='background:transparent; color:white;'></textarea></td></tr>
	<tr><td align="center" ><b><font color="white" size="5%">Product Keywords</font></b></td><td><input type="text"  size="50" name="product_keywords" required="required" style='background:transparent; color:white; height:40px;'></td></tr>
	<tr><td align="center" colspan="2" rowspan="2"><input type="submit" name="insert_product" value="INSERT PRODUCT" class="btnn"></td></tr>
	</table>
	</form>
		
<?php
	if(isset($_POST['insert_product'])){
		//text data variables
		$product_title=$_POST['product_title'];
		$product_cat=$_POST['product_cat'];
		$product_brand=$_POST['product_brand'];
		$product_price=$_POST['product_price'];
		$product_desc=$_POST['product_desc'];
		$product_keywords=$_POST['product_keywords'];
		$qty=$_POST['qty'];
		$status= 'on';
	
		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];
		
		//Image temp names
		$temp_name1= $_FILES['product_img1']['tmp_name'];
		$temp_name2= $_FILES['product_img2']['tmp_name'];
		$temp_name3= $_FILES['product_img3']['tmp_name'];
		 
		if($product_title=='' OR $product_cat=='' OR $product_price=='' OR $product_desc=='' OR $product_keywords=='' OR $product_img1==''){
			echo "<script>alert('please fill all the fields!')</script>";
			exit();
			
		}
		else{
		
		move_uploaded_file($temp_name1,"product_images/$product_img1");
		move_uploaded_file($temp_name2,"product_images/$product_img2");
		move_uploaded_file($temp_name3,"product_images/$product_img3");
		
		$insert_product= "insert into products (cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords,status,qty) values ('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords','$status','$qty')";

		$run_product=mysqli_query($con,$insert_product);
		if($run_product){
			echo "<script>alert('Product inserted successfully.')</script>";
			echo "<script>window.open('index.php?page','_self')</script>";
		}
		
		}
	
	}
	
?>
</body>
</html>
<?php } ?>
