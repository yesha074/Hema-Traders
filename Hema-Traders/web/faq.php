<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Hema Traders</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">FAQ</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- help-page -->
	<div class="faq-w3agile">
		<div class="container"> 
			<h2 class="w3_agile_header">Frequently asked questions(FAQ)</h2> </br></br>
			<h4><font color= "#fe9126">Kindly check the FAQ below if you are not very familiar with the functioning of this website. If your query is of urgent nature and is different from the set of questions then do write to us at services.com or call us on 9510201225 between 7 am & 10 pm on all days including Sunday to get our immediate help.</h4></font>
			<ul class="faq"><h5>Registration</h5>
				<li class="item1"><a href="#" title="click here">How do I register?</a>
					<ul>
					
						<li class="subitem1"><p> You can register by clicking on the "Register" link at the top of the homepage. Please provide the information in the form that appears. You can review the terms and conditions, provide your payment mode details and submit the registration information.</p></li>										
					</ul>
				</li>
				<li class="item2"><a href="#" title="click here">Are there any charges for registration?</a>
					<ul>
						<li class="subitem1"><p> No. Registration on hematraders.com is absolutely free...</p></li>										
					</ul>
				</li>
				<li class="item3"><a href="#" title="click here">Do I have to necessarily register to shop on hematraders?</a>
					<ul>
						<li class="subitem1"><p>You can surf and add products to the cart without registration but only registered shoppers will be able to checkout and place orders. Registered members have to be logged in at the time of checking out the cart, they will be prompted to do so if they are not logged in.</p></li>										
					</ul>
				</li>
				<li class="item4"><a href="#" title="click here">Can I have multiple registrations?</a>
					<ul>
						<li class="subitem1"><p>Each email address and contact phone number can only be associated with one hematraders account.</p></li>										
					</ul>
				</li> 
				<li class="item5"><a href="#" title="click here">Can I add more than one delivery address in an account?</a>
					<ul>
						<li class="subitem1"><p>Yes, you can add multiple delivery addresses in your hematraders account. However, remember that all items placed in a single order can only be delivered to one address. If you want different products delivered to different address you need to place them as separate orders.</p></li>										
					</ul>
				</li>
				<li class="item6"><a href="#" title="click here">Can I have multiple accounts with same mobile number and email id?</a>
					<ul>
						<li class="subitem1"><p>Each email address and phone number can be associated with one hematraders account only.</p></li>										
					</ul>
				</li>
				<li class="item7"><a href="#" title="click here">Can I have multiple accounts for members in my family with different mobile number and email address but same or common delivery address?</a>
					<ul>
						<li class="subitem1"><p>Yes, we do understand the importance of time and the toil involved in shopping house hold product. Up to three members in a family can have the same address provided the email address and phone number associated with the accounts are unique.</p></li>										
					</ul>
				</li>
				<li class="item8"><a href="#" title="click here">Can I have different city addresses under one account and still place orders for multiple cities?</a>
					<ul>
						<li class="subitem1"><p>Yes, you can place orders for multiple cities.</p></li>										
					</ul>
				</li></br>
				<h5>Account Related</h5>
				<li class="item9"><a href="#" title="click here">What is My Account?</a>
					<ul>
						<li class="subitem1"><p>My Account is the section you reach after you log in at hematraders.com. My Account allows you to track your active orders, credit note details as well as see your order history and update your contact details.</p></li>										
					</ul>
				</li>
				<li class="item10"><a href="#" title="click here">How do I reset my password?</a>
					<ul>
						<li class="subitem1"><p>You need to enter your email address on the Login page and click on forgot password. An email with a reset password will be sent to your email address. With this, you can change your password. In case of any further issues please contact our customer support team.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">What are credit notes & where can I see my credit notes?</a>
					<ul>
						<li class="subitem1"><p>Credit notes reflect the amount of money which you have pending in your hematraders account to use against future purchases. This is calculated by deducting your total order value minus undelivered value. You can see this in "My Account" under credit note details.</p></li>										
					</ul>
				</li> </br>
				<h5>Payment</h5>
				<li class="item10"><a href="#" title="click here">What are the modes of payment?</a>
					<ul>
						<li class="subitem1"><p>You can pay for your order on hematraders.com using the following modes of payment:a. Cash on deliveryb. Credit and debit cards (VISA / Mastercard).</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Are there any other charges or taxes in addition to the price shown? Is VAT added to the invoice?</a>
					<ul>
						<li class="subitem1"><p>There is no VAT. However, GST will be applicable as per Government Regulizations.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Is it safe to use my credit/ debit card on hematraders?</a>
					<ul>
						<li class="subitem1"><p>Yes it is absolutely safe to use your card on hematraders.com. A recent directive from RBI makes it mandatory to have an additional authentication pass code verified by VISA (VBV) or MSC (Master Secure Code) which has to be entered by online shoppers while paying online using visa or master credit card. It means extra security for customers, thus making online shopping safer.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">What is the meaning of cash on delivery?</a>
					<ul>
						<li class="subitem1"><p>Cash on delivery means that you can pay for your order at the time of order delivery at your doorstep.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">If I pay by credit card how do I get the amount back for items not delivered?</a>
					<ul>
						<li class="subitem1"><p>If we are not able to delivery all the products in your order and you have already paid for them online, the balance amount will be refunded to your hematraders account as store credit and you can use it at any time against your future orders. Should you want it to be credited to your bank account please contact our customer support team and we will refund it back on to your card.</p></li>										
					</ul>
				</li> </br>
				<h5>Delivery Related</h5>
				<li class="item10"><a href="#" title="click here">When will I receive my order?</a>
					<ul>
						<li class="subitem1"><p>Once you are done selecting your products and click on checkout you will be prompted to select delivery slot. Your order will be delivered to you on the day and slot selected by you. If we are unable to deliver the order during the specified time duration (this sometimes happens due to unforeseen situations) we will credit 10% of your order value to your hematraders account.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">How will the delivery be done?</a>
					<ul>
						<li class="subitem1"><p>We have a dedicated team of delivery personnel and a fleet of vehicles operating across the city which ensures timely and accurate delivery to our customers.</p></li>										
					</ul>
				</li> <li class="item10"><a href="#" title="click here">How do I change the delivery info (address to which I want products delivered)?</a>
					<ul>
						<li class="subitem1"><p>You can change your delivery address on our website once you log into your account. Click on "My Account" at the top right hand corner and go to the "Update My Profile" section to change your delivery address.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">How much are the delivery charges?</a>
					<ul>
						<li class="subitem1"><p>Orders above Rs.1000 are free</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Do you deliver in my area?</a>
					<ul>
						<li class="subitem1"><p>You will be able to check this detail at the time of checkout when you enter the address. If we are unable to deliver in your area - we will inform you before checkout.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Will someone inform me if my order delivery gets delayed?</a>
					<ul>
						<li class="subitem1"><p>In case of a delay, our customer support team will keep you updated about your delivery. Additionally 10% of the order value will be credited to your hematraders account which can be used in your next order.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">What is the minimum order for delivery?</a>
					<ul>
						<li class="subitem1"><p>There is no minimum order for delivery but we charge a nominal delivery charge as below. Orders above Rs.1000 are free</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Do you do same day delivery?</a>
					<ul>
						<li class="subitem1"><p>We do same day delivery provided you place your order before 12 noon on the day you want delivery.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">What is Same Day Delivery?</a>
					<ul>
						<li class="subitem1"><p>hematraders has now started same day delivery. All you have to do is order before 12 noon and we will deliver it to you the same day evening*. Any order placed after 12 noon will be delivered the next day in the slot chosen by you. For example if you place the order before 12 noon you can choose from either 4:30 pm to 7:00 pm or 7:30 pm to 10 pm slot. But, if order is placed after 12 noon you will receive it the next day in the slot chosen by you.  *Subject to slot availability.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Is Same Day Delivery applicable to only a few products or all products?</a>
					<ul>
						<li class="subitem1"><p>The Same day Delivery is applicable to our entire range of products.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Can I add products after the cut off time for a slot?</a>
					<ul>
						<li class="subitem1"><p>No, you will not be able to make any changes to your order after the cut off time for your selected slot. However, if you do not wish to buy a product you may return it at the time of delivery and the amount will be credited to your hematraders account.
						</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">How can I check availability of next slot before placing order?</a>
					<ul>
						<li class="subitem1"><p>Once you log in to your account, you will notice that on the right side of the website, under "My Basket" the next available slot in which you can order will be displayed.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Can I change my order delivery slot after placing the order?</a>
					<ul>
						<li class="subitem1"><p>Delivery slot cannot be changed once the order is placed. In case of an urgent requirement of change of slot please contact our customer support team and we will try our best to accommodate your request.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">How long will my chosen slot be blocked for me?
</a>
					<ul>
						<li class="subitem1"><p>5 minutes. After this the slot will be released for other shoppers on the website.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Is it possible to order an item which is out of stock?</a>
					<ul>
						<li class="subitem1"><p>No you can only order products which are in stock. We try to ensure availability of all products on our website however due to supply chain issues sometimes this is not possible</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">How do I check the current status of my order?</a>
					<ul>
						<li class="subitem1"><p>The only way you can check the status of your order is by contacting our customer support team.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">How do I check which items were not available from my order? Will someone inform me about the items unavailable in my order before delivery?</a>
					<ul>
						<li class="subitem1"><p>You will receive an email as well as an sms about unavailable items before the delivery of your order.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">When and how can I cancel an order?</a>
					<ul>
						<li class="subitem1"><p>You can cancel an order before the cut off time of your slot (1 pm for evening slots and 6 am for morning slots) by contacting our customer support team or you can also cancel your order from the Customer Service section on the .
						For prepaid orders the cancellation fee will be deducted from the refund amount and for Cash On D orders the cancellation charges will be debited to your hematraders wallet. In your next order it will be added as an additional charge..</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Why is there an order cancellation fee?</a>
					<ul>
						<li class="subitem1"><p>We charge an order cancellation fee to compensate for the slot, time and effort incurred towards processing an order.

Every order placed has to undergo a system driven process as well as a manual process in order to make sure the order reaches our customers on time, every time. For this purpose, a slot is booked for every order that gets placed in our system and the order picking process happens seamlessly. In this entire process we incur labor as well as an opportunity cost on the booked slot. During the event of a cancellation the entire process has to be stopped and reset. This takes up considerable processing time to open the slot yet again for another customer to order.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">What You Receive Is What You Pay For</a>
					<ul>
						<li class="subitem1"><p>At the time of delivery, we advise you to kindly check every item as in the invoice. Please report any missing item that is invoiced. As a benefit to our customers, if you are not available at the time of order delivery or you haven’t checked the list at the time of delivery we provide a window of 48hrs to report missing items. This is applicable only for items that are invoiced.</p></li>										
					</ul>
				</li> </br>
				<h5>Customer Related</h5>
				<li class="item10"><a href="#" title="click here">How do I contact customer service?</a>
					<ul>
						<li class="subitem1"><p>Our customer service team is available throughout the week, all seven days from 7 am to 10 pm. They can be reached at 9510201225 or via email at services.com</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">What are your timings to contact customer service?</a>
					<ul>
						<li class="subitem1"><p>Our customer service team is available throughout the week, all seven days from 7 am to 10 pm.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">How do I raise a claim with customer service for any of the Guarantees - Delivery Guarantee, Quality Guarantee?</a>
					<ul>
						<li class="subitem1"><p>If you face any issues with price, quality or delivery of products we will take every measure to address the issue and make it up to you. Please contact our customer support team with details or your order as well as the issue you faced.
						
Return & Refund
Return - Refund
We have a "no questions asked return and refund policy" which entitles all our members to return the product at the time of delivery if due to some reason they are not satisfied with the quality or freshness of the product. We will take the returned product back with us and issue a credit note for the value of the return products which will be credited to your account on the Site. This can be used to pay your subsequent shopping bills.

Return Policy - Time Limits:

 goods : Within 7 days from the delivery date.</p></li>										
					</ul>
				</li> </br>
				<h5>Others</h5>
				<li class="item10"><a href="#" title="click here">Do you have offline stores?</a>
					<ul>
						<li class="subitem1"><p>yes</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">Where can I find currently running offers/ promotions?</a>
					<ul>
						<li class="subitem1"><p>There is a link called "www.offers.com" on the bottom of hand side of our website. All products with any discount or promotions are listed under this section.</p></li>										
					</ul>
				</li> 
				<li class="item10"><a href="#" title="click here">What do I do if an item is defective (broken, leaking, expired)?</a>
					<ul>
						<li class="subitem1"><p>We have a no questions asked return policy. In case you are not satisfied with a product received you can return it to the delivery personnel at time of delivery or you can contact our customer support team and we will do the needful.</p></li>										
					</ul>
				</li> <li class="item10"><a href="#" title="click here">How will I get my money back in case of a cancellation or return?</a>
					<ul>
						<li class="subitem1"><p>What are the modes of refund?The amount will be refunded to your hematraders.com account to use as store credit in your forthcoming purchases. In case of credit card payments we can also credit the money back to your credit card. The money will be credited back to your account in 7-10 working days.  Please contact customer support for any further assistance regarding this issue.</p></li>										
					</ul>
				</li> <li class="item10"><a href="#" title="click here">I'd like to suggest some products. Who do I contact?</a>
					<ul>
						<li class="subitem1"><p>If you are unable to find a product or brand that you would like to shop for, please write to us at customerservice@hematraders.com and we will try our best to make the product available to you.</p></li>										
					</ul>
				</li> <li class="item10"><a href="#" title="click here">How & where I can give my feedback?</a>
					<ul>
						<li class="subitem1"><p>We always welcome feedback, both positive and negative from all our customers. Please feel free to write to us at feedback.com, or call us on 9510201225 and we will do our best to incorporate your suggestions into our system.</p></li>										
					</ul>
				</li> 
			</ul> 
			<!-- script for tabs -->
			<script type="text/javascript">
				$(function() {
				
					var menu_ul = $('.faq > li > ul'),
						   menu_a  = $('.faq > li > a');
					
					menu_ul.hide();
				
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});
				
				});
			</script>
			<!-- script for tabs -->   
		</div>
	</div>
<!-- //new -->
<?php include('footer.php'); ?>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>