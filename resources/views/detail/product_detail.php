<?php 
$total = count($related);

$numofloop = ceil(($total-4) / 4);

$data = category_menu();

// debug($data);
// die;
view('layouts/header');
?>


			<section class="header_text sub">
			<img class="pageBanner" src="/assets/user/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">



						<div class="row">
							<div class="span4">
								<a href="<?php echo $product['image'] ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo $product['image'] ?>"></a>												
						<!-- 		<ul class="thumbnails small">								
									<li class="span1">
										<a href="/assets/user/themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="/assets/user/themes/images/ladies/2.jpg" alt=""></a>
									</li>								
									<li class="span1">
										<a href="/assets/user/themes/images/ladies/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="/assets/user/themes/images/ladies/3.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="/assets/user/themes/images/ladies/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="/assets/user/themes/images/ladies/4.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="/assets/user/themes/images/ladies/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="/assets/user/themes/images/ladies/5.jpg" alt=""></a>
									</li>
								</ul> -->
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span><?php echo $product['brand'] ?></span><br>
									<strong>Product Code:</strong> <span>Product <?php echo $product['proid'] ?></span><br>
								  <strong>Category:</strong> <span><?php echo $product['ctitle'] ?></span><br>
									<!--<strong>Availability:</strong> <span>Out Of Stock</span><br> -->								
								</address>									
								<h4><strong>Price: Rs<?php echo $product['price'] ?></strong></h4>
							</div>
							<div class="span5">
								<form action="/cart/add/<?php echo $product['proid'];?>" method="post" class="form-inline">
									<label class="checkbox">
										<input type="checkbox" value=""> Option one is this and that
									</label>
									<br/>
									<label class="checkbox">
									  <input type="checkbox" value=""> Be sure to include why it's great
									</label>
									<p>&nbsp;</p>
									<label>Qty:</label>
									<input type="int" class="span1" name = "qty" placeholder="1">
									<button class="btn btn-inverse" type="submit">Add to cart</button>

								</form>
							</div>							
						</div>



						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?php echo $product['content'] ?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td><?php echo $product['size'];?></td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td><?php echo $product['colour'] ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>	


							


							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>


                                    <div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">

										<div class="active item">
											<ul class="thumbnails listing-products">
												
												<?php $count = 1;
												foreach($related as $item){ 
													if($count <= 3){ 
														$count += 1;

												?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="/product/detail/<?php echo $item['proid'];?>"><img alt="" src="<?php echo $item['image'] ?>"></a><br/>
														<a href="/product/detail/<?php echo $item['proid'];?>" class="title"><?php ?><?php echo $item['title']; ?></a><br/>
														<a href="/category/detail/<?php echo $product['cid']; ?>" class="category"><?php echo $product['ctitle']; ?></a>
														<p class="price">Rs <?php echo $item['price']; ?></p>
													</div>
												</li>
											


												<?php 
											} else
											
												   $remaning[] = $item;
											} ?>	
			
											</ul>
										</div>

											   	<?php 
										  // debug($remaning);


										    // foreach($remaning as $goods){
										   	$k = -1;
										   	if(isset($remaning)){
										   	$num = count($remaning);
										   }
										   //	echo $num;
										       

										 	 for($j=0; $j < $numofloop; $j++){ ?>

										
										<div class="item">
											<ul class="thumbnails listing-products">


												   <?php 
                                             for($i=0; $i<3; $i++){ 
                                             	$k = $k + 1;
                                             	if($k < $num){
                                             	
                                             	?>

												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="/product/detail/<?php echo $remaning[$k]['proid']?>"><img alt="" src="<?php echo $remaning[$k]['image'];?>"></a><br/>
														<a href="/product/detail/<?php echo $remaning[$k]['proid']?>" class="title"><?php echo $remaning[$k]['title']; ?></a><br/>
														<a href="/category/detail/<?php echo $product['cid']; ?>" class="category"><?php echo $product['ctitle']; ?></a>
														<p class="price">Rs <?php echo $remaning[$k]['price'];?></p>
													</div>
												</li>       
										<!-- 		<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="/assets/user/themes/images/ladies/2.jpg"></a><br/>
														<a href="product_detail.html">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="/assets/user/themes/images/ladies/3.jpg"></a><br/>
														<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
													</li> -->
														<?php } else
												                break;
											}  ?>
										
										

												
											</ul>
											
										</div>
										<?php } ?>

									
									</div>
								</div>
							</div>
					
						

						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="#">Donec laoreet dui</a></li>
								<li><a href="#">Nullam semper elementum</a></li>
								<li><a href="#">Phasellus ultricies</a></li>
								<li><a href="#">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="#">Adidas</a></li>
								<li><a href="#">Nike</a></li>
								<li><a href="#">Dunlop</a></li>
								<li><a href="#">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">

									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="/product/detail/<?php echo $random[0]['proid'] ?>"><img alt="" src="<?php echo $random[0]['image'] ?>"></a><br/>
													<a href="/product/detail/<?php echo $random[0]['proid']; ?>" class="title"><?php echo $random[0]['title'] ?></a><br/>
													<a href="/category/detail/<?php echo $random[0]['cid']; ?>" class="category"><?php echo $random[0]['ctitle'] ?></a>
													<p class="price">Rs <?php echo $random[0]['price'];?></p>
												</div>
											</li>
										</ul>
									</div>
									<?php for($i=1; $i<=4; $i++){?>
									<div class="item">
										<ul class="thumbnails listing-products">
										
											<li class="span3">
												<div class="product-box">												
													<a href="product/detail/<?php echo $random[$i]['proid']; ?>"><img alt="" src="<?php echo $random[$i]['image']; ?>"></a><br/>
													<a href="product/detail/<?php echo $random[$i]['proid']; ?>" class="title"> <?php echo $random[$i]['title'] ?></a><br/>
													<a href="category/detail/<?php echo $random[$i]['cid']; ?>" class="category"><?php echo $random[$i]['ctitle'] ?></a>
													<p class="price">Rs <?php echo $random[$i]['price']; ?></p>
												</div>
											</li>
										
										</ul>
									</div>
										<?php }?>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">

							<?php for($j=2; $j<=4; $j++){?>
								<li>
									<a href="/product/detail/<?php echo $random[$j]['proid']; ?>" title="<?php echo $random[$j]['title'] ?>">
										<img src="<?php echo $random[$j]['image']; ?>" alt="Praesent tempor sem sodales">
									</a>
									<a href="/category/detail/<?php echo $random[$j]['cid']; ?>"><?php echo $random[$j]['ctitle'] ?></a>
								</li>

								<?php } ?>
								<!-- <li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="/assets/user/themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="/assets/user/themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>    -->
							</ul>
						</div>
					</div>
				</div>
			</section>	


	<?php view('layouts/footer') ;?>
		<script src="/assets/user/themes/js/common.js"></script>
		

		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});

		</script>
    </body>
</html>
