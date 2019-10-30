<?php
@session_start();

include("includes/db.php");
if(isset($_GET['edit_account'])){
	$customer_email=$_SESSION['customer_email'];
	$get_customer="select * from customers where customer_email='$customer_email'";
	$run_customer=mysqli_query($con,$get_customer);
	$row=mysqli_fetch_array($run_customer);
	$id=$row['customer_id'];
	$fname=$row['customer_fname'];
	$lname=$row['customer_lname'];
	$email=$row['customer_email'];
	$pass=$row['customer_pass'];

	$address=$row['customer_address'];
	$no=$row['customer_contact'];
	$image=$row['customer_image'];
}

?>
</br>
<form action="" method="post" enctype="multipart/form-data">
	<table align="center" height="600" width="794" border="3" cellspacing="50" cellpadding="5" style="background:transparent;" >
	<tr>
	<td colspan="8" align="center"><h2>Update your account:</h2></td>
	</tr>
	<tr>
	<td align="center">Customer First Name:</td>
	<td><input type="text" name="c_fname" required="" data-validation="length alphanumeric" data-validation-length="3-12"data-validation-error-msg="First name has to be an alphanumeric value (3-12 chars)" style="background:transparent;" value="<?php echo $fname; ?>"></td>
	</tr>
	<tr>
	<td align="center">Customer Last Name:</td>
	<td><input type="text" name="c_lname" required="" data-validation="length alphanumeric" data-validation-length="3-12"data-validation-error-msg="First name has to be an alphanumeric value (3-12 chars)" style="background:transparent;" value="<?php echo $lname; ?>"></td>
	</tr>
	<tr>
	<td align="center">Customer Email:</td>
	<td><input type="text" name="c_email" data-validation="email" required="" style="background:transparent;" size="60" value="<?php echo $email; ?>"></td>
	</tr>
	<tr>
	<td align="center">Customer Password:</td>
	<td><input type="text" name="c_pass" required="" style="background:transparent;" value="<?php echo $pass; ?>"></td>
	</tr>
	<tr>
	<td align="center">Customer Address:</td>
	<td><input type="text" name="c_address" data-validation="confirmation" required="" style="background:transparent;" size="60" value="<?php echo $address; ?>"></td>
	</tr>
	<tr>
	<td align="center">Customer Contact Number:</td>
	<td><input type="text" name="c_no" data-validation="number" data-validation-allowing="range[1;100]"required="" style="background:transparent;" value="<?php echo $no; ?>"></td>
	</tr>
	<tr>
	<td align="center">Customer Image:</td>
	<td><input type="file" data-validation="mime size required" 
		 data-validation-allowing="jpg, png" 
		 data-validation-max-size="300kb" 
		 data-validation-error-msg-required="No image selected" name="c_image"size="60" value=<?php echo $image; ?>"></td>
	</tr>
	<tr><td align="center" colspan="8"><input type="submit" name="update_account" value="Update Now"></td>
	</tr>

</table>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'en'
  });
</script>
				<script>

  $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );

</script>
<?php
if(isset($_POST['update_account'])){
	$update_id=$id;
	$c_fname=$_POST['c_fname'];
	$c_lname=$_POST['c_lname'];
	$c_email=$_POST['c_email'];
	$c_pass=$_POST['c_pass'];
	$c_address=$_POST['c_address'];
	$c_no=$_POST['c_no'];
	$c_image=$_FILES['c_image']['name'];
	$c_image_tmp=$_FILES['c_image']['tmp_name'];
	
	move_uploaded_file($c_image_tmp,"customer_photos/$c_image");
	$update_c="update customers set customer_fname='$c_fname', customer_lname='$c_lname', customer_email='$c_email', customer_pass='$c_pass', customer_address='$c_address', customer_contact='$c_no',customer_image='$c_image' where customer_id='$update_id'";
	
	$run_c=mysqli_query($con,$update_c);
	
	if($run_c){
		echo "<script>alert('Your account has been Updated!')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
		
	}
	
}




?>