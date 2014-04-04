<?php get_header();?>
<?php $upload_dir = wp_upload_dir(); ?>

<!-- Carousel
Change your images in the main.css file.
================================================== -->
<div id="header" class="carousel slide animated fadeIn" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#header" data-slide-to="0" class="active"></li>
    <li data-target="#header" data-slide-to="1"></li>
    <li data-target="#header" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item one active" style="background-image:url('<?php echo $upload_dir['url'] .'/slider1-1.png'; ?>')">
      <div class="container animated fadeInUp">
        <div class="carousel-caption">
          <h1>Lifetime Pleasure</h1>
          <p class="lead margin-40"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
          <!-- <a class="btn-main" href="#"><i class="icon-chevron-right"></i> More</a> -->
        </div>
      </div>
    </div>
    <div class="item two" style="background-image:url('<?php echo $upload_dir['url'] .'/slider1-2.jpg'; ?>');">
      <div class="container">
        <div class="carousel-caption">
          <h1>Exciting Water Sports</h1>
          <p class="lead margin-40"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
          <!-- <a class="btn-main" href="#"><i class="icon-chevron-right"></i> More</a> -->
        </div>
      </div>
    </div>
    <div class="item three" style="background-image:url('<?php echo $upload_dir['url'] .'/slider1-3.jpg'; ?>');">
      <div class="container">
        <div class="carousel-caption">
          <h1>5 Star Quality Rooms</h1>
          <p class="lead margin-40"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
          <!-- <a class="btn-main" href="#"><i class="icon-chevron-right"></i> More</a> -->
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control hidden-xs" href="#header" data-slide="prev"><i class="fa fa-angle-left"></i></a>
  <a class="right carousel-control hidden-xs" href="#header" data-slide="next"><i class="fa fa-angle-right"></i></a>
</div><!-- /.carousel -->

<!--Services-->
<section id="services" class="section">
  <div class="container">
    <div class="row text-center">

      <!--Seciton 1-->
      <div class="col-sm-4 service margin-30">
        <a href="individual-service.html">
          <img src="<?php echo $upload_dir['url'] .'/services1.jpg'; ?>" class="img-thumbnail" alt="">
          <h3>Services # 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </a>
      </div>

      <!--Seciton 2-->
      <div class="col-sm-4 service margin-30">
        <a href="individual-service.html">
          <img src="<?php echo $upload_dir['url'] .'/services2.jpg'; ?>" class="img-thumbnail" alt="">
          <h3>Services # 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </a>

      </div>

      <!--Seciton 3-->
      <div class="col-sm-4 service margin-30">
        <a href="individual-service.html">
          <img src="<?php echo $upload_dir['url'] .'/services3.jpg'; ?>" class="img-thumbnail" alt="">
          <h3>Services # 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </a>

      </div>

    </div>
    <div class="row">
      <div class="col-sm-12 text-center">
        <a class="btn-main" href="services.html"><i class="icon-chevron-right"></i>View All Services</a>
      </div>
    </div>
  </div>
</section>

<!--Latest Work-->
<section id="latest-work" class="section">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12 margin-40">
        <h3>Facilities & Amenities</h3>
      </div>
    </div>

    <div class="row margin-40">

  		<!--Project Thumbnail One-->
  		<div class="col-sm-4">
  			<div class="thumbs">
    			<img src="<?php echo $upload_dir['url'] .'/facility1.jpg'; ?>" class="img-responsive img-thumbnail" alt="Image Size 430x280">
    			<a href="individual-facility.html">
    				<span class="title">
    					<span><i class="fa fa-link fa-2x"></i></span>
    				</span>
    			</a>
  			</div>

  			<div class="project-title margin-30">
  		    <h4>Facility # 1</h4>
  		  </div>
  		</div>

  		<!--Project Thumbnail Two-->
  		<div class="col-sm-4">
  			<div class="thumbs">
    			<img src="<?php echo $upload_dir['url'] .'/facility2.jpg'; ?>" class="img-responsive img-thumbnail" alt="Image Size 430x280">
    			<a href="individual-facility.html">
    				<span class="title">
    					<span><i class="fa fa-link fa-2x"></i></span>
    				</span>
    			</a>
  			</div>

  			<div class="project-title margin-30">
  		    <h4>Facility # 2</h4>
  		  </div>
  		</div>

  		<!--Project Thumbnail Three-->
  		<div class="col-sm-4">
  			<div class="thumbs">
    			<img src="<?php echo $upload_dir['url'] .'/facility3.jpg'; ?>" class="img-responsive img-thumbnail" alt="Image Size 430x280">
    			<a href="individual-facility.html">
    				<span class="title">
    					<span><i class="fa fa-link fa-2x"></i></span>
    				</span>
    			</a>
  			</div>

  			<div class="project-title margin-30">
  		    <h4>Facility # 3</h4>
  		  </div>
  		</div>

  	</div><!--End Row of Work-->

  	<div class="row margin-40">

  		<!--Project Thumbnail One-->
  		<div class="col-sm-4">
  			<div class="thumbs">
    			<img src="<?php echo $upload_dir['url'] .'/facility4.jpg'; ?>" class="img-responsive img-thumbnail" alt="Image Size 430x280">
    			<a href="individual-facility.html">
    				<span class="title">
    					<span><i class="fa fa-link fa-2x"></i></span>
    				</span>
    			</a>
  			</div>

  			<div class="project-title margin-30">
  		    <h4>Facility # 4</h4>
  		  </div>
  		</div>

  		<!--Project Thumbnail Two-->
  		<div class="col-sm-4">
  			<div class="thumbs">
    			<img src="<?php echo $upload_dir['url'] .'/facility5.jpg'; ?>" class="img-responsive img-thumbnail" alt="Image Size 430x280">
    			<a href="individual-facility.html">
    				<span class="title">
    					<span><i class="fa fa-link fa-2x"></i></span>
    				</span>
    			</a>
  			</div>

  			<div class="project-title margin-30">
  		    <h4>Facility # 5</h4>
  		  </div>
  		</div>

  		<!--Project Thumbnail Three-->
  		<div class="col-sm-4">
  			<div class="thumbs">
    			<img src="<?php echo $upload_dir['url'] .'/facility6.jpg'; ?>" class="img-responsive img-thumbnail" alt="Image Size 430x280">
    			<a href="individual-facility.html">
    				<span class="title">
    					<span><i class="fa fa-link fa-2x"></i></span>
    				</span>
    			</a>
  			</div>

  			<div class="project-title margin-30">
  		    <h4>Facility # 6</h4>
  		  </div>
  		</div>

  	</div><!--End Row of Work-->

		<div class="row">
      <div class="col-sm-12 text-center">
        <a class="btn-main" href="facility.html"><i class="icon-chevron-right"></i>View All Facilities and Amenities</a>
      </div>
    </div>

  </div>
</section>


<?php get_footer();?>
