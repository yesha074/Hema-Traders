<?php
//Establishing the connection
$db=mysqli_connect("localhost","root","","hematraders");
//functions for getting the IP address

function getRealIPAddr(){
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	//check ip from share internet
	$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		//to check ip is pass from proxy
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else{
		
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}
	
//getting the defaults for customers

function getDefault(){
	global $db;
	

	$c=$_SESSION['customer_email'];
	
	$get_c="select * from customers where customer_email='$c'";
	
	$run_c=mysqli_query($db,$get_c);
	
	$row_c=mysqli_fetch_array($run_c);
		$customer_id=$row_c['customer_id'];
			if(!isset($_GET['my_orders'])){
				if(!isset($_GET['pay_offline'])){
			if(!isset($_GET['edit_account'])){
				if(!isset($_GET['change_pass'])){
					if(!isset($_GET['order_id'])){
					if(!isset($_GET['delete_account'])){
						$get_orders="select * from customer_orders where customer_id='$customer_id' AND order_status='pending'";
						$run_orders=mysqli_query($db,$get_orders);
						$count_orders=mysqli_num_rows($run_orders);
						if($count_orders>0){
							echo "
							<div style='padding:10px;'>
							<table border='3px'><tr><td>
							<h2 style='color:red;text-decoration:underline;'>Important!</h2></br>
							<h4><font color=''>You have ($count_orders) Pending Orders!</h4></br>
							<h4>Please see your orders detail by clicking this <a href='my_account.php?my_orders'>Link</a> Or You can <a href='my_account.php?pay_offline'>Pay Offine</a> Now.</h4></td></tr></font>
							</table>
							</div>";
						}
						else{
							
							echo "<div style='padding:10px'>
							<table border='3px'><tr><td>
							<h2 style='color:red;text-decoration:underline;'>Important!</h2></br>
							<h4>You have No Pending Orders!</h4>
							<h4>You can see your orders history by clicking this <a href='my_account.php?my_orders'>Link</a></h4></td></tr>
							</table>
							</div>";
						}
					}
				}
			}
		}
}
}
}

//creating the script for cart
function cart(){
	global $db;	
	if(isset($_GET['add_cart'])){
		$ip_add = getRealIPAddr();
		$p_id = $_GET['add_cart'];
		$check_pro="select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
		$run_check = mysqli_query($db,$check_pro);
		if(mysqli_num_rows($run_check)>0){
			echo "";
			
		}
		else{
			$q="insert into cart (p_id,ip_add) values ('$p_id','$ip_add')";
			$run_q=mysqli_query($db,$q);
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
	
	
	
}


//getting the number of items from the cart
function items(){
	global $db;
	if(isset($_GET['add_cart'])){
				$ip_add = getRealIPAddr();
		$get_items = "select * from cart where ip_add = '$ip_add'";
		$run_items=mysqli_query($db,$get_items);
		$count_items=mysqli_num_rows($run_items);
	}
	else{
				$ip_add = getRealIPAddr();
		$get_items = "select * from cart where ip_add = '$ip_add'";
		$run_items=mysqli_query($db,$get_items);
		$count_items=mysqli_num_rows($run_items);
		
		
	}
	echo $count_items;
	
}


//getting the total price of the items from cart

function total_price(){
	global $db;
	$ip_add = getRealIPAddr();
	$total=0;
	$sel_price = "select * from cart where ip_add='$ip_add'";
	$run_price = mysqli_query($db, $sel_price);
	while($record=mysqli_fetch_array($run_price)){
		
		$pro_id = $record['p_id'];
		$pro_price = "select * from products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($db,$pro_price);
		while($p_price=mysqli_fetch_array($run_pro_price)){
			
			$product_price = array($p_price['product_price']);
			$values= array_sum($product_price);
			$total += $values;
		}
	}
	
		
}



//index page products
function getPro(){
	
			global $db;	
				if(!isset($_GET['cat'])){
					
					
		$get_products="select * from products order by rand() LIMIT 0,6";		
			$run_products=mysqli_query($db,$get_products);
			while($row_products=mysqli_fetch_array($run_products)){
				$pro_id=$row_products['product_id'];
				$pro_title=$row_products['product_title'];
				$pro_cat=$row_products['cat_id'];
				$pro_desc=$row_products['product_desc'];
				$pro_price=$row_products['product_price'];
				$pro_image=$row_products['product_img1'];
				echo "
					<div class='agile_top_brands_grids'>
						<div class='col-md-4 top_brand_left'>
							<div class='hover14 column'>
								<div class='agile_top_brand_left_grid'>
									<div class='agile_top_brand_left_grid_pos'>
										<img src='images/offer.png' alt=' ' class='img-responsive' />
									</div>
								<div class='agile_top_brand_left_grid1'>
									<figure>
										<div class='snipcart-item block' >
											<div class='snipcart-thumb'>
												<div>
													<a href='single.php?pro_id=$pro_id'><img height='150' width='170' src='admin/product_images/$pro_image' /></a>	
													<p>$pro_title</p>
														<div class='stars'>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star gray-star' aria-hidden='true'></i>
												</div>
													<h4>Rs$pro_price.00</h4>
											</div>
											<div class='snipcart-details top_brand_home_details'>
											<span><a href='login.php?buy=$pro_id'><input type='submit' name='submit' value='Buy Now' class='button' /></a></span>
																						</div>

													<div class='snipcart-details top_brand_home_details'>
													<span><a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='Add to cart' class='button' /></a></span>
												
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>";
				}
			
				}
	
	
}






function getCatPro(){
	
			global $db;	
				if(isset($_GET['cat'])){
					$cat_id=$_GET['cat'];
					
		$get_cat_pro="select * from products where cat_id='$cat_id'";		
			$run_products=mysqli_query($db,$get_cat_pro);
			while($row_products=mysqli_fetch_array($run_products)){
				$pro_id=$row_products['product_id'];
				$pro_title=$row_products['product_title'];
				$pro_cat=$row_products['cat_id'];
				$pro_desc=$row_products['product_desc'];
				$pro_price=$row_products['product_price'];
				$pro_image=$row_products['product_img1'];
				echo "
					<div class='agile_top_brands_grids'>
						<div class='col-md-4 top_brand_left'>
							<div class='hover14 column'>
								<div class='agile_top_brand_left_grid'>
									<div class='agile_top_brand_left_grid_pos'>
										<img src='images/offer.png' alt=' ' class='img-responsive' />
									</div>
								<div class='agile_top_brand_left_grid1'>
									<figure>
										<div class='snipcart-item block' >
											<div class='snipcart-thumb'>
												<div>
													<a href='single.php?pro_id=$pro_id'><img height='150' width='170' src='admin/product_images/$pro_image' /></a>	
													<p>$pro_title</p>
														<div class='stars'>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star gray-star' aria-hidden='true'></i>
												</div>
													<h4>Rs$pro_price.00</h4>
											</div>
												<div class='snipcart-details top_brand_home_details'>
											<span><a href='login.php?buy=$pro_id'><input type='submit' name='submit' value='Buy Now' class='button' /></a></span>
																						</div>

													<div class='snipcart-details top_brand_home_details'>
													<span><a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='Add to cart' class='button' /></a></span>
												
											</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>";
				}
			
				}
	
	
}


function getBrandPro(){
	
			global $db;	
				if(isset($_GET['brand'])){
					$brand_id=$_GET['brand'];
					
		$get_brand_pro="select * from products where brand_id='$brand_id'";		
			$run_products=mysqli_query($db,$get_brand_pro);
			while($row_products=mysqli_fetch_array($run_products)){
				$pro_id=$row_products['product_id'];
				$pro_title=$row_products['product_title'];
				$pro_cat=$row_products['cat_id'];
				$pro_desc=$row_products['product_desc'];
				$pro_price=$row_products['product_price'];
				$pro_image=$row_products['product_img1'];
				echo "
					<div class='agile_top_brands_grids'>
						<div class='col-md-4 top_brand_left'>
							<div class='hover14 column'>
								<div class='agile_top_brand_left_grid'>
									<div class='agile_top_brand_left_grid_pos'>
										<img src='images/offer.png' alt=' ' class='img-responsive' />
									</div>
								<div class='agile_top_brand_left_grid1'>
									<figure>
										<div class='snipcart-item block' >
											<div class='snipcart-thumb'>
												<div>
													<a href='single.php?pro_id=$pro_id'><img height='150' width='170' src='admin/product_images/$pro_image' /></a>	
													<p>$pro_title</p>
														<div class='stars'>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star gray-star' aria-hidden='true'></i>
												</div>
													<h4>Rs$pro_price.00</h4>
											</div>
												<div class='snipcart-details top_brand_home_details'>
											<span><a href='login.php?buy=$pro_id'><input type='submit' name='submit' value='Buy Now' class='button' /></a></span>
																						</div>

													<div class='snipcart-details top_brand_home_details'>
													<span><a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='Add to cart' class='button' /></a></span>
												
											</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>";
				}
			
				}
	
	
}
//new products
function getPros(){
	
			global $db;											
		$get_products="select * from products order by rand() LIMIT 0,3";		
			$run_products=mysqli_query($db,$get_products);
			while($row_products=mysqli_fetch_array($run_products)){
				$pro_id=$row_products['product_id'];
				$pro_title=$row_products['product_title'];
				$pro_cat=$row_products['cat_id'];
				$pro_desc=$row_products['product_desc'];
				$pro_price=$row_products['product_price'];
				$pro_image=$row_products['product_img1'];
				echo "
					<div class='agile_top_brands_grids'>
						<div class='col-md-4 top_brand_left'>
							<div class='hover14 column'>
								<div class='agile_top_brand_left_grid'>
									<div class='agile_top_brand_left_grid_pos'>
										<img src='images/offer.png' alt=' ' class='img-responsive' />
									</div>
								<div class='agile_top_brand_left_grid1'>
									<figure>
										<div class='snipcart-item block' >
											<div class='snipcart-thumb'>
												<div>
													<a href='single.php?pro_id=$pro_id'><img height='150' width='170' src='admin/product_images/$pro_image' /></a>	
													<p>$pro_title</p>
														<div class='stars'>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star blue-star' aria-hidden='true'></i>
														<i class='fa fa-star gray-star' aria-hidden='true'></i>
												</div>
													<h4>Rs$pro_price.00</h4>
											</div>
												<div class='snipcart-details top_brand_home_details'>
											<span><a href='login.php?buy=$pro_id'><input type='submit' name='submit' value='Buy Now' class='button' /></a></span>
																						</div>

													<div class='snipcart-details top_brand_home_details'>
													<span><a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='Add to cart' class='button' /></a></span>
												
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>";
				}
}

//single page product details
function single(){
	global $db;
	if(isset($_GET['pro_id'])){
		$product_id=$_GET['pro_id'];
	$get_products="select * from products where product_id=$product_id";		
			$run_products=mysqli_query($db,$get_products);
			while($row_products=mysqli_fetch_array($run_products)){
				$pro_id=$row_products['product_id'];
				$pro_title=$row_products['product_title'];
				$pro_cat=$row_products['cat_id'];
				$pro_desc=$row_products['product_desc'];
				$pro_price=$row_products['product_price'];
				$pro_image1=$row_products['product_img1'];
				$pro_image2=$row_products['product_img2'];
				$pro_image3=$row_products['product_img3'];
				echo "
	<div class='products'>
		<div class='container'>
			<div class='agileinfo_single'>
				
				<div class='col-md-4 agileinfo_single_left'>
				<a href='single.php?pro_id=$pro_id'><img height='230' width='250' src='admin/product_images/$pro_image1' /></a>	<br>
				<a href='single.php?pro_id=$pro_id'><img height='130' width='150' src='admin/product_images/$pro_image2' /></a>	
				<a href='single.php?pro_id=$pro_id'><img height='130' width='150' src='admin/product_images/$pro_image3' /></a>	
				</div>

				<div class='col-md-8 agileinfo_single_right'>
				<h2>$pro_title</h2>

					<div class='rating1'>
						<span class='starRating'>
							<input id='rating5' type='radio' name='rating' value='5'>
							<label for='rating5'>5</label>
							<input id='rating4' type='radio' name='rating' value='4'>
							<label for='rating4'>4</label>
							<input id='rating3' type='radio' name='rating' value='3' checked=''>
							<label for='rating3'>3</label>
							<input id='rating2' type='radio' name='rating' value='2'>
							<label for='rating2'>2</label>
							<input id='rating1' type='radio' name='rating' value='1'>
							<label for='rating1'>1</label>
						</span>
					</div>
					<div class='w3agile_description'>
						<h4>Description :</h4>
						<p>$pro_desc</p>
					</div>
					<div class='snipcart-item block'>
						<div class='snipcart-thumb agileinfo_single_right_snipcart'>
							<h4 class='m-sing'>Rs.$pro_price.00</h4>
							
						</div>
						
						
						
						<h4 class='m-sing'><a href='index.php'>Back</a> </h4><br><br>
						
						<div class='snipcart-details top_brand_home_details'>
											<span><a href='login.php?buy=$pro_id'><input type='submit' name='submit' value='Buy Now' class='button' /></a></span>
																						</div>

													<div class='snipcart-details top_brand_home_details'>
													<span><a href='index.php?add_cart=$pro_id'><input type='submit' name='submit' value='Add to cart' class='button' /></a></span>
												
											</div>
					</div>
				</div>
				<div class='clearfix'> </div>
			</div>
		</div>
	</div>";
			}
	
	
	}
}
?>