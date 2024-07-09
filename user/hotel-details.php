<?php
$title = 'Hotel Details'; // set hotel name
include 'header.php';
?>
 <!-- HERO -->
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <h1 class="mb-0 bread">Hotel Name</h1> <!-- set hotel name -->
     </div>
   </div>
 </div>
 </section>

 <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Our Rooms</span>
						<h2 class="mb-4">Explore Our Rooms</h2> 
						<!-- pull >4 data from databse, select destination and calc total of tour existed from tour table -->
					</div>
				</div>
			</div>
			<div class="container">
      <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/room-1.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <small class="border-end me-2  pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-2  pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="booking.php" href="javascript:void(0);" onclick="alertUserLogin()">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/room-2.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="justify-content-between mb-3">
                                    <h5 class="mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="booking.php" href="javascript:void(0);" onclick="alertUserLogin()">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="images/room-3.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="justify-content-between mb-3">
                                    <h5 class="mb-0">Super Deluxe</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <small class="border-end me-2  pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-2  pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="booking.php" href="javascript:void(0);" onclick="alertUserLogin()">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
<?php include 'footer.php'; ?>