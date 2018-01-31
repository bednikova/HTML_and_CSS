<?php

?>
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		
		<title> The PC Shop </title>
		
	</head>
	
	<body>
		<div id="page_wrapper">
			
			<!-- START top header -->
			<div id="top_header" >
				<div id="top_logo">
					
				</div>
				<div id="company_name">GEEK MANIA</div>
				<div id="slogan">The PC Store</div>
			</div>
			<!-- END top header -->

			<!-- START top menu -->
			<nav id="top_menu_nav">
				<ul id="top_menu_list">
					<li class="active"> <a href="index.php"> Home </a> </li>
					<li> 
						<a href="products.php"> Products </a> 
						<ul class="top_menu_submenu">
                                                        <li> <a href="laptops.php">Laptops</a> </li>
							<li> <a href="pc.php">PC's</a> </li>
							<li> <a href="network.php">Network</a> </li>
							<li> <a href="upgrade.php">Upgrade</a> </li>
							<li> <a href="accessories.php">Accessories</a> </li>
						</ul>
					</li>
					<li> <a href="cart.php"> Shopping cart </a> </li>
					<li> <a href="account.php"> My Account </a> </li>
					<li> <a href="contact.php"> Contact Us </a> </li>
				</ul>
			</nav>
			<!-- END top menu -->

			<!-- START breadcrumbs -->
			<ul id="breadcrumb">
				<li> <a href="#"> Home </a> </li>
				<li> <a href="#"> Home </a> </li>
				<li> Products </li>
			</ul>
			<!-- END breadcrumbs -->

			<!-- START page body -->
			<div id="page_body">


				<!-- START Featured products -->
				
				<!-- Page Body title -->
				<header class="content-title">
					<div class="title-bg">
						<h1 class="title">Featured Products</h1>
					</div><!-- End .title-bg -->
					<p class="title-desc">Our featured products</p>
				</header>
				<!-- END Page body title -->
				
				<div id="featured_products">
					
						<!-- START Product tile -->
						<div class="featured_product_tile">
							<a href="product.php">
								<img class="featured_product_image" src="img/products/small/product1.jpg" alt=""/>
								<span class="featured_product_name">Product Name 1</span>
								<span class="featured_product_description">This will be a short product description for the featured products</span>
								<span class="featured_product_price">$2222.55</span>
							</a>
						</div>
						<!-- END Product tile -->

						<!-- START Product tile -->
						<div class="featured_product_tile">
							<a href="product.php">
								<img class="featured_product_image" src="img/products/small/product1.jpg" alt=""/>
								<span class="featured_product_name">Product Name 1</span>
								<span class="featured_product_description">This will be a short product description for the featured products</span>
								<span class="featured_product_price">$2222.55</span>
							</a>
						</div>
						<!-- END Product tile -->

						<!-- START Product tile -->
						<div class="featured_product_tile">
							<a href="product.php">
								<img class="featured_product_image" src="img/products/small/product1.jpg" alt=""/>
								<span class="featured_product_name">Product Name 1</span>
								<span class="featured_product_description">This will be a short product description for the featured products</span>
								<span class="featured_product_price">$2222.55</span>
							</a>
						</div>
						<!-- END Product tile -->
						
						<!-- START Product tile -->
						<div class="featured_product_tile">
							<a href="product.php">
								<img class="featured_product_image" src="img/products/small/product1.jpg" alt=""/>
								<span class="featured_product_name">Product Name 1</span>
								<span class="featured_product_description">This will be a short product description for the featured products</span>
								<span class="featured_product_price">$2222.55</span>
							</a>
						</div>
						<!-- END Product tile -->

						<!-- START Product tile -->
						<div class="featured_product_tile">
							<a href="product.php">
								<img class="featured_product_image" src="img/products/small/product1.jpg" alt=""/>
								<span class="featured_product_name">Product Name 1</span>
								<span class="featured_product_description">This will be a short product description for the featured products</span>
								<span class="featured_product_price">$2222.55</span>
							</a>
						</div>
						<!-- END Product tile -->

						<!-- START Product tile -->
						<div class="featured_product_tile">
							<a href="product.php">
								<img class="featured_product_image" src="img/products/small/product1.jpg" alt=""/>
								<span class="featured_product_name">Product Name 1</span>
								<span class="featured_product_description">This will be a short product description for the featured products</span>
								<span class="featured_product_price">$2222.55</span>
							</a>
						</div>
						<!-- END Product tile -->

				</div>
				<!-- END Featured products -->

			</div>
			<!-- END page body -->

			<!-- Start footer -->
			<div id="footer">
				<nav id="footer_menu">
					<ul id="footer_menu_list">
						<li class="active"> <a href="index.php"> Home </a> </li>
						<li><a href="products.php"> Products </a></li>
						<li> <a href="cart.php"> Shopping cart </a> </li>
						<li> <a href="account.php"> My Account </a> </li>
						<li> <a href="contact.php"> Contact Us </a> </li>
					</ul>
				</nav>
				<div id="footer_contact_info">
					<span id="footer_contact_phone"><i class="fa fa-mobile-phone fa-lg">&nbsp;</i>555-555-555</span>
					<span id="footer_contact_mail"><i class="fa fa-fw fa-envelope fa-lg">&nbsp;</i>test@example.com</span>
					<span id="footer_contact_mailing"><i class="fa fa-map-marker fa-lg">&nbsp;</i>123 Sample Str. Sofia, Bulgaria</span>
				</div>
			</div>
			<!-- End footer -->
		</div>
	</body>
	
</html>