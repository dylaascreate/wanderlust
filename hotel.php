<?php
$title = 'Hotel';
include 'header.php';
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Hotel <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Hotel</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="search-wrap-1 ftco-animate">
          <?php include 'search-hotel.php'; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="section-page1" class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="project-wrap hotel">
          <a href="hotel-details.php" class="img" style="background-image: url(images/hotel-resto-1.jpg);">
            <span class="price">$200/person</span>
          </a>
          <div class="text p-4">
            <p class="star mb-2">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </p>
            <span class="days">8 Days Tour</span>
            <h3><a href="hotel-details.php">Manila Hotel</a></h3>
            <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
            <ul>
              <li><span class="flaticon-shower"></span>2</li>
              <li><span class="flaticon-king-size"></span>3</li>
              <li><span class="flaticon-mountains"></span>Near Mountain</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Select 6 data per page -->
    </div>
  </div>
</section>

<section id="section-page2" class="ftco-section" style="display: none;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="project-wrap hotel">
          <a href="hotel-details.php" class="img" style="background-image: url(images/hotel-resto-5.jpg);">
            <span class="price">$200/person</span>
          </a>
          <div class="text p-4">
            <p class="star mb-2">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </p>
            <span class="days">10 Days Tour</span>
            <h3><a href="hotel-details.php">Manila Hotel</a></h3>
            <p class="location"><span class="fa fa-map-marker"></span> Manila, Philippines</p>
            <ul>
              <li><span class="flaticon-shower"></span>2</li>
              <li><span class="flaticon-king-size"></span>3</li>
              <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Select 3 more data per page -->
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="javascript:void(0);" onclick="navigatePage(-1)">&lt;</a></li>
            <li><a href="javascript:void(0);" onclick="showPage('page1')">1</a></li>
            <li><a href="javascript:void(0);" onclick="showPage('page2')">2</a></li>
            <li><a href="javascript:void(0);" onclick="navigatePage(1)">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
  var currentPage = 1; // Track current page

  function showPage(page) {
    if (page === 'page1') {
      document.getElementById('section-page1').style.display = 'block';
      document.getElementById('section-page2').style.display = 'none';
      currentPage = 1;
    } else if (page === 'page2') {
      document.getElementById('section-page1').style.display = 'none';
      document.getElementById('section-page2').style.display = 'block';
      currentPage = 2;
    }
  }

  function navigatePage(direction) {
    if (direction === -1 && currentPage > 1) {
      showPage('page' + (currentPage - 1));
    } else if (direction === 1 && currentPage < 2) {
      showPage('page' + (currentPage + 1));
    }
  }
</script>