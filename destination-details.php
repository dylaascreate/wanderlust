<?php
$title = 'Destination Details';  // set destination/tour title
include 'header.php';
?>
 
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
         <h1 class="mb-0 bread">Destination/Tour Title</h1>
      </div>
    </div>
 </div>
</section>

<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Activities</span>
						<h2 class="mb-4">Popular Activities To Do</h2> 
						<!-- pull >4 data from databse, select destination and calc total of tour existed from tour table -->
					</div>
				</div>
			</div>
			<div class="container-1">
				<div class="carousel-1">
					<img class="item" src="https://images.pexels.com/photos/21927155/pexels-photo-21927155/free-photo-of-madera-amanecer-paisaje-agua.jpeg" alt="">
					<img class="item" src="https://images.pexels.com/photos/22027165/pexels-photo-22027165/free-photo-of-nieve-nevar-paisaje-puesta-de-sol.jpeg" alt="">
					<img class="item" src="https://images.pexels.com/photos/22377281/pexels-photo-22377281/free-photo-of-madera-paisaje-agua-verano.jpeg" alt="">
					<img class="item" src="https://images.pexels.com/photos/22447657/pexels-photo-22447657/free-photo-of-madera-paisaje-agua-verano.jpeg" alt="">
					<img class="item" src="https://images.pexels.com/photos/13673325/pexels-photo-13673325.jpeg" alt="">
				</div>
			</div>
</section>

<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Activities</span>
						<h2 class="mb-4">Popular Activities To Do</h2> 
						<!-- pull >4 data from databse, select destination and calc total of tour existed from tour table -->
					</div>
				</div>
			</div>
			<div class="container container-2">
				<div class="row">
					<div class="col-md-12">
						<div class="carousel-destination owl-carousel ftco-animate">
							<div class="item">
								<div class="project-destination">
									<a href="sresult-tour.php" class="img" style="background-image: url(images/place-1.jpg);">
										<div class="text">
											<h3>Snorkelling</h3>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php include 'footer.php'; ?>