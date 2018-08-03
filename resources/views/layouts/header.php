<?php

$data = category_menu();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Online Shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="/assets/user/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="/assets/user/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="/assets/user/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="/assets/user/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="/assets/user/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="/assets/user/themes/js/jquery-1.7.2.min.js"></script>
		<script src="/assets/user/bootstrap/js/bootstrap.min.js"></script>				
		<script src="/assets/user/themes/js/superfish.js"></script>	
		<script src="/assets/user/themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

    <body>	


		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">

<!--             <div class="col-sm-3">
						<div class="search_box pull-left">
							<input type="text" placeholder="eg.T-shirt">
						</div>
					</div>
 -->
				<!-- 	<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-shirt" name="search">
						<button type="submit" class="btn btn-info">Search</button>
					</form> -->
					<?php
					if(isset($_SESSION['user']['id'])){ 

					echo 'UserName:' . $_SESSION['user']['username'];
					echo '<br>';
					echo 'Id:' . $_SESSION['user']['id'];
					

			    	} ?>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="/cart">Your Cart</a></li>
							<li><a href="/out">Logout</a></li>					
							<li><a href="/user/register">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div id="wrapper" class="container">



  <!-- top bar menu -->

			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="/home" class="logo pull-left"><img src="/assets/user/themes/images/o_shop.png" width="200" height="100" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">


						<ul>
							<?php
							//debug($data);
							//die;
							foreach($data as $key=>$parent){ ?>
							<li><a ><?php echo $parent['ctitle']; ?></a>
							
							<?php if($parent['child']){ ?>
								<ul>
								<?php foreach($parent['child'] as $key=>$child){
									

								?>

								
									<li><a href="/category/detail/<?php echo $child['id'];?>"> <?php echo $child['ctitle']?> </a></li>									
									<!-- <li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>	 -->								
								
								<?php
							  } ?>
							  </ul>
							 
							<?php	 } ?>
							</li>

							<?php }?>

						<!-- 	<li><a href="./products.html">Man</a></li>	

							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>

							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li> -->
						</ul>
					</nav>
				</div>
			</section>
			