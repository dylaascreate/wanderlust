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

<!-- DETAILS -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
	  <div class="header">
            <h1><i class="bi bi-cash-coin"></i><b> $240 <del>$380</del> / Per Pax</b></h1>
            <p>3 Days / 4 Night &emsp; Max People : 40 &emsp; <span>Indonesia</span></p>
        </div>
          <img src="images/bg_5.jpg" alt="" class="img-fluid">
        </p>
        <div class="description">
            <p>Tour and travel refer to the activities related to planning, organizing, and experiencing trips to various destinations for leisure, exploration, adventure, or relaxation. Choose your destination based on your interests and preferences, whether it's a cultural experience, a natural adventure, historical exploration, or a beach vacation.</p>
            <p>Book suitable accommodation, which can range from hotels, resorts, hostels, vacation rentals, or even camping depending on your travel style and destination. Arrange transportation to and within your destination. This can include flights, trains, buses, rental cars, or even cruises.</p>
        </div>
		
		<div>
            <h2>Included and Excluded</h2>
            <div class="included-excluded">
            <div class="included">
                <ul>
                    <li><i class="fa fa-check"></i> Meal As Per Hotel Plan And Drinks Free Too.</li>
                    <li><i class="fa fa-check"></i> Return Airport And Round Trip Transfers.</li>
                    <li><i class="fa fa-check"></i> Accommodation On Twin Sharing Basis.</li>
                    <li><i class="fa fa-check"></i> The Above Rates Are On Per Day Disposal Basi</li>
                    <li><i class="fa fa-check"></i> Enjoy Brussels Day Tours. Overnight Brussels</li>
                </ul>
            </div>
            <div class="excluded">
                <ul>
                    <li><i class="bi bi-x-square-fill"></i> AC Will Not Be Functional On Hills Or Slopes.</li>
                    <li><i class="bi bi-x-square-fill"></i> Any Other Service Not Mentioned</li>
                    <li><i class="bi bi-x-square-fill"></i> Additional Entry Fees Other Than Specified</li>
                    <li><i class="bi bi-x-square-fill"></i> Amsterdam Canal Cruise Not Included For Basic</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="highlights">
            <h2>Highlights of the Tour</h2>
            <ul>
                <li><i class="bi bi-bookmark-star-fill"></i> Our Team Of Knowledgeable Guides And Travel Experts Are Dedicated To Making Your Journey Memorable And Worry-Free</li>
                <li><i class="bi bi-bookmark-star-fill"></i> Dive Into Rich Cultures And Traditions. Explore Historic Sites, Savor Authentic Cuisine, And Connect With Locals.</li>
                <li><i class="bi bi-bookmark-star-fill"></i> We Take Care Of All The Details, So You Can Focus On Creating Memories. Rest Assured That Your Journey Is In Capable Hands</li>
                <li><i class="bi bi-bookmark-star-fill"></i> Sip Cocktails On The Beach As You Watch The Sun Dip Below The Horizon.</li>
                <li><i class="bi bi-bookmark-star-fill"></i> From Accommodations To Dining Experiences, We Select The Best Partners To Ensure Your Comfort And Enjoyment Throughout Your Journey.</li>
            </ul>
        </div>

        <div class="itinerary">
            <h2>Itinerary</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <button class="btn btn-primary accordion-button">Day 01: Admire Big Ben, Buckingham Palace And St Paul’s Cathedral<i class="bi bi-chevron-down"></i></button>
                    <div class="accordion-content">
                        <p>Explore iconic landmarks of London.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="btn btn-primary accordion-button">Day 02: Adventure Beggins<i class="bi bi-chevron-down"></i></button>
                    <div class="accordion-content">
                        <p>Begin your adventure with thrilling activities.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="btn btn-primary accordion-button">Day 03: Historical Tour<i class="bi bi-chevron-down"></i></button>
                    <div class="accordion-content">
                        <p>Delve into the rich history of the area.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="location">
            <h2>Location Map</h2>
            <div class="map-container mt-3">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24117.75482780483!2d-74.00601563929485!3d40.71277607426165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1788b1c3f1%3A0xa6b73a633ed2a4d2!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1594364047630!5m2!1sen!2s" 
                    width="100%" 
                    height="450" 
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen="" 
                    aria-hidden="false" 
                    tabindex="0">
                </iframe>
            </div>
        </div>
    
      <?php
      include 'destination-sidebar.php';
      ?>
       </div>
      </div>
    </div>
</section>

<!-- ACTIVITY -->
<section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<h2 class="mb-4">Popular <span style="font-weight:bold; color:#f15d30;">Activities</span> To Do</h2> 
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

<?php include 'footer.php'; ?>\

<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

	/* .container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
} */

.map-container {
    width: 100%;
    height: 450px;
    margin-bottom: 20px;
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.header h1 {
    color: #27ae60;
    margin: 0;
    font-size: 2em;
}

.header del {
    color: #e74c3c;
}

.header p {
    color: #7f8c8d;
}

.description, .included-excluded, .highlights, .itinerary, .location {
    margin-bottom: 20px;
}

h2 {
    color: #2c3e50;
    border-bottom: 2px solid #ecf0f1;
    padding-bottom: 5px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
    font-size: 1em;
}

.included ul li {
    color: #27ae60;
}

.excluded ul li {
    color: #e74c3c;
}
.included-excluded {
    display: flex;
    justify-content: space-between;
}
.included, .excluded {
    width: 48%;
}
.included ul, .excluded ul {
    list-style-type: none;
    padding: 0;
}
.included li, .excluded li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 1rem;
}
.included li i, .excluded li i {
    margin-right: 10px;
    font-size: 1.2rem;
}

.accordion-item {
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
}
.accordion-button {
    width: 100%;
    /* background-color: #ffc107; */
    border: none;
    padding: 15px;
    text-align: left;
    cursor: pointer;
    font-size: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.accordion-content {
    display: none;
    padding: 15px;
    background-color: #fff;
}
.accordion-button.active + .accordion-content {
    display: block;
}
</style>
<script>
	document.querySelectorAll('.accordion-button').forEach(button => {
            button.addEventListener('click', () => {
                const accordionContent = button.nextElementSibling;
                button.classList.toggle('active');

                // Toggle the chevron icon
                const icon = button.querySelector('i');
                icon.classList.toggle('bi-chevron-down');
                icon.classList.toggle('bi-chevron-up');

                if (button.classList.contains('active')) {
                    accordionContent.style.display = 'block';
                } else {
                    accordionContent.style.display = 'none';
                }
            });
        }); 
</script>