<?php
include("includes/db.php");
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'MailAssets/vendor/autoload.php';
?>
<!-- login -->
	<div class="login"  style="background: url('images/22.jpg') fixed; background-size:100% 100%; ">
		<div class="container" style="overflow:auto;">
			<h2><font color="white">Login Form</font></h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s" style='background:transparent; border:4px solid white; width:50%;'>
				<form method="post" action="">
				<div>
					<input type="email" data-validation="email" placeholder="Email Address" required=" " name="c_email" style="background:transparent;">
				</div>
				<div>
					<input type="password" data-validation="length" data-validation-length="min5" placeholder="Password" required=" " name="c_pass" style="background:transparent;">
				</div>
					</br>
					
						<a href="login.php?forgot_pass">Forgot Password?</a>
				<div>
					<a href="login.php"><input type="submit" name="c_login" value="Login"></a>
				</div>
				</form>			
				
				<?php
				if(isset($_GET['forgot_pass'])){
					echo "
						<div align='center'></br></br>
						<form action='' method='post'>
						<font color='white'><b>Enter your email below, we'll send your password to your email..</b></font></br>
						<input type='text' name='c_email' placeholder='Enter Your Email' required></br>
						<input type='submit' name='submit' value='Send Me Password'>
						</form>
						</div>
					";
					if(isset($_POST['submit'])){
						
					$c_email=$_POST['c_email'];
						$sel_c="select * from customers where customer_email='$c_email'";
						$run_c=mysqli_query($con,$sel_c);
						$check_c=mysqli_num_rows($run_c);
						$row_c=mysqli_fetch_array($run_c);
						$c_fname=$row_c['customer_fname'];
						$c_pass=$row_c['customer_pass'];
						
						if($check_c==0){
							echo "<script>alert('This email does not exist in our database, sorry!')</script>";
							exit();
							
						}
						else{
						
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'parthraghwani1998@gmail.com';                 // SMTP username
    $mail->Password = '98989999';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Recipients
    $mail->setFrom('parthraghwani1998@gmail.com', 'Mailer');
    $mail->addAddress('palakgandhi2511@gmail.com', 'title');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('palakgandhi2511@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>alert("Message has been sent")</script>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
					}
				}
				}
				?>
		

			<h4><font color="khaki">For New People</font></h4>
			<p><a href="registered.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
			
			
			</p>
				</div>
		</div>
	</div><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'en'
	
  });
</script>
<!-- //login -->
<?php

if(isset($_POST['c_login'])){
	$customer_email= $_POST['c_email'];
	$customer_pass= $_POST['c_pass'];
	$sel_customer="select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
	$run_customer=mysqli_query($con,$sel_customer);
	
	$check_customer=mysqli_num_rows($run_customer);
	
	$get_ip=getRealIPAddr();
	$sel_cart="select * from cart where ip_add='$get_ip'";
	$run_cart=mysqli_query($con,$sel_cart);
	$check_cart=mysqli_num_rows($run_cart);
	if($check_customer==0){
		
		echo "<script>alert('Password or Email address is not correct, try again!')</script>";
		exit();
	}
	if($check_customer==1 AND $check_cart==0){
		
		$_SESSION['customer_email']=$customer_email;
		echo "<script>window.open('customer/my_account.php','_self')</script>";
	}
	else{
		$_SESSION['customer_email']=$customer_email;
		echo "<script>alert('You successfully logged in, you can order now!')</script>";
		include("payment_options.php");
	}

}


?>