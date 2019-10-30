<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>Household Products <a href="products.php">SHOP NOW</a></p>
			</div>
			<?php cart(); 
			
			?>
			<div class="agile-login">
				<ul>
				<?php
				
				if(!isset($_SESSION['customer_email'])){ 
					echo "<li><a href='index.php'> Welcome Guest! </a></li>";
					echo "<li><a href='registered.php'> Create Account </a></li>";
				}				
				else{
					
					echo "<li><a href='index.php'> Welcome  "."<span style='color:yellow'>".$_SESSION['customer_email']."</span>"."!</a></li>";
				}
				?>
					
					<?php
					if(!isset($_SESSION['customer_email'])){
						echo "<li class='dropdown'>
										<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Login<b class='caret'></b></a>
										<ul class='dropdown-menu multi-column columns-3'>
											<div class='row'>
												<div class='multi-gd-img'>
													<ul class='multi-column-dropdown'>
														<a href='login.php'><h6>Login</h6></a>


														<li><a href='admin/login.php' title='Admin'>
			
				<img src='images/host.png' style='width:30px; height:30px;'/>
				
			</a></li>
														
														<li><a href='login.php' title='User'>
				<img src='images/user.jpg' style='width:30px; height:30px;'/>
				
			</a></li>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>";
						

						
					}
					else{
						echo "<li><a href='logout.php' style='color:#F93;'><h5>Logout</h5></a></li>";
						
					}
					
					?>
					
					



				</ul>
			</div>
			
						<div class="product_list_header">  
					
						<a href="checkout.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
						<?php
						if(isset($_SESSION['customer_email'])){
						
						echo "<a href='customer/my_account.php'><button class='w3view-cart' type='submit' name='submit' value=''><i class='fa fa-user' aria-hidden='true'></i></button></a>";
						}
						?>
					

			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : 95102 01225</li><li></li>
					
				</ul>
			</div>
			
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Hema Traders</a></h1>
			</div>
		<div class="w3l_search">
			<form action="results.php" method="get" enctype="multipart/form-data">
				<input type="search" name="user_query" placeholder="Search for a Product..." required="">
				<button type="submit" name="search" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"></i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->