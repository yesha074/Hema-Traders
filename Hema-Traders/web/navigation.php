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
									
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<li class="active"><a href="about.php" class="act">About Us</a></li>	
									<li class="active"><a href="services.php" class="act">Our Services</a></li>	
									<!-- Mega Menu -->
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Categories<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<a href="all_products.html"><h6>All Household</h6></a>


														<?php
														
														$get_cats = "select * from categories";
														$run_cats= mysqli_query($con,$get_cats);
														while($row_cats=mysqli_fetch_array($run_cats)){
														$cat_id=$row_cats['cat_id'];
														$cat_title=$row_cats['cat_title'];
														echo "<li><a href='cat.php?cat=$cat_id'>$cat_title</a></li>";
														}
														?>
														
														<li><a href="household.php"></a></li>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									
									
									<li><a href="offers.php">Offers</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="contact.php">Feedback</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
