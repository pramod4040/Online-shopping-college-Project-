<?php view('layouts/header');

?>  
				
		<section class="header_text sub">
			<img class="pageBanner" src="/assets/user/themes/images/pageBanner.png" alt="" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<?php 

             view('layouts/message');

			?>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						
						<?php if(isset($items)){ ?>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$subtotal = 0;
								foreach($items as $key=>$item) {?>
								<tr>
									<td><a href="/cart/delete/<?php echo $item['proid']?>" class="btn btn-danger">DELETE</a></td>
									<td><a href="product_detail.html"><img alt="" src="<?php echo $item['image'] ?>" width="200px"></a></td>
									<td><?php echo $item['title'] ?></td>

									<td> <?php echo $item['qty']?> </td>
									<td><?php echo $item['price']?></td>
									<td><?php echo $item['sub_total'] ?></td>
									<?php $subtotal += $item['sub_total']; ?>
								</tr> 
								<?php } ?>
								


								<!-- <tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="/assets/user/themes/images/ladies/1.jpg"></a></td>
									<td>Luctus quam ultrices rutrum</td>
									<td><input type="text" placeholder="2" class="input-mini"></td>
									<td>$1,150.00</td>
									<td>$2,450.00</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="/assets/user/themes/images/ladies/3.jpg"></a></td>
									<td>Wuam ultrices rutrum</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>$1,210.00</td>
									<td>$1,123.00</td>
								</tr> -->

<!-- 
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong></strong></td>
								</tr> -->		  
							</tbody>
						</table>
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
					
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong> <?php echo $subtotal ?><br>
							<strong>Eco Tax (2%)</strong>:Rs <?php $evat; $evat=($subtotal*2)/100; echo $evat; ?><br>
							<strong>VAT (17%)</strong>:Rs <?php $vat; $vat=($subtotal*17)/100; echo $vat; ?><br>
							<strong>Total</strong>:Rs <?php $total; $total = $subtotal + $vat + $evat; echo $total; ?><br>
						</p>
						<hr/>

						<?php $_SESSION['total'] = $total;

						$info = [
							'vat'	=> $vat,
							'total'	=> $total,
						];

						

						$_SESSION['data'] = $info;

					

						?>

						<p class="buttons center">				
							<button class="btn" type="button">Update</button>
							<a href="/order/person/details" class="btn btn-success">Continue </a>
						    <a href="/payment/paypal" class="btn btn-default">Checkout</a>
						</p>

									<?php	} else{ ?>
					<h2 class="alert lert-danger"> First add product in cart.</h2>
					<?php 	} ?>



			
					
					<!--<d iv class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
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
													<a href="product_detail.html"><img alt="" src="/assets/user/themes/images/ladies/2.jpg"></a><br/>
													<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="/assets/user/themes/images/ladies/4.jpg"></a><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div> -->

					</div>
				</div>
			</section>

<?php view('layouts/footer');?>