<?php if(!class_exists('Rain\Tpl')){exit;}?><div id="main" >
		
		<video autoplay muted loop id="myVideo">
			<source src="/ecommerce/res/site/img/twvid.mp4" type="video/mp4"> 
		</video> 
		<div class="content">
			<h1>Truck & Wheel</h1>
				<P>sfdh</P>
			<!-- Use a button to pause/play the video with JavaScript -->
			<button id="myBtn" onclick="myFunction()">Pause</button>
		</div>	


	<div class="container" >
		<div class="row" style="margin-top: -150px;">
			<div class="col-md-5 col-xs-12">
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
					  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
					  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
					  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
					</div>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img src="/ecommerce/res/site/img/me1.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						  <h5>First slide label</h5>
						  <p>Some representative placeholder content for the first slide.</p>
						</div>
					  </div>
					  <div class="carousel-item">
						<img src="/ecommerce/res/site/img/me2.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						  <h5>Second slide label</h5>
						  <p>Some representative placeholder content for the second slide.</p>
						</div>
					  </div>
					  <div class="carousel-item">
						<img src="/ecommerce/res/site/img/me3.jpeg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						  <h5>Third slide label</h5>
						  <p>Some representative placeholder content for the third slide.</p>
						</div>
					  </div>
					  <div class="carousel-item">
						<img src="/ecommerce/res/site/img/me4.jpeg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						  <h5>Third slide label</h5>
						  <p>Some representative placeholder content for the third slide.</p>
						</div>
					  </div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Next</span>
					</button>
				  </div>
			</div>
			<div class="col-md-7 col-xs-12" style="background-color:#363636; color: white; ">
				<h1>Olá Amigos!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate. Maecenas nisi massa, imperdiet at viverra sed, gravida id quam. Vestibulum diam est, efficitur in libero ut, maximus dictum tellus. In a leo dolor. Nam nec dictum magna. Donec interdum dolor vel nulla placerat, at tincidunt orci viverra. Curabitur vel lacus enim. Morbi iaculis ipsum et mi pretium ultricies. Duis ut metus quis sapien dictum euismod. Vestibulum leo odio, porttitor eget ultricies eu, dignissim id tortor.</p>
				<p><a class="btn btn-danger " href="?i=ola" role="button">Ler mais</a></p>
			</div>
		</div>
	</div>
</div>
	<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
		<div class="row "> 
			<div class="col-sm-6 col-md-4"> 
				<div class="img-thumbnail" style="text-align: center; margin-bottom: 20px;"> 
					<img id="imagens" src="/ecommerce/res/site/img/f3.jpeg"> 
					<div class="caption"> 
						<h3>Contactos</h3> 
						<p><a href="/ecommerce/index.php/contactos" class="btn btn-danger" role="button">Ler mais</a>
					</div> 
				</div> 
			</div> 
		</div>
	</div>

<div class="maincontent-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="latest-product">
					<h2 class="section-title">Serviços</h2>
					<div class="product-carousel">
						<?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

						<div class="single-product">
							<div class="product-f-image">
								<img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
								<div class="product-hover">
									<a href="/ecommerce/index.php/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="add-to-cart-link text-decoration-none"><i class="fa fa-shopping-cart"></i> Pre-Reserva</a>
									<a href="/ecommerce/index.php/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="view-details-link text-decoration-none"><i class="fa fa-link"></i> Detalhes</a>
								</div>
							</div>
							
							<h2><a class="text-decoration-none" href="/ecommerce/index.php/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>
							
							<div class="product-carousel-price">
								<ins><?php echo formatPrice($value1["vlprice"]); ?>€</ins>
							</div> 
						</div>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- End main content area -->

<script>
	// Get the video
	var video = document.getElementById("myVideo");
	
	// Get the button
	var btn = document.getElementById("myBtn");
	
	// Pause and play the video, and change the button text
	function myFunction() {
	  if (video.paused) {
		video.play();
		btn.innerHTML = "Pause";
	  } else {
		video.pause();
		btn.innerHTML = "Play";
	  }
	}
	</script>

