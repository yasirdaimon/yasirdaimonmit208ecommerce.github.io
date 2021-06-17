
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/banner5.jpg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/banner4CH.jpg" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     


		<!-- SECTION -->
		<div class="section mainn mainn-raised">
		
		
			<!-- container -->
			<div class="container">
			
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=78"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop01ch.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Appliances<br>Collection</h3>
								<a href="product.php?p=78" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=72"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop03ch.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Outdoor Living<br>Collection</h3>
								<a href="product.php?p=72" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=79"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop02ch.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Windows<br>Collection</h3>
								<a href="product.php?p=79" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		  
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 1 AND 6";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>₱$pro_price<del class='product-old-price'>₱990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										<!-- product -->
										
	
										<!-- /product -->
										
										
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		
		<!-- /HOT DEAL SECTION -->
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Nationwide Network</h4>
							<h6 class="product-name">CitiHardware's Stores located throughout the Philippines</h6>
						</div>
						

						
							
								<!-- product widget -->
								<div class="product-widget">
									
									<div class="product-body">
                                        <h3 class="product-name"><a href="#">Luzon</a></h3>
										<p class="product-category">Batangas</p>
                                        <p class="product-category">Cabanatuan</p>
                                        <p class="product-category">Calapan</p>
                                        <p class="product-category">Dasmariñas</p>
                                        <p class="product-category">La Union</p>
                                        <p class="product-category">Legaspi</p>
                                        <p class="product-category">Luceña</p>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								
								<!-- /product widget -->

								<!-- product widget -->
								
								<!-- product widget -->
							</div>
						<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title"></h4>
							
						</div>

						
							<div>
								<!-- product widget -->
								<div class="product-widget">
									
									<div class="product-body">
                                        <h3 class="product-name"><a href="#">Visayas</a></h3>
										<p class="product-category">Antique</p>
                                        <p class="product-category">Bacolod</p>
                                        <p class="product-category">Biliran</p>
                                        <p class="product-category">Bohol</p>
                                        <p class="product-category">Cebu</p>
                                        <p class="product-category">Dumaguete</p>
                                        <p class="product-category">Iloilo</p>
                                        <p class="product-category">Kabankalan</p>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								
								<!-- /product widget -->

								<!-- product widget -->
								
								<!-- product widget -->
							</div>
					</div>
						<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title"></h4>
							
						</div>

						
							<div>
								<!-- product widget -->
								<div class="product-widget">
									
									<div class="product-body">
                                        <h3 class="product-name"><a href="#">Mindanao</a></h3>
										<p class="product-category">Butuan</p>
                                        <p class="product-category">Cagayan de Oro</p>
                                        <p class="product-category">Cotabato</p>
                                        <p class="product-category">Davao</p>
                                        <p class="product-category">Digos</p>
                                        <p class="product-category">Dipolog</p>
                                        <p class="product-category">El Salvador</p>
                                        <p class="product-category">Gensan</p>
                                        <p class="product-category">Gingoog</p>
                                        <p class="product-category">Iligan</p>
                                        <p class="product-category">Kidapawan</p>
                                        <p class="product-category">Malaybalay</p>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								
								<!-- /product widget -->

								<!-- product widget -->
								
								<!-- product widget -->
							</div>
					</div>
					

							<div>
								<!-- product widget -->
								
								<!-- /product widget -->

								<!-- product widget -->
								
								<!-- /product widget -->

								<!-- product widget -->
								
								<!-- product widget -->
							</div>
						
					</div>

					

					

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</div>
		