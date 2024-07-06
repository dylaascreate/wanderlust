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