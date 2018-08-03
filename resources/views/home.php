<?php

$data = category_menu();

//debug($products);
$numofloop = ceil(($total-4) / 4);

//echo $numofloop;

//debug($products);

view('layouts/header',compact('userinfo'));
?>

     <!-- home page slider -->
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="/assets/user/themes/images/carousel/banner-1.jpg" alt="" />
						</li>
					
						<li>
							<img src="/assets/user/themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>



			<section class="header_text">
				<marquee>We stand to make you more closer with latest fashion.</marquee>
				<br/>Don't miss our fashion advice from world's top designers.<a class="btn btn-primary"href="">For Man</a> <a class="btn btn-success" href="">For Women</a>
			</section>



     <!-- main content -->


			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">									
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">

										<div class="active item">
											<ul class="thumbnails">
												<?php $count = 1; ?>

												<?php foreach($products as $item){

													if($count <= 4){
														$count += 1;
													?>
												<?php 
												//echo $item['id'];

												?>



												<li class="span3">


													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="/product/detail/<?php echo $item['proid']?>"><img src="<?php echo $item['image'] ?>" alt="" /></a></p>
														<a href="/product/detail/<?php echo $item['proid']?>" class="title"><?php echo $item['title'] ?></a><br/>
														<a href="/category/detail/<?php echo $item['id']?>" class="category"><?php echo $item['ctitle'] ?></a>
														<p class="price">Rs<?php echo $item['price'];?></p>
													</div>
												</li>

												<?php } else
												   $remaning[] = $item; 

											}?>
												  
												 
											
											   


												<!-- <li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/ladies/2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$32.50</p>
													</div>
												</li>


												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/ladies/3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly turned</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$14.20</p>
													</div>
												</li>


												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/ladies/4.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think fast</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$31.45</p>
													</div>
												</li> -->


											</ul>
										</div>


										   	<?php 
										  // debug($remaning);


										    // foreach($remaning as $goods){
										   	$k = -1;
										   	$num = count($remaning);
										   //	echo $num;
										       

										 	 for($j=0; $j < $numofloop; $j++){ ?>

										 	 	


										   			<div class="item">
											        <ul class="thumbnails">


                                              <?php 
                                             for($i=0; $i<4; $i++){ 
                                             	$k = $k + 1;
                                             	if($k < $num){
                                             	
                                             	?>
                                         
                                              		<li class="span3">
													<div class="product-box">
														<p><a href="/product/detail/<?php echo $remaning[$k]['proid']?>"><img src="<?php echo $remaning[$k]['image'] ?>" class="img-fluid" alt="" /></a></p>
														<a href="/product/detail/<?php echo $remaning[$k]['proid']?>" class="title"><?php echo $remaning[$k]['title'] ?></a><br/>
														<a href="/category/detail/<?php echo $remaning[$k]['id'];?>" class="category"><?php echo $remaning[$k]['ctitle'];?></a>
														<p class="price">Rs<?php echo $remaning[$k]['price'] ?></p>
													</div>
												</li>
                                             
									
									
												
													<?php /*<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="<?php echo $goods['image'] ?>" alt="" /></a></p>
														<a href="product_detail.html" class="title"><?php echo $goods['first']['title'] ?></a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">Rs. <?php echo $goods['first']['price'] ?></p>
													</div>
												</li>

													<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="<?php echo $goods['second']['image'] ?>" alt="" /></a></p>
														<a href="product_detail.html" class="title"><?php echo $goods['second']['title'] ?></a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">Rs. <?php echo $goods['second']['price'] ?></p>
													</div>
												</li> */ ?>

												<?php } else
												   break;
											} ?>
													</ul>
										              </div>
												 
										<?php	}
												?>
													
											
												
											<?php //	}
										

												 ?>

									


											


												<!-- <li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/ladies/7.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think water</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$10.45</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/ladies/8.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$35.50</p>
													</div>
												</li> -->																																	
											<!-- </ul>
										</div> -->
									</div>							
								</div>

							</div>						
						</div>


						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a> <a class="right button" href="#myCarousel-2" id="pageInc" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">

											<ul class="thumbnails">
											<?php $sn = 1;
											foreach($now as $item){
											if($sn <= 4){
												$sn += 1;
											?>											
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="/product/detail/<?php echo $item['proid']?>"><img src="<?php echo $item['image']; ?>" alt="" /></a></p>

														<a href="/product/detail/<?php echo $item['proid']?>" class="title"><?php echo $item['title'];?></a><br/>

														<a href="/category/detail/<?php echo $item['id']?>" class="category"><?php echo $item['ctitle']; ?></a>
														<p class="price">Rs <?php echo $item['price'] ?></p>
													</div>
												</li>


											<!-- 	<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$17.55</p>
													</div>
												</li> -->


												<!-- <li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/cloth/bootstrap-women-ware6.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly turned</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.30</p>
													</div>
												</li> -->


												<!-- <li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/cloth/bootstrap-women-ware5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think fast</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$25.60</p>
													</div>
												</li> -->
											<?php } else 
											  $remaning[] = $item;

											}
											 ?>


											</ul>
										</div>

											<?php 
										  // debug($remaning);


										    // foreach($remaning as $goods){
										   	$k = -1;
										   	$num = count($remaning);
										   //	echo $num;
										       

										 	 for($j=0; $j < $numofloop; $j++){ ?>


										<div class="item">
											<ul class="thumbnails">

												      <?php 
                                             for($i=0; $i<4; $i++){ 
                                             	$k = $k + 1;
                                             	if($k < $num){
                                             	
                                             	?>

												<li class="span3">
													<div class="product-box">
														<p><a href="/product/detail/<?php echo $remaning[$k]['proid']?>"><img src="<?php echo $remaning[$k]['image'];?>" alt="" /></a></p>
														<a href="/product/detail/<?php echo $remaning[$k]['proid']?>" class="title"><?php echo $remaning[$k]['title']; ?></a><br/>

														<a href="/category/detail/<?php echo $remaning[$k]['id'];?>" class="category"><?php echo $remaning[$k]['ctitle'] ?></a>

														<p class="price">Rs <?php echo $remaning[$k]['price']  ?></p>
													</div>
												</li>

										<!-- 		<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/cloth/bootstrap-women-ware3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$33.50</p>
													</div>
												</li>
 -->												
											<!-- 	<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think water</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$45.30</p>
													</div>
												</li> -->


												<!-- <li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="/assets/user/themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.20</p>
													</div>
												</li> -->
														<?php } else
												   break;
											} ?>																																
											</ul>
										</div>
										<?php	}
												?>
					

									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="/assets/user/themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="/assets/user/themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="/assets/user/themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>





			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="/assets/user/themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="/assets/user/themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="/assets/user/themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="/assets/user/themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="/assets/user/themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="/assets/user/themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>



<?php

view('layouts/footer'); 
?>


<!-- <script>

	$(document).ready(function()){

		$('.right button').click(function)(){
			var pg
		}
	}



</script> -->