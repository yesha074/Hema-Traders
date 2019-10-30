<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>Household Products <a href="../products.php">SHOP NOW</a></p>
			</div>
			<?php cart(); 
			
			?>
			<div class="agile-login">
				<ul>
				<?php
				
				if(!isset($_SESSION['customer_email'])){ 
					echo "<li><a href='../index.php'> Welcome Guest! </a></li>";
					echo "<li><a href='../registered.php'> Create Account </a></li>";
				}				
				else{
					
					echo "<li><a href='../index.php'> Welcome  "."<span style='color:yellow'>".$_SESSION['customer_email']."</span>"."!</a></li>";
				}
				?>
					
					<?php
					if(!isset($_SESSION['customer_email'])){
						echo "<li><a href='../login.php'>Login</a></li>";

						
					}
					else{
						echo "<li><a href='../logout.php' style='color:#F93;'><h5>Logout</h5></a></li>";
						
					}
					
					?>
					




				</ul>
			</div>
			
			<div class="product_list_header">  
					

						
						<a href="../checkout.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
						<?php
						if(isset($_SESSION['customer_email'])){
						
						echo "<a href='my_account.php'><button class='w3view-cart' type='submit' name='submit' value=''><i class='fa fa-user' aria-hidden='true'></i></button></a>";
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
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : 95102 01225</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="../index.php">Hema Traders</a></h1>
			</div>
		<div class="w3l_search">
			<form action="../results.php" method="get" enctype="multipart/form-data">
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
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"></li>
									
									<li class="active"><a href="../index.php" class="act">Home</a></li>	
									<li class="active"><a href="../about.php" class="act">About Us</a></li>	
									<li class="active"><a href="../services.php" class="act">Our Services</a></li>	
									<!-- Mega Menu -->
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Categories<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<a href="../products.php"><h6>All Household</h6></a>


														<?php
														
														$get_cats = "select * from categories";
														$run_cats= mysqli_query($con,$get_cats);
														while($row_cats=mysqli_fetch_array($run_cats)){
														$cat_id=$row_cats['cat_id'];
														$cat_title=$row_cats['cat_title'];
														echo "<li><a href='../cat.php?cat=$cat_id'>$cat_title</a></li>";
														}
														?>
														
														<li><a href="../products.php"></a></li>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									
									
								
									<li><a href="../contact.php">Contact</a></li>
									<li><a href="../contact.php">Feedback</a></li>
								</ul>
							</div>
							</nav><div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
		</br>
	