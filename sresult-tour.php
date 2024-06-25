<?php
$title = 'Search Result';
include 'header.php';
?>
	
	<div class="hero-wrap half-height" style="background-image: url('images/bg_5.jpg');">
		<div class="half-height overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text half-height align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<h1 class="mb-4">Search Result</h1>
				</div>
			</div>
		</div>
	</div>

  <style>
    .half-height {
    height: 50vh; /* Half of the viewport height */
    }
  </style>
  <script>
    document.querySelector('.hero-wrap').classList.remove('js-fullheight');
  </script>

	<?php
    include 'search-tour.php';
  ?>

	<section class="ftco-section">
  <div class="container">
    <div class="row">
      @foreach($searchResults as $result)
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('{{ $result->image }}');">
              <span class="price">${{ $result->price }}</span>
            </a>
            <div class="text p-4">
              <h3><a href="#">{{ $result->title }}</a></h3>
              <p>{{ $result->description }}</p>
              <p class="location"><span class="fa fa-map-marker"></span> {{ $result->location }}</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

    
<?php
include 'footer.php';
?>