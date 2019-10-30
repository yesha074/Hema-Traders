<?php

include("includes/db.php");

?>
<!DOCTYPE html>
<html>
	
<body>

<div align="center" style="padding:20px;">

<h2>Payment Options for you</h2>

<?php
$ip = getRealIPAddr();
$get_customer="select * from customers where customer_ip='$ip'";
$run_customer=mysqli_query($con,$get_customer);

$customer = mysqli_fetch_array($run_customer);
$customer_id=$customer['customer_id'];
?>
				<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='palakgandhi2511@gmail.com'; // Business email ID and pass: 

// customer paypal id: jay.amin.buyesr@tops-int.com, pass: 

// paypal
?>

    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="PHPGang Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="400">
    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://localhost/PayPal_demo_by_jay/PayPal/cancel.php">
    <input type="hidden" name="return" value="http://localhost/hematraders/web/index.php">
    <input type="image" style="margin-top: 20px" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
  

Or<a href="order.php?c_id=<?php echo $customer_id; ?>">&nbsp;&nbsp;Pay Offline</a></b><br><br>
<b> If You Selected "Pay Offline" option then please check your email account to find the Invoice No for your order</b>
</div>

</body>
</html>
